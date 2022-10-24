<?php 
// Conexión base de datos
require 'Include/config/database.php';
$db=conectarDB();

    // Arreglos para mensajes de errores
    $erroresPreveedores=[];

    $marca="";
    $empresa="";
    $telefono="";
    $email="";
    $calle="";
    $numero="";
    $ciudad="";
    $provincia="";
    $contacto="";
    $tel_contacto="";

    // Ejecuta el código después que el usuario envía el formulario

    if($_SERVER["REQUEST_METHOD"]=== 'POST'){
           echo "Se conecto ";

        $marca=$_POST['marca'];
        $empresa=$_POST['empresa'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $calle=$_POST['calle'];
        $numero=$_POST['numero'];
        $ciudad=$_POST['ciudad'];
        $provincia=$_POST['provincia'];
        $contacto=$_POST['contacto'];
        $tel_contacto=$_POST['tel_contacto'];

        if(!$marca){
            $erroresPreveedores[]="Debes agregar una linea de bandera";
        }
        if(!$empresa){
            $erroresPreveedores[]= "Debes añadir el nombre de una empresa";
        }
        if(!$telefono){
            $erroresPreveedores[]='Te faltó el telefono';
        }
        if(!$email){
            $erroresPreveedores[]="Debes poner el email";
        }
        if(!$calle){
            $erroresPreveedores[]='Te faltó la calle';
        }
        if(!$numero){
            $erroresPreveedores[]="Te faltó el número de teléfono";
        }
        if(!$ciudad){
            $erroresPreveedores[]='Te faltó la ciudad';
        }
        if(!$provincia){
            $erroresPreveedores[]='Te faltó la provincia';
        }
        if(!$contacto){
            $erroresPreveedores[]='Te faltó el contacto';
        }
        if(!$tel_contacto){
            $erroresPreveedores[]='Te faltó el teléfono del contacto';
        }

        //Ahora tenemos que revisar que el arreglo de errores está vacío

        if(empty($erroresPreveedores)){
            // Insertamos la base de datos.

            $query="INSERT INTO proveedores (marca,empresa,telefono,email,calle,numero,ciudad,provincia,contacto,tel_contacto) VALUES ('$marca','$empresa','$telefono','$email','$calle','$numero','$ciudad','$provincia','$contacto','$tel_contacto')";

           // echo $query;

            $resultado=mysqli_query($db,$query);

            if($resultado){

                echo "El resultado fue insertado con exito";
            }
        }
    }

require 'Include/funciones.php';
incluirTemplates('header');

?>

<main class="contenedor seccion">
<h1>Alta de proveedor</h1>

<a href="admin/index.php" class="boton boton-verde">Volver</a>

<?php foreach($erroresPreveedores as $error) : ?>
<div class="alerta error">
    <?php echo $error; ?>
</div>
<?php endforeach; ?>

<form action="/LUBRIALBERTI_CONPHP/altaProveedor.php" method="POST" class="formulario">
    <fieldset>
        <legend>Datod empressa</legend>

        <!-- <label for="marca">Marca</label> -->
        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca" placeholder="Por ej. YPF / SHELL / ELF ..." value="<?php echo $marca; ?>" > 

        <label for="empresa">Nombre empresa</label>
        <input type="text" id="empresa" name="empresa" placeholder="Nombre de la empresa"
            value="<?php echo $empresa; ?>">

        <label for="telefono">Teléfono</label>
        <input type="number" id="telefono" name="telefono" placeholder="Por ej. 2235761122"
            value="<?php echo $telefono; ?>">

        <label for="email">E-mail</label>
        <input type="e-mail" name="email" id="email" placeholder="correo@correo.com" value="<?php echo $email; ?>">

        <label for="calle">Calle</label>
        <input type="text" id="calle" name="calle" placeholder="Calle" value="<?php echo $calle; ?>">

        <label for="numero">Número</label>
        <input type="number" id="numero" name="numero" placeholder="Número" value="<?php echo $numero; ?>">

        <label for="ciudad"> Ciudad</label>
        <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" value="<?php echo $ciudad; ?>">

        <label for="provincia">Provincia</label>
        <input type="text" id="provincia" name="provincia" placeholder="Provincia" value="<?php echo $provincia; ?>">

        <label for="contacto">Nombre de contacto</label>
        <input type="text" id="contacto" name="contacto" placeholder="Nombre del contacto"
            value="<?php echo $contacto; ?>">

        <label for="tel_contacto">Teléfono contacto</label>
        <input type="number" id="tel_contacto" name="tel_contacto" placeholder="Teléfono del contacto"
            value="<?php $tel_contacto; ?>">

    </fieldset>

    <input type="submit" id="ingreso_empresa" value="Ingreso Empresa"
        class="boton boton-verde">

</form>

</main>

<?php
incluirTemplates('footer');
?>


