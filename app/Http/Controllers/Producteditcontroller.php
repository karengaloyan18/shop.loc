<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Producteditcontroller extends Controller
{
    //
    public function index(Product $product, Request $request)
    {
        $products = $product->getOriginal();

       $categories = DB::table('categories')->select('*')->get();
        $yes = [];
       foreach ($categories as $c => $category){
           $yes[] = $category->name;
       }

        if ($request->isMethod('delete')) {
            $product->delete();

            return redirect()->route('products')->with('status', $products['name'] . ' was deleted');
        }

        if ($request->isMethod('POST')) {

            $input = $request->except('_token');

            $rules = ['name' => 'required',
                'price' => 'required',
                'description' => 'required',
                'category_name' => 'required',
                'image' => 'required'];
//                'icon'=>'required|regex:/^icon-[a-z]{2,13}$/'];
            $validate = Validator::make($input, $rules);
//            dd($validate);
            if ($validate->fails()) {
                return redirect()->route('editproduct', ['product' => $products['id']])->withErrors($validate)->withInput();
            }
            $file = $request->file('image');
            $input['image'] = $file->getClientOriginalName();
            $file->move(public_path() . '/images', $input['image']);

            $product->fill($input);
            if ($product->save()) {
                return redirect()->route('products')->with('status', $products['name'] . ' was updated');
            }
            dd($input);
        }
        $data = ['title' => $products['name'] . ' updating', 'product' => $product, 'products' => $products,'yes'=>$yes];
        return view('admin.productedit', $data);
    }
}
