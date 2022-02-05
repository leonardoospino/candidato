<?php require '../../controlador/lider/amigos_por_municipio.php'; ?>

<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>ALVARO DAVID / Candidato a Cámara Partido Conservador 107</title>
  <meta name="viewport" content="width=device-width" />

  <link href="../../recursos/css/style.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="../../recursos/css/login.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="../../recursos/css/informes.css" rel="stylesheet" type="text/css" media="screen" />

  <style type="text/css">
    #portada {
      height: 1241px;
      width: 751px;
      float: left;
      background-color: black;
    }

    #menuserv {
      height: 82px;
      width: 751px;
      float: left;
      margin-top: 900px;
      margin-left: 0px;
    }
  </style>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>

</head>

<body>
  <div id="container">

    <!-- header -->

    <header>
      <div id="botones">

        <a href="../../index.php">
          <button name="boton1" class="boton">Inicio</button>
        </a>

        <a href="tel:+573125817322">
          <button name="boton2" class="boton">WhatsApp</button>
        </a>

        <a href="a.html">
          <button name="boton3" class="boton">Agenda</button>
        </a>

        <a href="https://wa.me/573125817322">
          <button name="boton4" class="boton">Compartir</button>
        </a>

      </div>
    </header>
    <!-- FIN header -->


    <!-- LOGIN -->
    <div id="portada" align="center">

      <div class="login-box">
        <h1>Listado de amigos por municipios</h1>

        <div class="contenedorResultados">
          <?php foreach($amigosPorMunicipios as $amigosPorMunicipio) { ?>
            <table class="tablaResultado">
              <tr>
                <th colspan="4">
                  <?= $amigosPorMunicipio['pais'] ?>
                </th>
              </tr>
              <tr>
                <th colspan="4">
                  <?= $amigosPorMunicipio['dpto'] ?>
                </th>
              </tr>
              <tr>
                <th colspan="4">
                  <?= $amigosPorMunicipio['municipio'] ?>
                </th>
              </tr>
              <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Barrio</th>
              </tr>

              <?php foreach ($amigosPorMunicipio['amigos'] as $amigo) { ?>
                <tr>
                  <td><?= $amigo['cedula'] ?></td>
                  <td><?= $amigo['nombre'] ?></td>
                  <td><?= $amigo['apellidos'] ?></td>
                  <td><?= $amigo['barrio'] ?></td>
                </tr>
              <?php } ?>

<?php foreach ($amigosPorMunicipio['amigos'] as $amigo) { ?>
  <tr>
    <td><?= $amigo['cedula'] ?></td>
    <td><?= $amigo['nombre'] ?></td>
    <td><?= $amigo['apellidos'] ?></td>
    <td><?= $amigo['barrio'] ?></td>
  </tr>
<?php } ?>

<?php foreach ($amigosPorMunicipio['amigos'] as $amigo) { ?>
  <tr>
    <td><?= $amigo['cedula'] ?></td>
    <td><?= $amigo['nombre'] ?></td>
    <td><?= $amigo['apellidos'] ?></td>
    <td><?= $amigo['barrio'] ?></td>
  </tr>
<?php } ?>

<?php foreach ($amigosPorMunicipio['amigos'] as $amigo) { ?>
  <tr>
    <td><?= $amigo['cedula'] ?></td>
    <td><?= $amigo['nombre'] ?></td>
    <td><?= $amigo['apellidos'] ?></td>
    <td><?= $amigo['barrio'] ?></td>
  </tr>
<?php } ?>



<?php foreach ($amigosPorMunicipio['amigos'] as $amigo) { ?>
                <tr>
                  <td><?= $amigo['cedula'] ?></td>
                  <td><?= $amigo['nombre'] ?></td>
                  <td><?= $amigo['apellidos'] ?></td>
                  <td><?= $amigo['barrio'] ?></td>
                </tr>
              <?php } ?>

<?php foreach ($amigosPorMunicipio['amigos'] as $amigo) { ?>
  <tr>
    <td><?= $amigo['cedula'] ?></td>
    <td><?= $amigo['nombre'] ?></td>
    <td><?= $amigo['apellidos'] ?></td>
    <td><?= $amigo['barrio'] ?></td>
  </tr>
<?php } ?>

<?php foreach ($amigosPorMunicipio['amigos'] as $amigo) { ?>
  <tr>
    <td><?= $amigo['cedula'] ?></td>
    <td><?= $amigo['nombre'] ?></td>
    <td><?= $amigo['apellidos'] ?></td>
    <td><?= $amigo['barrio'] ?></td>
  </tr>
<?php } ?>

<?php foreach ($amigosPorMunicipio['amigos'] as $amigo) { ?>
  <tr>
    <td><?= $amigo['cedula'] ?></td>
    <td><?= $amigo['nombre'] ?></td>
    <td><?= $amigo['apellidos'] ?></td>
    <td><?= $amigo['barrio'] ?></td>
  </tr>
<?php } ?>

            </table>
            <br/>
            <br/>

          <?php } ?>
        </div>
      </div>
      <!-- FIN LOGIN -->

    </div>


  <script src="../../recursos/js/lider.js"></script>

</body>

</html>
