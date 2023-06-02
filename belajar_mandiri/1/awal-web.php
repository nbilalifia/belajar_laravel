<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // '/' untuk nama routenya 
    return view('welcome'); // ketika membuka index akan muncul 'welcome' || dibuka di folder resources -> views -> welcome.blade.php 
});

Route::get('/about', function () {
    return 'apaaja';
});

Route::get('/kali', function () {
    return 9*9;
});

Route::get('/contact', function(){
    return view('contact', ['name' => 'nabila', 'phone' => '08990164587' ]);  //pilih salah satu, bisa ini atau yang bawah
});

Route::view ('/contact','contact', ['name' => 'nabila', 'phone' => '08990164587' ]); //untuk melihat halaman web yg dibuat

Route::redirect('/contact', '/contact-us'); //otomatismemindah page website dari contact ke contact-us

Route::get('/product', function(){
    return 'product';
});

Route::get('/product/{id}', function($id){
    return 'ini adalah product dengan id ' .$id;
});

Route::get('/product/{id}', function($id){
    return view('product.detail', ['id' => $id]);
});
