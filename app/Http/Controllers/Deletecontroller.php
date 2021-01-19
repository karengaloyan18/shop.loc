<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Deletecontroller extends Controller
{
    //
    public function index(Request $request){
        if ($request->isMethod('POST')) {
//            dd($request->name);
//            dd($request->session()->all());
//            $request->session()->forget($request->name);
//            echo $request->session()->all();
            $request->session()->forget([$request->name,'_flash', '_previous']);
            $dataw = $request->session()->all();
            $one = [];
            foreach ($dataw as $date => $dat){
//                dd($dat);
//                foreach ($dat as $da => $d){
                $one[] = $dat;
            }

//            }
//            dd($one);
            $product = [];
            foreach ($one as $on => $or){
//                foreach ($or as $o => $oi) {
//                    $two[] = $or;
                $product[] = DB::table('products')->select('*')->where('name', '=', $or)->get();
//                }
            }

//            dd($product);
            $first = [];
            $second = [];
//            $third = [];
            foreach ($product as $produc => $produ){
//                dump($p);
                foreach ($produ as $prod => $pro){
//                    dump($pro->name);
                    $first[$pro->name] = $pro->image;
//                    dump($pro->price);
                    $second[] = $pro->price;
//                    dump($pro->id);
                }
            }
//            dd($first);
//           $del =  array_merge($first,$second);
//            dd($del);
//            dd($first);
//            $product = [];
//            foreach ($data as $datum => $date) {
////                $yes[] = $date;
////                dump($date);
//                $product[] = DB::table('products')->select('*')->where('name', '=', $date)->get();
////                var_dump($product);
//////                dd($date);
////                foreach ($date as $dat){
////                    $yes[] = $dat;
//            }
//
//            $dataone = ['products' => $product];
            $total = 0;
            foreach ($second as $sec => $s){
                $total += $s;
            }
//            dd($total);
//            $total = [];

//        }
           echo view('card2', ['first'=>$first,'second'=>$second,'total'=>$total])->render();
//            header("Location:user.php?uid=$uid");
//            header('Location:http://shop.loc/card');
//            return response()->json(array('success' => true, 'html'=>$returnHTML));

//        return redirect()->route('card');
    }
    }
}
