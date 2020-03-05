<?php

    // Vinculacion
    include "conexion.php";

    // Variables nombre, email y contrasena con metodo post
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // registro insertar en la base de datos
    $sql = "INSERT INTO datosusuario VALUES(null, '$nombre', '$email', '$contrasena')";

    // consulata
    $resultado = mysqli_query($con, $sql) or die('Error en el query database');

    // sentencia si envia emprime
    if($resultado){
        echo ' <br/> Datos enviados';
    }
    // si no envia
    else{
        echo 'Datos no enviados';
    }

    // Cierro conexion a la base de datos
    mysqli_close($con);



?>