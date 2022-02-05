<?php
  $sitioBase = (
    $_SERVER['REQUEST_SCHEME'] .
    '://' .
    $_SERVER['SERVER_NAME']
  );
?>


<header class="fijo">
  <div id="botones">
    <a href="<?= $sitioBase ?>">
      <button name="boton1" class="boton">
        Inicio
      </button>
    </a>

    <a href="tel:+573125817322">
      <button name="boton2" class="boton">WhatsApp</button>
    </a>

    <a href="a.html">
      <button name="boton3" class="boton">Agenda</button>
    </a>

    <?php if (
      in_array(
        $_SERVER['REQUEST_URI'],
        [
          '/vistas/lider/estadisticas_lider.php',
          '/vistas/lider/listado_amigos_lider.php',
        ]
      )
    ) { ?>
      <a href="<?= $sitioBase ?>/vistas/lider/informe_lider.php">
        <button name="boton4" class="boton fondoRojo">
          Volver
        </button>
      </a>

    <?php } else { ?>
      <a href="<?= $sitioBase ?>/vote-asi.php">
        <button name="boton4" class="boton">
          Vote Así
        </button>
      </a>
    <?php } ?>
  </div>
</header>
