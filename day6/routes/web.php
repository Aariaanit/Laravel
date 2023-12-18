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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('blog.index',['username'=>'Arianit']);
});

Route::get('/alert', function () {
    return view('blog.index',['url'=>'<script> alert("Hello Laravel");</script>']);
});


Route::get('/blog', function () {
    return view('blog.index',[
        'username'=>'Arianit',
        'url'=>'<script> alert("Hello Laravel");</script>',
        'paragraf'=>'<p>Shkolla Digjitale</p>',
        'name'=>["arianit","Tershnjaku",29],
        'age'=>29 
    ]);
});