<?php

// Consultar lider por cedula y clave
// El resultado trae el nombre completo del usuario que inicio sesion

$resultado = true;

if ($resultado) {
  session_start();
  $_SESSION['usuarioCedula'] = '1083415645';
  $_SESSION['usuarioNombreCompleto'] = 'Juan Arrieta';

  echo '<h1>Sesion iniciada!</h1>';
  echo '<h1>Redireccionar hacia la pagina donde deba acceder el usuario</h1>';
}
