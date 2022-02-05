<header>
  <div id="botones">
    <a
      href="<?= (
        $_SERVER['REQUEST_SCHEME'] .
        '://' .
        $_SERVER['SERVER_NAME']
      ) ?>"
    >
      <button name="boton1" class="boton">Inicio</button>
    </a>

    <a href="tel:+573125817322">
      <button name="boton2" class="boton">WhatsApp</button>
    </a>

    <a href="a.html">
      <button name="boton3" class="boton">Agenda</button>
    </a>

    <a
      href="<?= (
        $_SERVER['REQUEST_SCHEME'] .
        '://' .
        $_SERVER['SERVER_NAME'] .
        '/vistas/lider/informe_lider.php'
      ) ?>"
    >
      <button name="boton4" class="boton">Volver</button>
    </a>
  </div>
</header>
