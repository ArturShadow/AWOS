<?php
class Usuario extends Conectar{
    public function insert_usuario($nombre,$apellidos,
    $correo,$estado){
        $conectar = parent::conecxion();
        parent::set_name();

        $sql= "INSERT INTO usuario(nombre, apellidos, correo, estado) VALUES (?,?,?,?)";
        $stmt=$conectar->prepare($sql);
        $stmt->bindVaule(1,$nombre);
        $stmt->bindValue(2,$apellidos);
        $stmt->bindValue(3,$correo);
        $stmt->bindValue(4,$estado);
        $stmt->execute();
    }
}