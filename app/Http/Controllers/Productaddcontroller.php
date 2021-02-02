<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Productaddcontroller extends Controller
{
    //
    public function index(Request $request){
        $data = ['title'=>'Adding a new product'];
        return view('admin.productadd',$data);
    }
}
