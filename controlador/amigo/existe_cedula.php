<?php

require '../../conexion.php';

$cedula = mysqli_real_escape_string($conexion, $_POST['cedula']);

$consulta = "SELECT * FROM amigos WHERE cedula='$cedula'";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows === 0) {
  header("Location: ../../vistas/amigo/crear_amigo.php?cedula=$cedula");
} else {
  header("Location: ../../vistas/amigo/existe_amigo.php?cedula=$cedula");
}
