<?php


require '../../conexion.php';

$cedula = mysqli_real_escape_string($conexion, $_POST['cedula']);
$cedula_lider = mysqli_real_escape_string($conexion, $_POST['cedula_lider']);
$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
$pais = mysqli_real_escape_string($conexion, $_POST['pais']);
$celular = mysqli_real_escape_string($conexion, $_POST['celular']);
$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$fecha_nac = mysqli_real_escape_string($conexion, $_POST['fecha_nac']);
$dpto = mysqli_real_escape_string($conexion, $_POST['dpto']);
$municipio = mysqli_real_escape_string($conexion, $_POST['municipio']);
$barrio = mysqli_real_escape_string($conexion, $_POST['barrio']);
$barrio_opcional = mysqli_real_escape_string($conexion, $_POST['barrio_opcional']);
$direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
$puesto_votacion = mysqli_real_escape_string($conexion, $_POST['puesto_votacion']);
$mesa = mysqli_real_escape_string($conexion, $_POST['mesa']);
$puede_votar = mysqli_real_escape_string($conexion, $_POST['puede_votar']);
$jurado = mysqli_real_escape_string($conexion, $_POST['jurado']);
$testigo = mysqli_real_escape_string($conexion, $_POST['testigo']);


echo $cedula . '<br>';
echo $cedula_lider . '<br>';
echo $nombre . '<br>';
echo $apellidos . '<br>';
echo $pais . '<br>';
echo $celular . '<br>';
echo $telefono . '<br>';
echo $email . '<br>';
echo $fecha_nac . '<br>';
echo $dpto . '<br>';
echo $municipio . '<br>';
echo $barrio . '<br>';
echo $barrio_opcional . '<br>';
echo $direccion . '<br>';
echo $puesto_votacion . '<br>';
echo $mesa . '<br>';
echo $puede_votar . '<br>';
echo $jurado . '<br>';
echo $testigo . '<br>';
