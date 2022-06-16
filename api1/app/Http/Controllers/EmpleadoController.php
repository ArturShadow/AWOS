<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function getEmpleados(){
        return response()->json(Empleado::all(),200);
    }

    public function getEmpleadoById($id){
        $dato = Empleado::find($id);
        if(is_null($dato)){
            return response()->json(['Mensaje'=>'No existe'],404);
        }
        else{
            return response()->json(Empleados::find($id));
        }
    }

    public function addEmpleado(Request $resquest){
        $datos = $resquest;
        return response(Empleado::create($datos), 200);
    }

    public function updateEmpleado(Request $resquest, $id){
        $dato = Empleados::find($id);
        if(is_null($dato)){
            return response()->json(['Mensaje'=>'No encontrado'], 404);
        } 
        else{
            $dato->update($resquest->all());
            return response($dato,200);
        }
    }
}
