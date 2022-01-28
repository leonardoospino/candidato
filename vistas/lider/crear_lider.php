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
        <img src="../../recursos/img/logo.jpg" class="avatar" alt="Avatar Image">
        <h1>Registro Líder</h1>
        <p class="letraNormal">Gracias por ser parte de nuestra red de lideres.</p>

        <p
          id="contenedorNombreCompleto"
          class="letraNormal ocultar"
        >
          <span id="textoNombreCompleto"></span>
        </p>
        <p
          id="contenedorTextoCedula"
          class="letraNormal ocultar"
        >
          Cédula: <span id="textoCedula"></span>
          <br><br>
        </p>

        <form
          action="../../controlador/amigo/existe_cedula.php"
          method="POST"
          autocomplete="off"
          id="formularioLider"
        >
          <div
            id="validarCedula"
          >
            <p
              id="errorCedulaAmigo"
              class="letraNormal ocultar errorTexto"
            >
              Para ser líder primero debes registrarte como amigo
            </p>

            <a
              id="enlaceCedulaAmigo"
              class="letraNormal ocultar"
              href="../amigo/cedula_amigo.php"
            >
              Toca Aquí para registrarte como amigo
            </a>
            <br><br><br>

            <p class="letraNormal">Digite su cédula:</p>
            <input
              type="number"
              name="cedula_lider"
              id="cedula_lider"
              class="entradaFormulario"
              placeholder="Cédula sin puntos ni comas"
            >

            <input
              class="botonSiguiente"
              type="button"
              value="Registrarte"
              id="validarCedulaBotonSiguiente"
            >
          </div>




          <div
            id="digitarClave"
            class="ocultar"
          >
            <p class="letraNormal">Digite la contraseña y su confirmación</p>
            <input
              type="password"
              name="clave"
              id="clave"
              class="entradaFormulario"
              placeholder="Contraseña"
              required
            >

            <input
              type="password"
              name="clave_confirmacion"
              id="clave_confirmacion"
              class="entradaFormulario"
              placeholder="Confirmar contraseña"
              required
            >
          </div>


        </form>

      </div>

    </div>
    <!-- FIN LOGIN -->

  </div>

  <script src="../../recursos/js/lider.js"></script>

</body>

</html>
