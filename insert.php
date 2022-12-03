<?php
    require_once("vendor/autoload.php");    
    $cadena = "mongodb+srv://usermongo:CnpiwNN4EEveAm1F@cluster0.gsrhwbx.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente -> selectDataBase("Cluster0");
    
    $tablaColeccion = $conexion ->comentario;
    $resultado = $tablaColeccion->insertOne(["nombre"=>$_GET ["nombre"],"correo"=>$_GET["correo"],"comentario"=>$_GET["comen"]]);
    echo "to ta bien". $resultado->getInsertedId(); 

?>