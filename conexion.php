<?php
  // $conexion = mysqli_connect(
  //   'localhost',
  //   'u433941955_admdbasetarget',
  //   'fys7Pcn$dk',
  //   'u433941955_candidato1'
  // );
  // $resultado = mysqli_query($conexion, $consulta);

  $conexion = new mysqli(
    'HOST',
    'usuario',
    'clave',
    'base_datos'
  );
  $resultado = $conexion->query($consulta);
