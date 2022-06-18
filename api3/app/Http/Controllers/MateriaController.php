<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Materia;

class MateriaController extends Controller
{
    public function getMaterias(){
        return response()->json(Materia::all(),200);
    }
}
