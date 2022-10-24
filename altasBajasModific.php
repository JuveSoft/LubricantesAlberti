<?php
// Base de datos

 require 'Include/config/database.php';
    $db=conectarDB();

    require 'Include/funciones.php';
incluirTemplates('header');




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Altas - Bajas - Modificaciones</h1>
<div class="">
    <a href="admin/propiedades/crear.php" class="AltBajMod altas">ALTAS</a>
    <a href="bajas.php" class="AltBajMod bajas">BAJAS</a>
    <a href="modificaciones" class="AltBajMod modificaciones">MODIFICACIONES</a>
</div>



<?php 

incluirTemplates('footer');

?>