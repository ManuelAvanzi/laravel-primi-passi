<?php

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
Route::get('/', function () {
   $data =[
       'name'=>'Manuel',
       'lastname'=>'avanzi',
       'home'=>'home',
       'product'=>'product',
       'contacts'=>'contacts',
       'test'=>'test'
       
   ];

    return view("home", $data);
    
});

Route::get('/product',function (){
    return view("product");
});

Route::get('/contacts',function(){
    return view("contacts");
});

Route::get('/test',function(){
    return view("tests.test");
});

Route::get('/test2',function(){
    return "<p>testo di prova</p>";
});