<?php 
//baseDatosLubricantes_Proveedores
function conectarDB() : mysqli{
    $db=mysqli_connect('localhost', 'root', '', 'productos');

    if(!$db){
        echo 'No se conecto';
        exit;
    }
    return $db;
}

