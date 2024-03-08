<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PrimoController extends Controller
{
    public function formularioTaller($numero)
    {

        if ($numero <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
        }

    }
    return true;
}

public function verificarPrimo(Request $request)
{

    $numero = $request->input('numero');

    if ($this->esPrimo($numero)) {
        return response()->json(['mensaje'=> "$numero es un número primo"]);
    } else {
        return response()->json(['mensaje' =>"$numero no es un número primo"]);
}

}
}

