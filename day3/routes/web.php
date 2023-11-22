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


//Global Constraints

Route::get('/Arianit/{id}', function ($id) {  
    return $id;  
   });  
Route::get('/post/{id}', function ($id) {  
    return $id;  
});  
   
   
   //Laravel Named Routes      1
   
   Route::get('user/{id}/profile',function($id)  
   {  
       //Pyetje: Si mundem me e nxjerr ne link id qe e shenoje ne URL?
      $url=route('profile',['id'=>$id]);  
       return $url;  
   })->name('profile');  
   
   
   //Navigating from one route to another using named routes  4
   
   Route::get('/',function()  
   {  
     return view('home');  
   });  
     
   Route::get('home/details',function()  
   {  
     $url=route('home.details');  
    return $url;  
   })->name('home.details'); 