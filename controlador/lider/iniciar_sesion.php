<?php

require '../../conexion.php';

$cedula_lider = mysqli_real_escape_string($conexion, $_POST['cedula_lider']);
$clave = sha1(mysqli_real_escape_string($conexion, $_POST['clave']));
$perfil_cod = 5;

$consulta = "SELECT cl.perfil_cod, a.* FROM clave_lider cl JOIN amigos a ON a.cedula = cl.cedula_lider WHERE cl.cedula_lider = '$cedula_lider' AND cl.clave = '$clave'";

$resultado = $conexion->query($consulta);

session_start();

if ($resultado->num_rows > 0) {
  foreach ($resultado as $lider) {
    $_SESSION['usuarioCedula'] = $lider['cedula_lider'];
    $_SESSION['usuarioNombreCompleto'] = (
      $lider['nombre'] .
      ' ' .
      $lider['apellidos']
    );
    $_SESSION['usuarioCelular'] = $lider['celular'];
    $_SESSION['usuarioCorreo'] = $lider['email'];
    break;
  }

  print_r($_SESSION);

  header("Location: ../../vistas/lider/informe_lider.php");
} else {
  header("Location: ../../vistas/lider/crear_lider.php?error=clave");
  session_destroy();
}
