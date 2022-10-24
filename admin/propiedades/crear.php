<?php 
// base de Datos
    require '../../Include/config/database.php';
    $db=conectarDB();

    //  Consulta para obtener las opciones
    
    $consulta= "SELECT * FROM lubricantes";
    $resultado=mysqli_query($db,$consulta) or die("database error:". mysqli_error($conn));;

    //Arreglo con mensajes de errores
    $errores=[];

        $marca="";
        $familia="";
        $nombre="";
        $tipo="";
        $normas="";
        $origen="";
        //$carpetaImagenes="";
        $envase="";
        $combustible="";
        $precio="";        
        $creado="";
        $vence="";
        $cantidad="";
        $comentario="";
        $empresaId="";
      
    // Ejecutar el código después de que el usuario envía el formulario
    
   if($_SERVER["REQUEST_METHOD"]=== 'POST'){

 // exit;

     //echo "se conectó ";
     //echo "<pre>";
     //var_dump($_POST);
     //echo "</pre>";
      
         echo "<pre>";
         var_dump($_FILES); // FILES es una superglobal, es para que pueda leer las imagenes y tenemos que agregar al formulario -enctype="multipart/form-data"> esto es necesario en cualquier tecnología
         echo "</pre>";
   
        $marca=mysqli_real_escape_string($db, $_POST['marca']);
        $familia=mysqli_real_escape_string($db,$_POST['familia']);
        $nombre=mysqli_real_escape_string($db, $_POST['nombre']);
        $tipo=mysqli_real_escape_string($db, $_POST['tipo']);
        $normas=mysqli_real_escape_string($db, $_POST['normas']);
        $origen=mysqli_real_escape_string($db, $_POST['origen']);        
        $envase=mysqli_real_escape_string($db, $_POST['envase']);
        $combustible=mysqli_real_escape_string($db, $_POST['combustible']);
        $precio=mysqli_real_escape_string($db, $_POST['precio']);
        $creado=date('Y/m/d');
        $vence=date('Y/m/d');
        $cantidad=mysqli_real_escape_string($db, $_POST['cantidad']);
        $comentario=mysqli_real_escape_string($db, $_POST['comentario']);
        $empresaId=mysqli_real_escape_string($db, $_POST['empresaId']);

        // Vamos a asignar _FILES hacia una variable
        $imagen=$_FILES['imagen']; // le ponemos el nombre que usamos en la imagen, acá guardamos toda la información de esa variable
        //echo "<pre>";
        //    var_dump($imagen['name']);
        //echo "</pre>";
      //exit;

        if(!$marca){
            $errores[]="Debes añadir una marca";
        }
        if(!$familia){
            $errores[]="Debe tener familia";
        }
        if(!$nombre){
            $errores[]="Como se lama lo que estás ingresando";
        }
        if(!$tipo){
            $errores[]="Que tipo de producto es";
        }
        if(!$normas){
            $errores[]="Debes añadir las normas";
        }
        if(!$origen){
            $errores[]="Debes añadir las origen";
        }
        if("$envase"){
            $erroes[]="Debes poner el envase";
        }
        if(!$combustible){
            $errores[]="Debes poner para que combustible es";
        }
        if(!$precio){
            $errores[]="Falta el precio";
        }
        if(!$creado){
            $errores[]="Tienes que poner la fecha de creación";
        }
        if(!$vence){
            $errores[]="Tienes que poner cuando vence";
        }
        if(!$cantidad){
        $errores[]="Debes ingresar una cantidad de 1 a 20";
        }
        if(!$comentario){
            $errores[]="Tienes que poner algo";
        }
        if(!$empresaId){
            $errores[]="No sabemos a quien se lo compras";
        }
        if(!$imagen['name']){
            $errores[]="La imagen es obligatoria";
        }
        // Validar por tamaño (1 mb máximo)
        $medida=1000*1000;
        if($imagen['size']>$medida){
        $errores[]="La imagen es muy grande";
        }
        
        // Revisar que el arreglo de errores esté vacio
            if(empty($errores)){

                //  * Subida de archivos */
                // Crear carpeta
               $carpetaImagenes='../../imagenes/';

               if(!is_dir($carpetaImagenes)){
                    mkdir("$carpetaImagenes");
               }
            //generar un nombre único
            $nombreImagen=md5(uniqid(rand(),true)) . ".jpg";
               
               //  Subir la imagen
               move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
               
               var_dump($nombreImagen);
              // exit;

                //Insertamos en la base de datos
                $query="INSERT INTO lubricantes (marca,familia,nombre,tipo,normas,origen,imagen,envase,combustible,precio,creado,vence,cantidad,comentario,empresaId) VALUES ('$marca',
                '$familia','$nombre','$tipo','$normas','$origen','$nombreImagen','$envase','combustible','$precio','$creado','$vence','$cantidad','$comentario','$empresaId')";
                
                //echo $query;
                
                $resultado=mysqli_query($db,$query);
                
                if($resultado){
                // echo "El resultado fue insertado con exito";
                // Redireccionamos al usuario

                header('Location:../index.php?resultado=1');
              }
            }
    }
    
