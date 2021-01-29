<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class Mobilecontroller extends Controller
{
    //
    public function index($code)
    {
        $mobile = DB::table('products')->select('*')->where('category_name', '=', $code)->get();
        $port = Category::all();
        $data = ['mobile' => $mobile,'title'=>$port];
        return view('mobile', $data);
    }
}
