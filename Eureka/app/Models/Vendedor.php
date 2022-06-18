<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    public $timestamp = false; // Es para que no mueste la fechas de creacion y actualizacion
    protected $fillable = ['nombre', 'apellidoPaterno', 'apellidoMaterno', 'numeroEmpleado'];
    //Es para rellenar los campos para un nuevo registro
}








    