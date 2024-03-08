<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function formularioTaller(){
        return view('Taller');
    }
}
