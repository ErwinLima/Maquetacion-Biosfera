<?php
require_once('modelos/conexion.php');
$conexion = new Conexion1();
?> 
<div class="mapa-plantilla">
  <div id="logo">
    <img src="vistas/img/logo_completo.png" alt="">
  </div>
  <div id="info">
    <i class="fa-solid fa-circle-info"></i>
  </div>
  <ul id="social-sidebar">
    <li>
      <a id="btnIcon" onclick="showPopup(popup)">
        <i class="fa-solid fa-user"></i>
        <span>Usuario</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa-solid fa-satellite-dish"></i>
        <span>Satelital</span>
      </a>
    <li>
      <a href="#">
        <i class="fa-solid fa-cloud-sun-rain"></i>
        <span>Clima</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa-solid fa-layer-group"></i>
        <span>Opciones</span>
      </a>
    </li>
  </ul>

  <section id="datos-actuales">
    <h1>Datos Actuales</h1>
    <ul>
    <?php //$clase->datosVentanaPrincipal('Temperatura') ?>
      <li><p> </p> <i class="fa-solid fa-temperature-three-quarters"></i> <?php echo ($conexion->datosVentanaPrincipal('Temperatura')); ?>°C</li>
      <li><i class="fa-solid fa-cloud-rain"></i> <?php echo ($conexion->datosVentanaPrincipal('Humedad_porcentaje')); ?> %</li>
      <li><i class="fa-solid fa-droplet"></i> <?php echo ($conexion->datosVentanaPrincipal('Humedad_relativa')); ?> %</li>
      <li><i class="fa-solid fa-wind"></i> <?php echo ($conexion->datosVentanaPrincipal('Velocidad_viento')); ?> Km/h</li>
      <li><i class="fa-solid fa-arrow-right"></i> <?php echo ($conexion->datosVentanaPrincipal('Direccion_viento')); ?></li>
    </ul>
    
  </section>

  <div class="contenedor">
    <div class="overlay" id="overlay">
      <div class="popup" id="popup">
        <h3>Inicio de Sesión</h3>
        <form action="" class="formulario">
          <fieldset>
            <div class="contenedor-inputs">
              <div class="campo">
                <label>Usuario</label>
                <input class="input-text" type="text">
              </div>

              <div class="campo">
                <label>Contraseña</label>
                <input class="input-text" type="password">
              </div>
            </div> <!-- .contenedor-inputs -->

            <a class="enlace" href="#">¿Olvidaste tu contraseña?</a>
            <input type="submit" class="btn-submit" value="ingresar">
            <a class="enlace" href="#">¿No tienes cuenta?, Regístrate aquí</a>
          </fieldset>
        </form>
    </div>
  </div>
</div>
<div id="mapa_div">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15403.393733429206!2d-89.67544292033391!3d15.166666280273581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f618cfeb35cd9bf%3A0x5b11e2e2db4acef0!2sSierra%20de%20las%20Minas!5e0!3m2!1ses-419!2sgt!4v1671550207910!5m2!1ses-419!2sgt"
     style="border:0; width: 100%; height: 976px; margin:0; padding: 0; " allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade" ></iframe>
    
  </div>

<script src="vistas/js/main.js"></script>