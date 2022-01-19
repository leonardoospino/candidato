<?php

$conexion = mysqli_connect('localhost', 'u433941955_admdbasetarget', 'fys7Pcn$dk', 'u433941955_candidato1');
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$cedula=$_POST['cedula'];
session_start();
$_SESSION['cedula']=$cedula;

$consulta="SELECT*FROM amigos where cedula='$cedula'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("Location: amigo.html");
}
else{
    header("Location: amigo_registro.html");
}

