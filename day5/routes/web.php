<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
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

//Kontroller normal

//Route::get('/home',[PostController::class,'index']);


//Kontroller CRUD

Route::resource('/blog',BlogController::class);

Route::match(['get','post'],'/create',[BlogController::class,'create']);

Route::post('/blog.store',[BlogController::class,'store'])->name('store');