<?php
// $conexion = mysqli_connect(
//   'localhost',
//   'u433941955_admdbasetarget',
//   'fys7Pcn$dk',
//   'u433941955_candidato1'
// );
// $resultado = mysqli_query($conexion, $consulta);

$conexion = new mysqli(
  'localhost', //'127.0.0.1'
  'root',
  '',
  'candidatos'
);

// $conexion = new mysqli(
//   '212.1.208.211', //'127.0.0.1'
//   'u433941955_admdbasetarget',
//   'fys7Pcn$dk',
//   'u433941955_candidato1'
// );

if ($conexion->connect_errno) {
  die('<h1>Error de conexión a la BD</h1>');
}
