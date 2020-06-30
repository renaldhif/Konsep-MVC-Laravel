<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
        public function register(){
        return view('register');
    }

    public function welcome_post(Request $request){
        return view('welcome', ['firstname'=>$request['firstname'], 'lastname'=>$request['lastname']]);
    }
}
