<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagecontroller extends Controller
{
    //
    public function index(){

//        $products = Product::all();
        $products = DB::table('products')->Paginate(6);
//        $y = [];
//        foreach ($products as $product){
//           $y[] = $product;
//        }
//        dd($y);

        $data = ['products'=>$products];
        return view('index',$data);
    }
}
