<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagecontroller extends Controller
{
    //
    public function index(){
        $products = DB::table('products')->Paginate(6);
        $data = ['products'=>$products];
        return view('index',$data);
    }
}
