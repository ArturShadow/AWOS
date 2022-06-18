<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\articulos;

class articulosController extends Controller
{
    //
    public function getArticulos(){
        return response()->json(articulos::all(),200);
    }
}
