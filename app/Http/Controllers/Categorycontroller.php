<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    //
    public function index(){

        $categories = Category::all();
        $data = ['categories'=> $categories];
        return view('categories',$data);
    }
}
