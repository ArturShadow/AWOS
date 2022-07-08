<?php
$location = "http://localhost/Laravel/AWOS/SOAP/insertusuarios.php?wsdl";

$request = "
<soapenv:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:reg=\"RegistrarUsuarios\">
<soapenv:Header/>
<soapenv:Body>
   <reg:response soapenv:encodingStyle=\"http://schemas.xmlsoap.org/soap/encoding/\">
      <insertusuarios xsi:type=\"reg:insertusuarios\">
         <!--You may enter the following 4 items in any order-->
         <nombre xsi:type=\"xsd:string\">Arturo</nombre>
         <apellidos xsi:type=\"xsd:string\">Loya</apellidos>
         <correo xsi:type=\"xsd:string\">luisarturo0809hotmail.com</correo>
         <estado xsi:type=\"xsd:integer\">1</estado>
      </insertusuarios>
   </reg:response>
</soapenv:Body>
</soapenv:Envelope>
";

print("Request: <br>");
print("<pre?".htmlentities($request)."</pre>");

$action = "insertUsuarioService";
$header = [
    'Method: POST',
    'Connection: Keep-Alive',
    'User-Agent: PHP-SOAP-CURL',
    'Content-Type: text/xml: charset=utf-8',
    'SOAPAction: "insertUsuarioService"'
];

$ch = curl_init($location);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_HEADER, $header);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $request);
curl_setopt($ch,CURLOPT_HTTP_VERSION, "CURLOPT_HTTP_VERSION_1_1");

$response = curl_exec($ch);
$err_status = curl_errno($ch);

print("Request: <br>");
print("<pre?".$response."</pre>");