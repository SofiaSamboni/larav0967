<?php

namespace App\Http\Controllers;

use App\Models\Gato;
use Illuminate\Http\Request;

class GatoController extends Controller
{
    public function formularioGato(){
        return view('formularioGato');
    }

    public function productoStore(Request $request){

        $producto = new Gato();
        $producto->name=$request->name;
        $producto->raza=$request->raza;
        $producto->save();
        return $producto;
     }
}
