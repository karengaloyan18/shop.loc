<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Mobilecontroller extends Controller
{
    public function index($code)
    {
        $products = DB::table('products')->select('*')->where('category_name', '=', $code)->paginate(6);
        $data = ['products' => $products];
        return view('mobile', $data);
    }
}
