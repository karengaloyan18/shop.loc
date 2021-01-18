<?php

use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\Mobilecontroller;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Rediscontroller;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Pagecontroller::class,'index'])->name('index');
Route::get('/categories',[Categorycontroller::class,'index'])->name('categories');


Route::match(['get','post'],'/category-{code}',[Mobilecontroller::class,'index'])->name('category');
Route::match(['get','post'],'/product-{name}',[Productcontroller::class,'index'])->name('product');


Route::post('/card',[Rediscontroller::class,'index'])->name('card');
Route::get('/card',[Rediscontroller::class,'index'])->name('card');
//Route::match(['get','post'],'/card2',[Rediscontroller::class,'index2'])->name('card2');
