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
    return "<h1>Home Page</h1>";
});

Route::get('/product',function (){
    return "<h1>Pagina del prodotto</h1>";
});

Route::get('/contacts',function(){
    return "<h1>Pagina dei contatti</h1>";
});