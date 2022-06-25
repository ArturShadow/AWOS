<?php

require_once"./vendor/econea/nusoap/src/nusoap.php";

$nameSpace="RegistrarUsuarios";
$server= new soap_server();
$server->configureWSDL("SoapService",$nameSpace);
$server->wsdl->SchemaTargetNamespace = $nameSpace;

$server->wsdl->addComplexType(
    'insertcategorias',
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
$server->wsdl->addComplexType(
    'insertcategorias',
    'complexType',
    'struct',
    'all',
    '',
    array(
        'Resultado'=>array('name'=>'Resultado','type'=>'xsd:boolean')
    )
);

$server->register(
    "response",
    array('insertcategorias'=>'tns:insertcategorias'),
    array('insertcategorias'=>'tns:response'),
    $nameSpace,
    false,
    'rpc',
    'encoded',
    'inserta una categoria'
);

function InsertCategoriaService()
{
    return array(
        'Resultado'=> true
    );
}

$POST_DATA= file_get_contents('php://input');
$server->service($POST_DATA);
exit();