<?php

class Conexion{
    //variable para almacenar la conexion
    private $connection;
    //constructor para probar la conexion
    public function __construct(){
        $connection= new mysqli('localhost', 'root', '', 'test');
    }
    //esta funcion recibe los parametros del formulario de registro y los mete a la bd.
    public function insertInformation($nombre, $apellido, $correo, $clave, $ciudad){
        $connection= new mysqli('localhost', 'root', '', 'test');
        $queryInsertion=('INSERT INTO usuarios (nombre, apellido, correo, clave, ciudad) VALUES (\''.$nombre.'\',\''.$apellido.'\',\''.$correo.'\',\''.$clave.'\',\''.$ciudad.'\');');
        $result=mysqli_query($connection,$queryInsertion);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

}