<?php

//conexión base de datos
require 'Include/config/database.php';
$db=conectarDB();

// Arreglo para mensaje de errores

$erroresVehiculos=[];

$patente="";
$marca="";
$modelo="";
$combustible="";
$cc="";
$anio="";
$otros="";
$nombre="";
$apellido="";
$telefono="";
$email="";

// Ejecuta el código despues que se envia el formulario

if($_SERVER["REQUEST_METHOD"]=== 'POST'){
    echo "se conectó";
    
    // Filtros de saneamiento
    // funcion filter_var(variable que queremos filtrar, tipo de filtro)
    //$num1="1holas1";
    //$num2="123";
    //$correo="correo@corReo.COM.AR/";
    //$sanitizando=filter_var($num1,FILTER_SANITIZE_NUMBER_INT); // Este va a dar como resultado: 11 
    //$sanitizando2=filter_var($num1,FILTER_SANITIZE_STRING); // Este va a dar como resultado: 1hola1
    //$sanitizando3=filter_var($num1,FILTER_SANITIZE_EMAIL);
    //echo " Sanitizando " . $sanitizando;
    //echo " Sanitizando 2 " . $sanitizando2;
    //echo " Sanitizando 3 " . $sanitizando3;

    // Filtros de validación
    // Nos marca un flase don de se pone un caracter que no corresponda
    //$resultado4=filter_var($num1,FILTER_VALIDATE_INT); // Acá no va a mostrar nada
    //$resultado5=filter_var($num2,FILTER_VALIDATE_INT);
    //echo " - validando 4 " . $resultado4;
    //var_dump($resultado4);
    //echo " - Validando 5 " . $resultado5;
//
    //$resultado6=filter_var($num1,FILTER_VALIDATE_EMAIL);
    //echo " - Validando email " . $num1; // Acá no sale nada
    //var_dump(" - Validando email con var_dump " . $resultado6);
    //
    //$resultado7=filter_var($correo,FILTER_SANITIZE_EMAIL);
    //var_dump("El resultado del correo es: " . $resultado7);
    //$resultado7=filter_var($correo,FILTER_VALIDATE_EMAIL);
    //
    //if($resultado7===""){
    //    var_dump("No es un mail valido");
    //}
    //exit;

    $patente=mysqli_real_scape_string($db, $_POST['patente']);
    $marca=mysqli_real_scape_string($db, $_POST['marca']);
    $modelo=mysqli_real_scape_string($db, $_POST['modelo']);
    $combustible=mysqli_real_scape_string($db, $_POST['combustible']);
    $cc=mysqli_real_scape_string($db, $_POST['cc']);
    $anio=mysqli_real_scape_string($db, $_POST['Año']);
    $otros=mysqli_real_scape_string($db, $_POST['otros']);
    $nombre=mysqli_real_scape_string($db, $_POST['nombre']);
    $apellido=mysqli_real_scape_string($db, $_POST['apellido']);
    $telefono=mysqli_real_scape_string($db, $_POST['telefono']);
    $email=mysqli_real_scape_string($db, $_POST['email']);

    if(!$patente){
        $erroresVehiculos[]="Debes poner la patente";
    }
    if(!$marca){
        $erroresVehiculos[]="Que marca es?";
    }
    if(!$modelo){
        $erroresVehiculos[]="Que modelo es?";
    }
    if(!$combustible){
        $erroresVehiculos[]="Tienes que poner el combustible";
    }
    if(!$cc){
        $erroresVehiculos[]="Tienes que poner la cilindrada";
    }
    if(!$anio){
        $erroresVehiculos[]="De que año es el auto?";
    }
    if(!$otros){
        $erroresVehiculos[]="Ninguna observación?";
    }
    if(!$nombre){
        $erroresVehiculos[]="Nombre del contacto";
    }
    if(!$apellido){
        $erroresVehiculos[]="Apellido?";
    }
    if(!$telefono){
        $erroresVehiculos[]="Falta el teléfono";
    }
    if(!$email){
        $erroresVehiculos[]="Falta el email";
    }


        // Ahora tenemos que reviasar que el arreglo de errores esté vacio

        if(empty ($erroresVehiculos)){
            // Si el arreglo está vacio insertamos en la base de datos

            $sql="INSERT INTO autos (patente,marca,modelo,combustible,cc,año,otros,nombre,apellido,telefono,email)VALUES('$patente','$marca','$modelo','$combustible','$cc','$anio','$otros','$nombre','$apellido','$telefono','$email')";

                //echo $sql;

            $resultado=mysqli_query($db,$sql);

            if($resultado){
                echo " El " . $marca . " " . $modelo . " fue ingresado";
                //alert("El vehiculo fue ingresado con exito");
            }            
        }
    }
    require "Include/funciones.php";
    incluirTemplates('header');

?>

<main class="contenedor seccion">
    <h1>Alta de Vehículo</h1>

    <a href="admin/index.php">Regresar</a>

    <?php foreach($erroresVehiculos as $error) : ?>

    <div class="alert error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form action="/LUBRIALBERTI_CONPHP/altaVehiculo.php" method="POST" class="formulario">

        <fieldset>
            <legend>Datos del Auto / Camioneta</legend>
            <label for="patente">Patente</label>
            <input type="text" name="patente" id="patente" placeholder="AA000AA" value="<?php echo $patente;?>">

            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" placeholder="fiat - GM - etc" value="<?php echo $marca; ?>">

            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" placeholder="Nombre del modelo" value="<?php echo $modelo;?>">

            <label for="combustible">Combustible</label>
            <select name="combustible" id="combustible">
                <option value="combustible" selected> -- Seleccione -- </option>
                <option value="nafta">Nafta</option>
                <option value="gas">Nafta / Gas</option>
                <option value="diesel">Diesel</option>
            </select>

            <label for="cc">Cilindrada</label>
            <input type="number" name="cc" id="cc" placeholder="2300 o 2.3" value="<?php echo $cc; ?>">

            <label for="anio">Año</label>
            <input type="number" name="anio" placeholder="Por ej: 2020" value="<?php echo $anio; ?>">

            <label for="otros">Observaciones</label>
            <textarea name="otros" id="otros" cols="10" rows="10"
                placeholder="Observaciones"><?php $otros; ?></textarea>

        </fieldset>

        <fieldset>
            <legend>Datos del contacto</legend>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Introduce su nombre"
                value="<?php echo $nombre; ?>">

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" placeholder="Introduce el apellido"
                value="<?php echo $apellido;?>">

            <label for="telefono">Teléfono</label>
            <input type="number" name="telefono" id="telefono" placeholder="2235654654"
                value="<?php echo $telefono; ?>">

            <label for="email">e-mail</label>
            <input type="e-mail" name="email" id="email" placeholder="fulano@correo.com" value="<?php echo $email; ?>">

        </fieldset>

        <input type="submit" name="ingreso_auto" id="ingreso_auto" value="Alta vehiculo" class="boton boton-verde">
        <input type="submit" name="nuevo_contacto" id="nuevo_contacto" value="Nuevo contacto"
            class="boton boton-verde">

    </form>

</main>

<?php
incluirTemplates('footer');
?>