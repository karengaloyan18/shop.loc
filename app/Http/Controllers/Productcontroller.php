<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Productcontroller extends Controller
{
    //
    public function index($name){
        $products = DB::table('products')->select('*')->where('name',$name)->get();
        $data = ['products'=>$products];
        return view('product',$data);
    }
}
