<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return view('user');
    }
    function aboutUser(){
        return "About Mango People";
    }
    function userName($name){
        echo  "User Controller {$name}";
        return view('getuser',['name'=>$name]);
    }
    function adminLogin($adminname){
        return view('admin.login',['admin'=>$adminname]);
        //user Controller not working
    }
}
