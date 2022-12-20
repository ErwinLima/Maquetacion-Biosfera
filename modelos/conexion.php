<?php

class Conexion{
    private $connection;

    public function __construct(){
        $this->connection= new mysqli('localhost', 'root', '', 'test');
    }

    public function insertInformation($nombre, $apellido, $correo, $clave, $ciudad){
        $queryInsertion=$this->connection->query('INSERT INTO usuarios (nombre, apellido, correo, clave, ciudad) VALUES ('.$nombre.','.$apellido.','.$correo.','.$clave.','.$ciudad.');');
        if($queryInsertion){
            echo "Si se pudo";
        }
        else{
            echo "No se pudo";
        }
    }
}