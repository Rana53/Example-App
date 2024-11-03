<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

Route::get('/', function(){
    return view('welcome');
});
/*
Route::get('/home', function(){
    return view('home');
}); We can replace with the bellow code(for openning a view) 
*/
Route::view('/home','home');
Route::get('/about/{name}', function($name){
    return view('about',['name'=>$name]);
});

Route::get('user',[UserController::class, 'getUser']);
Route::get('aboutuser',[UserController::class, 'aboutUser']);
Route::get('username/{name}',[UserController::class,'userName']);
Route::get('admin/{adminname}',[UserController::class,'adminLogin']);

//Route::get('admin',[UserController::class, 'adminLogin']);