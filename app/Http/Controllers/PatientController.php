<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use  App\Models\Reservation;

class PatientController extends Controller
{
    public function showpatient(){
        return view('menuadmin');
    }

    public function patientList(){
        $datos=Reservation::all();
        return view('listadoPacientes',compact('datos'));
    }

    
}
