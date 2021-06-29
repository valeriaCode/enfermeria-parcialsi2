<?php

namespace App\Http\Controllers;

use Illuminate\Console\Application;
use Illuminate\Http\Request;
use  App\Models\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function reservation(){
        return view('menucliente');
    }

    public function reservarClient(){
        return view('reservarCliente');
    }

    public function saveReserv(Request $request){
      //  $reservar=Reservation::all();
      $datos=[
          'paciente'=>$request->paciente,
          'destino'=>$request->destino,
          'rango_edad'=>$request->rango_edad,
          'servicio'=>$request->servicio,
          'paquete'=>$request->paquete,
          'fecha_Reserva'=>Carbon::parse($request->fecha_Reserva),
      ];
      

      $reservar=Reservation::create($datos);
      return (redirect(route('catalogo')));
        
    }

    public function showReserv(){

        $datos=Reservation::all();
        
        return view('menuadmin',compact('datos'));
    }

    public function deletereserv($id){
        $deleteReserv= Reservation::find($id)->delete();

        return redirect(route('patientList'));
    }
}
