<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nurse;

class NurseController extends Controller
{
    public function loginNurse(){
        return view('loginNurse');
    }

    public function menunurse(){
        return view('menuNurse');
    }

    public function seenurse(){
        return view('listnurse2');
    }

    public function nurseList(){
        $datos=Nurse::all();
        return view('listadoEnfermeros',compact('datos'));
    }

    public function savenurse(Request $request){
        //  $reservar=Reservation::all();
        $newnurse=[
            'nombre'=>$request->nombre,
            'activo'=>$request->activo,
           
            
        ];
        
  
        $newnurse=Nurse::create($newnurse);
        return (redirect(route('menu'))); //nombre de la ruta get
          
      }

      

      
}

