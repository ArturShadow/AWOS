<?php
class Usuario extends Conectar{
    public function insert_usuario($nombre,$apellidos,
    $correo,$estado){
        $conectar = parent::conecxion();
        parent::set_name();

        $sql= "INSERT INTO usuario(nombre, apellidos, estado, correo) VALUES (?,?,?,?)";
        $stmt=$conectar->prepare($sql);
        $stmt->$conectar->prepare(1,$nombre);
        $stmt->$conectar->prepare(2,$apellidos);
        $stmt->$conectar->prepare(3,$estado);
        $stmt->$conectar->prepare(4,$correo);
        $stmt->execute();
    }
}