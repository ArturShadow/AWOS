<?php
    class Conectar{
        protected $BaseDatos;
        protected function conexion(){
            try {
                $conectar=$this->$BaseDatos = new PDO('mysql:host=localhost;dbnname=soapApi','root','');
                return $conectar;
            } catch (Exception $e) {
                print"Error|| ".$e->  getMessage()." <br>";
                die();
            }
        }

        public function set_name(){
            return $this->BaseDatos->query("SET NAMES 'utf8'");
        }
    }
