<?php
//Requeririimos el archivo de la libreria
require_once "./vendor/econea/nusoap/src/nusoap.php"; 
//Establecemos  el nombre del servicio
$nameSpace="RegistrarUsuarios";
//Cramos una instancia del servidor
$server= new soap_server(); 
//Configuramos el wsdl
$server->configureWSDL("SoapService",$nameSpace); 
 // Establecemos el namespace
$server->wsdl->SchemaTargetNamespace = $nameSpace;

// Establecemos los campos de la base de datos
$server->wsdl->addComplexType( 
    'insertusuarios',
    'complexType',
    'struct',
    'all',
    '',
    array(
        'nombre'=>array('name'=>'nombre','type'=>'xsd:string'),
        'apellidos'=>array('name'=>'apellidos','type'=>'xsd:string'),
        'correo'=>array('name'=>'correo','type'=>'xsd:string'),
        'estado'=>array('name'=>'estado','type'=>'xsd:integer'),
    )
);
 //Establecemos la respuesta cuando la api sea consumida
$server->wsdl->addComplexType(
    'response',
    'complexType',
    'struct',
    'all',
    '',
    array(
        'Resultado'=>array('name'=>'Resultado','type'=>'xsd:boolean')
    )
);
// registramos la funcion
$server->register( 
    "response",
    array('insertusuarios'=>'tns:insertusuarios'),
    array('insertusuarios'=>'tns:response'),
    $nameSpace,
    false,
    'rpc',
    'encoded',
    'inserta un usuario'
);
//Funcion que regresa true si 
function InsertUsuarioService($request)  
{
    // requirimos los archivos de conexion y usuario
    require_once "./config/conexion.php";
    require_once "./Models/Usuario.php";

    //Creamos una instancia de usuario
    $usuario = new Usuario();
    // Le pasamos los datos recibidos por rquest
    $usuario->Insert_usuario($request["nombre"],$request["apellidos"],$request["correo"],$request["estado"]);

    return array(
        'Resultado'=> true
    );
}

// pasar nuestros datos al servicio
$POST_DATA= file_get_contents('php://input');
$server->service($POST_DATA);
exit();