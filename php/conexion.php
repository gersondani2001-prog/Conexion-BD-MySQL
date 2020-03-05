<?php


    // variables necesarias servidor, usuario, contraseña y base de datos
    $serverName="localhost";
    $usuario="root";
    $contrasena="";
    $db="datos";

    // funcion conectar
    $con = mysqli_connect($serverName, $usuario, $contrasena, $db) or die('Error en la conexion en el servidor');

    // sentencia si no conecta 
    if($con->connect_errno){
        echo "No conectado";
    }
    // si conecta
    else{
        echo "Conectado";
    }

    

?>