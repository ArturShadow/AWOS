<?php
/**
 * Variable para guardar la direcion del servicio
 */
$location = "http://localhost/Laravel/AWOS/SOAP/insertusuarios.php?wsdl";

// Variable para almacenar el cuerpo de la peticion
$request = "
<soapenv:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:reg=\"RegistrarUsuarios\">
   <soapenv:Header/>
   <soapenv:Body>
      <reg:insertUsuarioService soapenv:encodingStyle=\"http://schemas.xmlsoap.org/soap/encoding/\">
         <insertusuarios xsi:type=\"reg:insertusuarios\">
            <!--You may enter the following 4 items in any order-->
            <nombre xsi:type=\"xsd:string\">Mariana</nombre>
            <apellidos xsi:type=\"xsd:string\">Loya Baca</apellidos>
            <correo xsi:type=\"xsd:string\">mariale98@hotmal.com</correo>
            <estado xsi:type=\"xsd:string\">1</estado>
         </insertusuarios>
      </reg:insertUsuarioService>
   </soapenv:Body>
</soapenv:Envelope>
";

print("Request: <br>");
/**
 * Formateamos el codigo xml
 */
print("<pre>".htmlentities($request)."</pre>");
//guardamos el action
$action = "insertUsuarioService";
// guardamos lo que vamos a enviar en el header
$header = [
    'Method: POST',
    'Connection: Keep-Alive',
    'User-Agent: PHP-SOAP-CURL',
    'Content-Type: text/xml: charset=utf-8',
    'SOAPAction: "insertUsuarioService"'
];
//iniciar la conexion con la api
$ch = curl_init($location);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
//pasamps el header al protocolo
curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
// pasamos los datos
curl_setopt($ch,CURLOPT_POST, true);
//pasamos la respuesta
curl_setopt($ch,CURLOPT_POSTFIELDS, $request);
 //pasamos la version del protocolo
curl_setopt($ch,CURLOPT_HTTP_VERSION, "CURLOPT_HTTP_VERSION_1_1");
//ejecutamos todo lo anterior
$response = curl_exec($ch);
//guardamos el error que nos arroje
$err_status = curl_errno($ch);

print("Request: <br>");
// mostramos la respuesta del servidor
print("<pre>".$response."</pre>");