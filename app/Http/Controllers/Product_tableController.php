<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;

class Product_tableController extends Controller
{
    public function saveinsumo(){
        return view('insumos');
    }

    public function saveproduct(Request $request){
        //  $reservar=Reservation::all();
        $medicina=[
            'nombre'=>$request->nombre,
            'categoria'=>$request->categoria,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            
        ];
        
  
        $reservar=Product::create($medicina);
        return (redirect(route('menu'))); //nombre de la ruta get
          
      }

      public function seeproduct(){
        $datos=Product::all();
        return view('listproduct',compact('datos'));
    }
}
