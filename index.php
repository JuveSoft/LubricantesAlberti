<?php
require 'Include/funciones.php';

incluirTemplates('header', $inicio=true);

?>

<html>
    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Productos en venta</h2>
        <div class="seccion-anuncios">
            <div class="contenedor-anuncio">
                <div class="anuncio">
                    <picture class="foto-producto">
                        <source srcset="build/img/Lubricantes/shell/Helix_hx8_5w40_1Ltr.webp" type="imagenWebp">
                        <source srcset="build/img/Lubricantes/shell/Helix_hx8_5w40_1Ltr.png" type="imagenPNG">
                        <img loading="lazy" src="build/img/Lubricantes/shell/Helix_hx8_5W40_1Ltr.png" alt="imagenPNG">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>Helix HX8</h3>
                        <h4>5w40</h4>
                        <p>Aceite 100% sintético.</p>
                        <p class="precio">$ 3.550,-</p>
                        <ul class="icono-caracteristicas">
                            <li>
                                <img loading="lazy" src="build/img/Iconos/engranaje_reloj-icons.svg" alt="iconoReloj">
                                <p>Mas vida útil para su motor</p>
                            </li>
                            <li>
                                <img loading="lazy" src="build/img/Iconos/thermometer-icons.svg" alt="iconoReloj">
                                <p>Menor temperatura de los metales</p>
                            </li>
                            <li>
                                <img loading="lazy" src="build/img/Iconos/relojNafta.svg" alt="iconoReloj">
                                <p>Menos consumo combustible</p>
                            </li>
                        </ul>
                        <a href="anuncios.php" class="boton boton-amarillo">Ficha técnica</a>
                    </div>
                </div>
                <!--anuncios-->
            </div>
            <!--contenedor-anuncios-->
            <div class="contenedor-anuncio">
                <div class="anuncio">
                    <picture class="foto-producto">
                        <source srcset="build/img/Lubricantes/shell/helix_HX8_5w40_4Ltr.webp" type="imagenWebp">
                        <source srcset="build/img/Lubricantes/shell/helix_HX8_5w40_4Ltr.png" type="imagenPNG">
                        <img loading="lazy" src="build/img/Lubricantes/shell/helix_HX8_5w40_4Ltr.png" alt="imagenPNG">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>Helix HX8</h3>
                        <h4>5w40</h4>
                        <p>Aceite 100% sintético.</p>
                        <p class="precio">$ 13.550,-</p>
                        <ul class="icono-caracteristicas">
                            <li>
                                <img loading="lazy" src="build/img/Iconos/engranaje_reloj-icons.svg" alt="iconoReloj">
                                <p>Mas vida útil para su motor</p>
                            </li>
                            <li>
                                <img loading="lazy" src="build/img/Iconos/thermometer-icons.svg" alt="iconoReloj">
                                <p>Menor temperatura de los metales</p>
                            </li>
                            <li>
                                <img loading="lazy" src="build/img/Iconos/relojNafta.svg" alt="iconoReloj">
                                <p>Menos consumo combustible</p>
                            </li>
                        </ul>
                        <a href="anuncios.php" class="boton boton-amarillo">Ficha técnica</a>
                    </div>
                </div>
                <!--anuncios-->
            </div>
            <!--contenedor-anuncios-->
            <div class="contenedor-anuncio">
                <div class="anuncio">
                    <picture class="foto-producto">
                        <source srcset="build/img/Lubricantes/YPF/F-50d1_5W30x1Ltr.webp" type="F-50d1_5W30x1Ltr">
                        <source srcset="build/img/Lubricantes/YPF/F-50d1_5W30x1Ltr.png" type="F-50d1_5W30x1Ltr">
                        <img loading="lazy" src="build/img/Lubricantes/YPF/F-50d1_5W30x1Ltr.png" alt="F-50d1_5W30x1Ltr">
                    </picture>
                    <div class="contenido-anuncio">
                        <h3>Elaion F50 d1</h3>
                        <h4>5w30</h4>
                        <p>Aceite 100% sintético.</p>
                        <p class="precio">$ 14.550,-</p>
                        <ul class="icono-caracteristicas">
                            <li>
                                <img loading="lazy" src="build/img/Iconos/engranaje_reloj-icons.svg" alt="iconoReloj">
                                <p>Mas vida útil para su motor</p>
                            </li>
                            <li>
                                <img loading="lazy" src="build/img/Iconos/thermometer-icons.svg" alt="iconoReloj">
                                <p>Menor temperatura de los metales</p>
                            </li>
                            <li>
                                <img loading="lazy" src="build/img/Iconos/relojNafta.svg" alt="iconoReloj">
                                <p>Menos consumo combustible</p>
                            </li>
                        </ul>
                        <a href="anuncios.php" class="boton boton-amarillo">Ficha técnica</a>
                    </div>
                </div>
                <!--anuncios-->
            </div>
            <!--contenedor-anuncios-->
        </div>
        <!--seccion-anuncios-->

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver todos los anuncios</a>

        </div>
    </section>
    <section class="imagen-contacto">
        <h2>Encuentra el lubricante adecuado a tu vehículo</h2>
        <p>Para cualquier inquietud no dude en ponerse en contacto y consultar todo lo necesario</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source src="build/img/Lubricantes/motor-sucio.webp" type="motor-sucio.webp">
                        <source src="build/img/Lubricantes/motor-sucio.png" type="motor-sucio.png">
                        <img loading="lazy" src="build/img/Lubricantes/motor-sucio.png" alt="motor-sucio.png">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Mantenimiento de tu vehiculo</h4>
                        <p>Escrito el: <span>04/09/2022</span> por: <span>Admin</span></p>
                        <p>Consejos para el mantenimiento del vehículo</p>
                    </a>
                </div>

            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source src="build/img/motor_limpio.webp" type="motor_limpio.webp">
                        <source src="build/img/motor_limpio.png" type="motor_limpio.png">
                        <img loading="lazy" src="build/img/motor_limpio.png" alt="motor_limpio.png">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Consejos para el manejo diario</h4>
                        <p>Escrito el: <span>04/09/2022</span> por: <span>Admin</span></p>
                        <p>Rutinas posibles para el cuidado del motor</p>
                    </a>
                </div>

            </article>
        </section>
        <section class="testimoniales">
            <h3>Comentarios</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó correctamente, estoy muy conforme con el trabajo realizado.
                </blockquote>
                <p>Juve</p>
            </div>
        </section>
    </div>


<?php incluirTemplates('footer');?>

