<?php

require '../../conexion.php';

session_start();

$cedula_lider = $_SESSION['usuarioCedula'];

$consulta = (
  "SELECT " .
      "p.pais, " .
      "d.dpto, " .
      "m.municipio, " .
      "GROUP_CONCAT( " .
        "CONCAT( " .
          "a.cedula, " .
          "';;;', " .
          "a.nombre, " .
          "';;;', " .
          "a.apellidos, " .
          "';;;', " .
          "b.barrio " .
        ") " .
        "SEPARATOR '|||' " .
    ") amigos " .
  "FROM " .
      "amigos a " .
      "JOIN barrio b ON b.barrio_cod = a.barrio_cod " .
      "JOIN municipio m ON m.municipio_cod = b.municipio_cod " .
      "JOIN dpto d ON d.dpto_cod = m.dpto_cod " .
      "JOIN pais p ON p.pais_cod = d.pais_cod " .
  "WHERE a.cedula_lider = '$cedula_lider' AND a.estado = 1 " .
  "GROUP BY m.municipio " .
  "ORDER BY m.municipio ASC"
);

$resultados = $conexion->query($consulta);

$amigosPorMunicipios = [];

if ($resultados->num_rows) { // Hay registros
  foreach ($resultados as $resultado) {
    $amigosPorMunicipio = [
      'pais' => $resultado['pais'],
      'dpto' => $resultado['dpto'],
      'municipio' => $resultado['municipio'],
      'amigos' => []
    ];

    $amigos = [];
    $amigosCodificados = explode('|||' , $resultado['amigos']);

    foreach ($amigosCodificados as $amigoCodificado) {
      $amigoSegmentos = explode(';;;' , $amigoCodificado);
      // echo json_encode($amigoSegmentos) . '<br/><br/>';
      $amigo = [
        'cedula' => $amigoSegmentos[0],
        'nombre' => $amigoSegmentos[1],
        'apellidos' => $amigoSegmentos[2],
        'barrio' => $amigoSegmentos[3],
      ];

      $amigos[] = $amigo;
    }



    $amigosPorMunicipio['amigos'] = $amigos;
    $amigosPorMunicipios[] = $amigosPorMunicipio;
  }
}