require '../../Include/funciones.php';
incluirTemplates('header');
?>

<main class="contenedor seccion">
    <h1>Altas Lubricantes</h1>

    <a href="../index.php" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error):?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>

    <?php endforeach; ?>

    <form action="/LUBRIALBERTI_CONPHP/admin/propiedades/crear.php" class="formulario" method="POST"
        enctype="multipart/form-data">

        <fieldset>
            <legend>Informacion General</legend>

            <label for="marca">Marca</label>
            <select name="marca" id="marca">
                <option value=""> -- seleccione -- </option>
                <option value="ypf">YPF</option>
                <option value="shell">SHELL</option>
                <option value="elf">ELF</option>
                <option value="total">TOTAL</option>
                <option value="valvoline">VALVOLINE</option>
                <option value="castrol">CASTROL</option>

                <!-- <?php while($marca=mysqli_fetch_assoc($resultado)) : ?>
                <option <?php echo $marca===$marca['id'] ? : '' ; ?> value="
                    <?php echo $marca['id']; ?>">
                    <?php echo $marca['marca']; ?>
                </option>
                <?php endwhile ?> -->
            </select>

            <label for="familia">Familia</label>
            <select name="familia" id="familia">
                <option value="helix">Helix</option>
                <option value="rimula">Rimula</option>
                <option value="spirax">Spirax</option>
                <option value="gadus">Gadus</option>
            </select>

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre producto" value="<?php echo $nombre;?>">

            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo" value="<?php echo $tipo; ?>">
                <option value="seleccion" selected> .:. Seleccione .:. </option>
                <option value="monogrado">Monogrado</option>
                <option value="multigrado">Multigrado</option>
                <option value="grasa">Grasas</option>
            </select>

            <label for="origen">Origen</label>
            <select name="origen" id="origen" value="<?php echo $origen; ?>">
                <option value="seleccion" selected> .:. Seleccione .:. </option>
                <option value="mineral">Mineral</option>
                <option value="semisintetico">Semisintético</option>
                <option value="sintetico">Sintético</option>
            </select>

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" accept="image/jpeg,image/png" name="imagen" value="<?php echo $imagen;?>">

            <label for="envase">Envase</label>
            <select name="envase" id="envase">
                <option value=""> -- seleccione -- </option>
                | <option value="1">1</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="20">20</option>
                <option value="200">200</option>
                <option value="1000">1000</option>


            </select>

            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" placeholder="precio" value="<?php echo $precio; ?>">

            <label for="creado">Creado</label>
            <input type="date" id="creado" name="creado" placeholder="año/mes/dia" value="<?php echo $creado; ?>">

            <label for="vence">Vence</label>
            <input type="date" id="vence" name="vence" placeholder="Año/mes/día" value="<?php echo $vence; ?>">

            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" placeholder="1 - 20" value="<?php echo $cantidad; ?>">

            <label for="comentario">Comentario</label>
            <textarea name="comentario" id="comentario" cols="10" rows="10"><?php echo $comentario; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Datos Técnicos</legend>

            <label for="normas">Normas</label>
            <input type="text" name="normas" id="normas" placeholder="Normas" value="<?php echo $normas; ?>">

            <label for="combustible">Uso</label>
            <select name="combustible" id="combustible" value="<?php echo $combustible; ?>">
                <option value="seleccion" selected> .:. Seleccione .:. </option>
                <option value="nafta">Nafta</option>
                <option value="diesel">Diesel</option>
                <option value="multicombustible">Multicombustible</option>
            </select>

        </fieldset>

        <fieldset>
            <legend>Proveedor</legend>
            <label for="empresaId"">Empresa</label>
            <select name=" empresaId" id="empresaId">
                <option name="empresaId" value="empresaId" selected> -- Seleccione -- </option>
                <?php while($rowEmpresaId=mysqli_fetch_assoc($resultado)) : ?>
                <option <?php $rowEmpresaId===empresaId['empresaId'] ? : '' ;?> value="
                    <?php $rowEmpresaId['id'];?>">
                    <?php $rowEmpresaId['empresaId']; ?>
                </option>

                <?php endwhile; ?>
                </select>
        </fieldset>

        <input type="submit" class="boton boton-verde" id="ingresar-producto" value="Ingresar">
    </form>
</main>

<?php 

incluirTemplates('footer');

?>