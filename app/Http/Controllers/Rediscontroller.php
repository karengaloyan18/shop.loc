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
            if (!$request->session()->exists('product' . $request->val)) {
                $res = $request->val;
                echo $restwo = $request->valtwo;
                $request->session()->put('product' . $res, $restwo);
            } else {

                return response('Hello World', 300)
                    ->header('Content-Type', 'text/plain');

            }
        } else {
            $request->session()->forget([/*'_token',*/ '_flash', '_previous']);
            $data = $request->session()->all();
            $one = [];
            foreach ($data as $date => $dat) {

                $one[] = $dat;
            }

            $product = [];
            foreach ($one as $on => $or) {

                $product[] = DB::table('products')->select('*')->where('name', '=', $or)->get();

            }


            $first = [];
            $second = [];

            foreach ($product as $produc => $produ) {
//                dump($p);
                foreach ($produ as $prod => $pro) {
                    $first[$pro->id] = ['prod' => $pro->name, 'image' => $pro->image, 'price' => $pro->price];
                    $second[] = $pro->price;
                }
            }

            $total = 0;
            foreach ($second as $sec => $s) {
                $total += $s;
            }

            return view('card', ['first' => $first, 'second' => $second, 'total' => $total]);
        }
    }
}
