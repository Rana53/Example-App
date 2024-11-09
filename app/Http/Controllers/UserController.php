<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    function addUser(Request $request){
        echo "Add user done";
        $request->validate([
            'name'=>'required | min:3',
            'gender'=>'required',
            'frameworks'=>'required',
            'cars'=>'required',
            'email'=>'required | email'
        ],[
            'name.required'=>'User name can\'t be empty',
            'name.min'=>'username min character should be 3'
        ]);
    }



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

    }
}
