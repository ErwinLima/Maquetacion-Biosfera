<?php

class Conexion1{
    //variable para almacenar la conexion
    private $connection;
    //constructor para probar la conexion
    public function __construct(){
        $this->connection= new mysqli('localhost', 'root', '', 'test');
    }
    //esta funcion recibe los parametros del formulario de registro y los mete a la bd.
    public function insertInformation($nombre, $apellido, $correo, $clave, $ciudad){
        $connection2= new mysqli('localhost', 'root', '', 'test');
        $queryInsertion=('INSERT INTO usuarios2 (nombre, apellido, correo, clave, ciudad) VALUES (\''.$nombre.'\',\''.$apellido.'\',\''.$correo.'\',aes_encrypt(\''.$clave.'\', \'prueba\'),\''.$ciudad.'\');');
        $result=mysqli_query($connection2,$queryInsertion);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
     public function datosVentanaPrincipal($datoEspecifico){
        $connection = new mysqli('localhost', 'root', '', 'test');
        $queryVentanaPrincipal = ('SELECT * FROM datos_principal ORDER by Id DESC LIMIT 1;');
        $result=mysqli_query($connection,$queryVentanaPrincipal);
        if($result){
            $row = mysqli_fetch_array($result);
            if($row[$datoEspecifico] != NULL){
                $devolucion = $row[$datoEspecifico];
                return $devolucion;
            }
            else{
                $devolucion = "No se pudo";
                return $devolucion;
            }
        }
        else{
            $no="No se pudo concretar la operacion";
            return $no;
        }
    }
}