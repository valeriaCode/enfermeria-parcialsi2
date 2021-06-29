<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Users;

class UsersController extends Controller
{
    public function login(){
        return view('login');
    }

    public function inicioPersonal(){
        return view('menucliente');
    }

    public function register(){
        return view('register');
    }

    public function forgot(){
        return view('forgotpassword');
    }

    public function registra(){
        return view('registre');
    }

    public function already(){
        return view('login');
    }

    public function getusers(){
        $users=Users::where('tipo','=','3')->get();
        return view('menuadmin',compact('users'));
    }

    public function volverLogin(){
        return view('login');
    }

    
}

   
