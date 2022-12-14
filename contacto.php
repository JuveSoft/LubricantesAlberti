<?php 

require 'Include/funciones.php';

incluirTemplates('header');

?>

    <main class="contenedor seccion">
        <h1>Página de contacto</h1>

        <!-- <img src="build/img/Lubricantes/latas-comunicacion.png" alt=""> -->

        <h4>Llene el formulario de contacto para la consulta</h4>
        <form class="formulario" action="">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre">
                <label for="apellido">Apellido</label>
                <input type="text" placeholder="Tu apellido" id="apellido">
                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu e-mail" id="email">
                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="123-456-7890" id="telefono" name="telefono" pattern="[0-9]{3}-[0-9]{3}[0-9]{4}">
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
            </fieldset>
            <fieldset>
                <legend>Su consulta</legend>
                <label for="opciones">Producto o Servicio</label>
                <select name="" id="opciones">
                    <option value="" disabled selected> .:. Seleccione .:. </option>
                    <option value="producto">Producto</option>
                    <option value="servicio">Servicio</option>
                </select>
                <label for="patente">Patente</label>
                <input type="text" placeholder="Patente" id="patente">
                <label for="marca">Marca</label>
                <input type="text" placeholder="Marca del vehiculo" id="marca">
                <label for="modelo">Modelo</label>
                <input type="text" placeholder="Modelo del auto" id="modelo">
                <label for="combustible">Combustible</label>
                <select name="combustible" id="combustible">
                    <option value="" disable selected> .:. Seleccione .:. </option>
                    <option value="nafta">Nafta</option>
                    <option value="nafta-gas">Nafta-Gas</option>
                    <option value="diesel">Diesel</option>
                </select>
                <label for="motor-cc">Cilindrada</label>
                <input type="text" placeholder="cc." id="motor-cc">
                <label for="anio">Año</label>
                <input type="number" placeholder="¿Que año es?" id="anio" min="1880" max="2030">
            </fieldset>
            <fieldset>
                <legend>Informacion del servicio</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contacto-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contacto-email">

                    <label for="contacto-whatsapp">WhatsApp</label>
                    <input name="contacto" type="radio" value="whatsapp" id="contacto-whatsapp">
                </div>
                <p>Si eligió telefono, elija la fecha y la hora para que lo podamos llamr</p>
                <label for="fecha">Fecha: </label>
                <input type="datetime-local" id="fecha">

                <label for="hora">Hora: </label>
                <input type="time" id="hora" min="10:30" max="18:30">


            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

<?php incluirTemplates('footer'); ?>

