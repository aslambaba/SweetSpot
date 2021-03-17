<?php

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

use App\Messege;
use App\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function(){
    $getProducts = Product::all();
    return view('products',['products'=>$getProducts]);
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/contactus',function (){
    return view('contact');
});

Route::get('/admin',function (){
    $getProducts = Product::all();
    return view('adminPanel',['products'=>$getProducts]);
});
Route::get('/admin/addproduct',function (){
    return view('adminAddProduct');
});
Route::post('/admin/addproduct','Actions@AddNewProuct');

Route::get('/admin/messeges',function (){
    $getMesseges = Messege::all();
    return view('adminMesseges',["messeges"=>$getMesseges]);
});
Route::post('/contactus','Actions@AddMessege');
