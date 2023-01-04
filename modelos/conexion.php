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
    static public function datosVentanaPrincipal($datoEspecifico){
        $connection = new mysqli('localhost', 'root', '', 'test');
        $queryVentanaPrincipal = ('SELECT TOP 1 * FROM datos_principal ORDER BY Id DESC;');
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