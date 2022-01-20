<?php


require '../../conexion.php';

$cedula = mysqli_real_escape_string($conexion, $_POST['cedula']);
$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
$pais = mysqli_real_escape_string($conexion, $_POST['pais']);
$celular = mysqli_real_escape_string($conexion, $_POST['celular']);
$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$fecha_nac = mysqli_real_escape_string($conexion, $_POST['fecha_nac']);


echo $cedula . '<br>';
echo $nombre . '<br>';
echo $apellidos . '<br>';
echo $pais . '<br>';
echo $celular . '<br>';
echo $telefono . '<br>';
echo $email . '<br>';
echo $fecha_nac . '<br>';
