<?php 
require 'Include/funciones.php';
incluirTemplates('header');

?>


    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/WP_20160915_17_23_08_Pro.webp" type="image/webp">
                    <source srcset="build/img/WP_20160915_17_23_08_Pro.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/20220811_154227.heic" alt="spbre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    30 años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam mollitia vero esse ipsum,
                    perspiciatis molestiae non distinctio, placeat provident nam dolore sequi dicta ratione, autem sit
                    in error enim. Debitis?
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt sed maiores dolores veniam at vitae
                    cupiditate quasi ad mollitia debitis. Laudantium amet at voluptas eligendi quos sit dolores
                    asperiores recusandae.</p>
                </p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion linea">
        <h1>Mas sobre nosotros</h1>
        <div class="icono-nosotros">
            <div class="icono">
                <h3>Lubricantes</h3>
                <img src="build/img/Lubricantes/gotaAceiteChica.webp" alt="">
                <p>Solo primeras marcas para darle mas seguridad y respaldo a los servicios</p>
            </div>
            <div class="icono">
                <h3>Precio</h3>
                <img src="build/img/Iconos/icono2.svg" alt="icono-dinero">
                <p>Los precios son equilibrados, solo tiene que pedir un presupuesto sin compromiso y sin costo alguno,
                    para poder comparar en calidad y marcas con cualquier otro servicio </p>
            </div>
            <div class="icono">
                <h3>tiempo</h3>
                <img src="build/img/Iconos/icono3.svg" alt="icono-tiempo">
                <p>Tratamos de darle valor a su tiempo. Tratamos siempre de cumplir con los tiempos pactados</p>
            </div>
        </div>
    </section>

<?php 
incluirTemplates('footer');
?>
