<?php
include 'modelos/conexion.php';
$conexion = new Conexion;
$conexion->insertInformation("Maria","Rodas","mariaalgo.com","maria1234","Guatemala");//nombre, apellido, correo, clave, ciudad
