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


    public function getDatos($opt){
        $connection= new mysqli('localhost', 'root', '', 'weatherstation');        
        $querySelection = "";
        if($opt === 1){
            $querySelection = ('SELECT times, pressure FROM measures01');
        }else if($opt === 2){
            $querySelection = ('SELECT times, temperature FROM measures01');
        }else if($opt === 3){
            $querySelection = ('SELECT times, humidity FROM measures01');
        }else if($opt === 4){
            $querySelection = ('SELECT times, windspeed FROM measures01');
        }else if($opt === 5){
            $querySelection = ('SELECT times, winddirection FROM measures01');
        }else if($opt === 6){
            $querySelection = ('SELECT times, rain FROM measures01');
        }    
        
        $resultQuery = mysqli_query($connection, $querySelection);
        
        if ($resultQuery) {            
            $lista = [];
            $cantidad = mysqli_num_rows($resultQuery);
            while($cantidad > 0){
                $row = mysqli_fetch_row($resultQuery);
                array_push($lista, $row);
                var_dump($row);
                echo '<br><br>';
                $cantidad--;
            }
            
        }else{
            $error = "No se pudo retornar nada";
            return $error;
        }        
    }
}