<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use PhpParser\Node\Expr\FuncCall;

Route::get('/', function(){
    return view('welcome');
});
/*
Route::get('/home', function(){
    return view('home');
}); We can replace with the bellow code(for openning a view) 
*/
Route::view('/home','home');
Route::view('/user','user');

// Route::get('/user',function($users){
//     return view('user',['users'=>$users]);

// });

Route::view('user-form','components.form-handler');
Route::post('add-user',[UserController::class, 'addUser']);

// Called view thru function instead of Controllers
Route::get('/about/{name}', function($name){
    return view('about',['name'=>$name]);
});

// Called view through controller
Route::get('user',[UserController::class, 'getUser']);
Route::get('aboutuser',[UserController::class, 'aboutUser']);
Route::get('username/{name}',[UserController::class,'userName']);
Route::get('admin/{adminname}',[UserController::class,'adminLogin']);

//Route::get('admin',[UserController::class, 'adminLogin']);