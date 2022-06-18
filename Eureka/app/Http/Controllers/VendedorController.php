<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{
    public function getVendedores(){ //Se treae la lista de todos los venderosres de la BD
        return response()->json(Vendedor::all(),200);
    }

    public function getVendedorById($id){ //Se trae la informacion de un solo vendedor
        if(is_null(Vendedor::find($id))){ //Sino encuentra el registro con el id recibido muestra un mensaje y manda un status 404
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        
        else{ //Si encuentra retorna la informacion
            return response()->json(Vendedor::find($id),200);
        }
    }

    public function addVendedor(Request $request){ //Añade un nuevo registro
        $datos = Vendedor::create($request->all()); //Recibe los datos de la request y los guarda en la base datos
        return response($datos,200);
    }

    public function updateVendedor(Request $request, $id){ //Atualiza los datos de un empleado en especifico
        if(is_null(Vendedor::find($id))){ //Si no encuentra el vendedor retorma un mensaje 
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        else{//Si lo encuentra acrualiza los datos
            Vendedor::find($id)->update($request->all()); 

        }
    }
    public function deleteVendedor(Request $request, $id){ //borra un vendedor en especifico
        if(is_null(Vendedor::find($id))){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        else{
            Vendedor::find($id)->delete($request->all());
            return response()->json(['Mensaje'=>'Eliminación exitosa']);

        }
    }
}
