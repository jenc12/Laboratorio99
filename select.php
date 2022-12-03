<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://usermongo:CnpiwNN4EEveAm1F@cluster0.gsrhwbx.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente -> selectDataBase("Cluster0");
    
    $tablaColeccion = $conexion ->comentario;
    $resultado = $tablaColeccion->find();

    foreach($resultado as $r){
        echo $r->_id."<br>";
        echo $r->correo."<br>";
        echo $r->nombre."<br>";
        echo $r->comentario."<br>";
    }
?>