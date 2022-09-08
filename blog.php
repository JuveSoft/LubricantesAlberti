<?php 
require 'include/funciones.php';
incluirTemplates('header');


?>

    <main class="contenedor seccion">
        <div class="contenedor seccion seccion-inferior contenido-centrado">
            <section class="blog">
                <h1>Nuestro Blog</h1>
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
                                <p class="informacion-meta">Escrito el: <span> 04/09/2022 </span> por: <span> Admin</span></p>
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
                                <p class="informacion-meta">Escrito el: <span> 04/09/2022 </span> por: <span> Admin</span></p>
                                <p>Rutinas posibles para el cuidado del motor</p>
                            </a>
                        </div>
                    </article>
                        <article class="entrada-blog">
                            <div class="imagen">
                                <picture>
                                    <source src="build/img/Lubricantes/engranaje_lubricados.webp" type="motor-sucio.webp">
                                    <source src="build/img/Lubricantes/engranaje_lubricados.png" type="motor-sucio.png">
                                    <img loading="lazy" src="build/img/Lubricantes/engranaje_lubricados.png" alt="motor-sucio.png">
                                </picture>
                            </div>
                            <div class="texto-entrada">
                                <a href="entrada.php">
                                    <h4>Mantenimiento de tu vehiculo</h4>
                                    <p class="informacion-meta">Escrito el: <span> 04/09/2022 </span> por: <span> Admin</span></p>
                                    <p>Consejos para el mantenimiento del vehículo</p>
                                </a>
                            </div>                        
                        </article>
                        <article class="entrada-blog">
                            <div class="imagen">
                                <picture>
                                    <source src="build/img/Lubricantes/motor-fundido.webp" type="motor_limpio.webp">
                                    <source src="build/img/Lubricantes/motor-fundido.png" type="motor_limpio.png">
                                    <img loading="lazy" src="build/img/Lubricantes/motor-fundido.png" alt="motor_limpio.png">
                                </picture>
                            </div>
                            <div class="texto-entrada">
                                <a href="entrada.php">
                                    <h4>Consejos para el manejo diario</h4>
                                    <p class="informacion-meta">Escrito el: <span> 04/09/2022 </span> por: <span> Admin</span></p>
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
    </main>

 <?php incluirTemplates('footer'); ?>

