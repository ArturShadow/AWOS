<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClienteController extends Controller
{
    public function getClientes(){
        return response()->json(Cliente::all(),200);
    }

    public function getClienteById($id){
        if(is_null(Cliente::find($id))){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        
        else{
            return response()->json(Cliente::find($id),200);
        }
    }

    public function addCliente(Request $request){
        $datos = Cliente::create($request->all());
        return response($datos,200);
    }

    public function updateCliente(Request $request, $id){
        if(is_null(Cliente::find($id))){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        else{
            Cliente::find($id)->update($request->all());

        }
    }
    public function deleteCliente(Request $request, $id){
        if(is_null(Cliente::find($id))){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        else{
            Cliente::find($id)->delete($request->all());
            return response()->json(['Mensaje'=>'Eliminación exitosa']);

        }
    }

    
}
