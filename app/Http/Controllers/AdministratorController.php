<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class AdministratorController extends Controller
{
    public function menu(){
        $users=Users::where('tipo','=','3')->get();
        return view('menuadmin',compact('users'));
    }


    

    
    
}
