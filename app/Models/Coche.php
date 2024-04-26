<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    public function empleado(){
        return $this->hasOne('App\Models\Empleados');
    }
}