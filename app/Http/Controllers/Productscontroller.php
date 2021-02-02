<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Productscontroller extends Controller
{
    //
    public function index(){
        $products = Product::all();
        $data =  ['title'=>'Products','products'=>$products];
        return view('admin.products',$data);
    }
}
