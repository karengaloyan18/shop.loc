<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Categoriescontroller extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $data =  ['title'=>'Categories','categories'=>$categories];
        return view('admin.categories',$data);
    }
}
