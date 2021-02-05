<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Categoriesaddcontroller extends Controller
{
    //
    public function index(Request $request){
        if ($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = ['name' => 'required',
                'description' => 'required',
                'image' => 'required'];
            // |regex:/^[A-Z]{3,33}$/
            $validate = Validator::make($input,$rules);
            if ($validate->fails()){
                return redirect()->route('addcategory')->withErrors($validate)->withInput();
            }
            $file = $request->file('image');
            $input['image'] = $file->getClientOriginalName();
            $file->move(public_path().'/images',$input['image']);

            $category = new Category();
            $category->fill($input);

            if ($category->save()){
                return redirect()->route('categories')->with('status','New category is added');
            }
//            dump($input);
        }
        $data = ['title'=>'Adding a new category'];
        return view('admin.categoryadd',$data);
    }
}
