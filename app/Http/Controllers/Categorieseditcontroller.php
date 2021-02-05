<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Categorieseditcontroller extends Controller
{
    //
    public function index(Category $category, Request $request)
    {
        $categories = $category->getOriginal();

        if ($request->isMethod('delete')) {
            $category->delete();

            return redirect()->route('categories')->with('status', $categories['name'] . ' was deleted');
        }

//            dd($products['name']);
        if ($request->isMethod('POST')) {
//            dd($product->id);
//            dd($product->getOriginal());
            $input = $request->except('_token');
//            dd($request->all());
            $rules = ['name' => 'required',
                'description' => 'required',
                'image' => 'required'];
//                'icon'=>'required|regex:/^icon-[a-z]{2,13}$/'];
            $validate = Validator::make($input, $rules);
//            dd($validate);
            if ($validate->fails()) {
                return redirect()->route('editcategory', ['category' => $categories['id']])->withErrors($validate)->withInput();
            }
            $file = $request->file('image');
            $input['image'] = $file->getClientOriginalName();
            $file->move(public_path() . '/images', $input['image']);


            $category->fill($input);
            if ($category->save()) {
                return redirect()->route('categories')->with('status', $categories['name'] . ' was updated');
            }
//            dump($input);
            dd($input);
        }
        $data = ['title' => $categories['name'] . ' updating', 'category' => $category, 'categories' => $categories];
        return view('admin.categoryedit', $data);
    }
}
