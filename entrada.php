<?php 

require 'include/funciones.php';

incluirTemplates('header');
?>

    <main class="contenedor seccion">
        <div class="contenedor seccion seccion-i nferior contenido-centrado">
            <section class="blog">
                <h1>Guía para el mantenimiento de tu vehículo</h1>
                <p class="informacion-meta">Escrito el: <span>04/09/2022</span> por: <span>Admin</span></p>
                <article class="entrada-tecnica">
                    <div class="imagen">
                        <picture>
                            <source src="build/img/Lubricantes/motor-sucio.webp" type="motor-sucio.webp">
                            <source src="build/img/Lubricantes/motor-sucio.png" type="motor-sucio.png">
                            <img loading="lazy" src="build/img/Lubricantes/motor-sucio.png" alt="motor-sucio.png">
                        </picture>
                    </div>
                    <div class="resumen-tecnico">
                        <h4>Mantenimiento de tu vehiculo</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores eos dolore adipisci fugit
                            tempora et ipsam officia cumque libero pariatur harum quae quaerat voluptas odit, non
                            consequatur magnam debitis. Repellendus.</p>
                        <h4>Consejos para el mantenimiento del vehículo</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, suscipit unde fuga doloremque
                            placeat, minus mollitia atque maxime ducimus cupiditate, saepe soluta praesentium eaque
                            necessitatibus! Voluptates natus modi molestiae totam.</p>
                    </div>
                </article>
        </div>
    </main>

 
    <?php
    incluirTemplates('footer');


    ?>

</body>

</php>