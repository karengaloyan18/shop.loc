<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Deletecontroller extends Controller
{
    //
    public function index(Request $request){
//        dd('karen');
        if ($request->isMethod('POST')) {
//           echo('k');
//            dd($request->name);
//            echo "<script>console.log(val) </script>";
            $request->session()->forget('product'.$request->val);
//            echo $request->session()->all();
//            return redirect()->route('card');
    }
    }
}
