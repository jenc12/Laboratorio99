<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://usermongo:CnpiwNN4EEveAm1F@cluster0.gsrhwbx.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente -> selectDataBase("Cluster0");

    $tablaColeccion = $conexion ->comentario;

    $resultado = $tablaColeccion->updateOne(["_id"=>new MongoDB\BSON\ObjectId($_GET["id"])],
    [ '$set'=>[
        "nombre" =>("Pedro Miguel"),
        "comentario"=>("este es el comentario nuevo"),
        "correo"=>("jmiguel@mail.com")
        ]
    ]);

    echo "Comentarios nuevos".$resultado->getModifiedCount();
?>