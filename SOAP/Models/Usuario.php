<?php
class Usuario extends Conectar {
    // funcion para ingresar un usuario en la base de datos
    public function insert_usuario($nombre, $apellidos, $correo, $estado){
        $conectar = parent::conexion(); //variable para la conexion
        parent::set_name();

        $sql= "INSERT INTO usuario(nombre, apellidos, correo, estado) VALUES (?,?,?,?);"; //guardamos ek query de insertar un usuario
        $stmt=$conectar->prepare($sql); //preparamos el query y enviamos los datos
        $stmt->bindValue(1,$nombre);
        $stmt->bindValue(2,$apellidos);
        $stmt->bindValue(3,$correo);
        $stmt->bindValue(4,$estado);
        $stmt->execute();//ejecvcutamos el query
    }
}