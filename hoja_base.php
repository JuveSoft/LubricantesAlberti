<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/app.css">
    <title>Lubricantes Alberti</title>

</head>

<body>
    <header class="header">
        <div class="contenedor contenedor-header">
            <div class="barra">
                <div class="/">
                <div class="titulo-principal">
                    <img src="build/img/logoAlberti.svg" alt="logoSVG">
                <h2>Lubricantes Alberti</h2>
                </div>       
                </div>
                <nav class="navegacion">
                    <a href="index.php">Inicio</a>
                    <a href="nosotros.php">Nosotros</a>                    
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div><!--.barra-->
        </div>
    </header>

<main class="contenedor seccion">
    <h1>Hoja base</h1>
</main>
<!-- Algunas fechas -->
        <?php 
                $fecha=date('d'); 
                $fechaM=date('d-m');
                $fechaA=date('d-m-y');
                $fechaAnio=date('d-m-Y');
                $fechaAnioSolo=date('Y');
                echo $fecha;
                echo "<br>";
                echo $fechaM;
                echo "<br>";
                echo $fechaA;
                echo "<br>";
                echo $fechaAnio;
                echo "<br>";
                echo $fechaAnioSolo;
                ?>


    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2022 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>

</body>

</html>