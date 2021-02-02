<?php

use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\Checkoutcontroller;
use App\Http\Controllers\Deletecontroller;
use App\Http\Controllers\Mobilecontroller;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Productaddcontroller;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Producteditcontroller;
use App\Http\Controllers\Productscontroller;
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

Route::get('/', [Pagecontroller::class, 'index'])->name('index');
Route::get('/categories', [Categorycontroller::class, 'index'])->name('categories');


Route::match(['get', 'post'], '/category-{code}', [Mobilecontroller::class, 'index'])->name('category');
Route::match(['get', 'post'], '/product-{name}', [Productcontroller::class, 'index'])->name('product');


Route::post('/card', [Rediscontroller::class, 'index'])->name('card');
Route::get('/card', [Rediscontroller::class, 'index'])->name('card');
Route::post('/del', [Deletecontroller::class, 'index'])->name('del');


Route::get('/checkout', [Checkoutcontroller::class, 'index'])->name('checkout');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    Route::prefix('products')->group(function (){
        Route::get('/',[Productscontroller::class,'index'])->name('products');
        Route::match(['get', 'post', 'delete'], '/edit{product}', [Producteditcontroller::class, 'index'])->name('editproduct');
        Route::match(['get','post'],'add',[Productaddcontroller::class,'index'])->name('addproduct');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/del',[Deletecontroller::class,'index'])->name('del');
//Route::match(['get','post'],'/card2',[Rediscontroller::class,'index2'])->name('card2');
