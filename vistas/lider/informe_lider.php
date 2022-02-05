<?php session_start(); ?>


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
        <h1>Informe Líder</h1>
        <p class="letraNormal m-0">
          <?= $_SESSION['usuarioNombreCompleto'] ?>
        </p>
        <p class="letraNormal m-0">
          <?= $_SESSION['usuarioCedula'] ?>
        </p>
        <!-- <p class="letraNormal">Gracias por ser parte de nuestra red de lideres.</p> -->

        <div class="contenedorInformesMenu">
          <ul>
            <!--
              Cuantos amigos tiene ese lider
              por municipio (INT)

              Cuantos amigos tiene ese lider
              por puesto de votacion (INT)
             -->
            <li>
              <a href="./estadisticas_lider.php">
                Estadísticas
              </a>
            </li>


            <!--
              Listad de amigos que tiene ese lider
              por municipio
              (Cedula, Nombre, Apellidos)

              Listad de amigos que tiene ese lider
              por puesto de votacion
             -->
            <li>
              <a href="./listado_amigos_lider.php">
                Listado de amigos
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- FIN LOGIN -->

    </div>


  <script src="../../recursos/js/lider.js"></script>

</body>

</html>
