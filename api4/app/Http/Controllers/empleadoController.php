<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\empleados;


class empleadoController extends Controller
{
    public function getEmpleados(){
        return response()->json(empleados::all(),200);
    }

    public function getEmpleadoById($id){
        
        $dato = empleados::find($id);
        if(is_null($dato)){
            return response()->json(['Mensaje'=> 'Registro no encontrado'],404);
        }
        else{
            return response()->json(empleados::find($id),200);
        }
    }

    public function addEmpleado(Request $request){
        $datos = empleados::create($request->all());
        return response($datos,200);
    }

    public function updateEmpleado(Request $request, $id){
        $dato = empleados::find($id);
        if(is_null($dato)){
            return response()->json(['Mensaje'=>'No encontrado'],200);
        }
        else{
            $dato->update($request->all());
            return response($dato,200);
        }
    }
    public function deleteteEmpleado(Request $request, $id){
        $dato = empleados::find($id);
        if(is_null($dato)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        else{
            $dato->delete($request->all());
            return response(['Mensaje'=>'Borrado correctamente'],200);
        }
    }
}
