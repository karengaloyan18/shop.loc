<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Rediscontroller extends Controller
{
    public function index(Request $request)
    {
//        $res = json_encode($request->val);
        if ($request->isMethod('POST')) {
            $res = $request->val;
            echo $restwo = $request->valtwo;
            $request->session()->put('product'.$res, $restwo);

        } else {
            $request->session()->forget(['_token', '_flash', '_previous']);
            $data = $request->session()->all();
            $one = [];
            foreach ($data as $date => $dat){
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
                    $first[$pro->image] = $pro->name;
//                    dump($pro->price);
//                    $second[$pro->image] = $pro->price;
//                    dump($pro->id);
                }
            }
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
            return view('card2', ['first'=>$first]);
        }
    }
}
