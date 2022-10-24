<?php

//  Importar la conexión
require '../Include/config/database.php';
$db=conectarDB();

//  Escribir el query
$query="SELECT * FROM lubricantes";


//  Consultar la base de datos
$sql=mysqli_query($db, $query);


$resultado=$_GET['resultado'] ?? null;

require '../Include/funciones.php';
incluirTemplates('header');

?>

<main class="contenedor seccion">
    <h1>Administrador de Lubricantes Alberti</h1>

    <?php 
    if(intval($resultado)===1): ?>
    <p class="alerta exito">El producto se ingreso correctamente</p>
    <?php endif; ?>

    <a href="propiedades/crear.php">Nuevo ingreso</a> |
    <a href="../altaProveedores.php">Alta de proveedores</a> |
    <a href="../altaVehiculo.php">Alta de Vehiculos</a> |
    <a href="../altaMarcas.php">Alta de Marcas</a> |
    <a href="../altasBajasModific.php">ALTAS BAJAS MODIFICACIONES</a>
    

    <table class="propiedades">
        <thead>
            <tr>
                <th>id</th>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody> 
            <!-- Mostrar los resultados -->
            <?php while($lubricante=mysqli_fetch_assoc($sql)): ?>
            <tr>                
                <td><?php echo $lubricante['id']; ?></td>
                <td><?php echo $lubricante['marca']; ?></td>
                <td><?php echo $lubricante['nombre']; ?></td>
                <td><img src="../imagenes/<?php echo $lubricante['imagen']; ?>" class="imagen-tabla"></td>
                <td><?php echo $lubricante['precio']; ?></td>
                <td>
                    <a href="#" class="boton-rojo-block">Eliminar</a>
                    <a href="#" class="boton-azulClaro-block">Actualizar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>


  <!-- cerrar la conexión -->


<?php 
incluirTemplates('footer');
?>