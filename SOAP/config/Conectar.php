<?php
    class Conectar{
        protected $BD;//Variable para la base de datos
        protected function conexion(){
            try {
                $conectar=$this->BD=new PDO("mysql:host=localhost;dbname=soapapi2","root",""); //establecemos la conexxion
                return $conectar;
            } catch (Exception $e) {
                print   "Error!! ".$e->getMessage()." <br>";
                die();//muestramos el error 
            }
        }

        public function set_name(){
            return $this->BD->query("SET NAMES 'utf8'");
        }
    }
?>