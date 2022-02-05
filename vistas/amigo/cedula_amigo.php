<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>ALVARO DAVID / Candidato a Cámara Partido Conservador 107</title>
  <meta name="viewport" content="width=device-width" />

  <link href="../../recursos/css/style.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="../../recursos/css/login.css" rel="stylesheet" type="text/css" media="screen" />

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

    .login-box {
      margin-top: 150px;
    }
  </style>

</head>

<body>
  <div id="container">

    <!-- header -->
    <?php require '../../compartido/cabecera.php' ?>
    <!-- FIN header -->


    <!-- LOGIN -->
    <div id="portada" align="center">

      <div class="login-box">
        <img src="../../recursos/img/logo.jpg" class="avatar" alt="Avatar Image">
        <h1>Registro Amigo(a)</h1>
        <p class="letraNormal">Gracias por ser parte de nuestra red de amigos.</p>
        <br><br><br>

        <!-- EVITAR QUE LOS CAMPOS AUTCOMPLETEN -->
        <!-- autocomplete="off -->
        <form
          action="../../controlador/amigo/existe_cedula.php"
          method="POST"
          autocomplete="off"
        >
          <p class="letraNormal">Digite su cédula:</p>
          <input
            type="number"
            name="cedula"
            id="cedula"
            class="entradaFormulario"
            placeholder="Cédula sin puntos ni comas"
            required
          >

          <p class="letraNormal">Digite la cédula del líder</p>
          <input
            type="number"
            name="cedula_lider"
            id="cedula_lider"
            class="entradaFormulario"
            placeholder="Cédula sin puntos ni comas"
          >

          <input class="botonSiguiente" type="submit" value="Entrar">
        </form>

      </div>

    </div>
    <!-- FIN LOGIN -->

  </div>

  <script src="../../recursos/js/instrucciones.js"></script>

</body>

</html>
