<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Productaddcontroller extends Controller
{
    //
    public function index(Request $request){
        $categories = DB::table('categories')->select('*')->get();
        $yes = [];
        foreach ($categories as $c => $category){
            $yes[] = $category->name;
        }
        $products = DB::table('products')->select('*')->get();
        if ($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = ['name' => 'required',
                'price' => 'required',
                'description' => 'required',
                'category_name' => 'required',
                'image' => 'required'];
           // |regex:/^[A-Z]{3,33}$/
            $validate = Validator::make($input,$rules);
            if ($validate->fails()){
                return redirect()->route('addproduct')->withErrors($validate)->withInput();
            }
            $file = $request->file('image');
            $input['image'] = $file->getClientOriginalName();
            $file->move(public_path().'/images',$input['image']);

            $product = new Product();
            $product->fill($input);

            if ($product->save()){
                return redirect()->route('products')->with('status','New product is added');
            }
//            dump($input);
        }
        $data = ['title'=>'Adding a new product','yes'=>$yes,'products'=>$products];
        return view('admin.productadd',$data);
    }
}
