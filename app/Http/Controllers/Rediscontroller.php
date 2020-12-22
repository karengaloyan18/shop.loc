<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Rediscontroller extends Controller
{
    //
    public function index(Request $request)
    {
//        $request->session()->flush();
        echo $res =  json_encode($request->val);
//        $request->session()->put($res,$res);

        echo "<script>
                 localStorage.setItem('test', 1);
            </script>";
    }
    public function index2(Request $request){
        echo "<script>
                document.write( localStorage.getItem('test') ); // 1
            </script>";
//        $data = $request->session()->all();
////        $yes= [];
//        dump($data);
//        foreach ($data as $datum) {
//           $yes[]= $datum;
//        }
//        dd($yes);
//        return view('card2',$data);
    }
}
