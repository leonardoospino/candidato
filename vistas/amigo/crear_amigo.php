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
			margin-top: 5px;
		}
	</style>

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
</head>

<body>
	<div id="container">
		<!-- GRABAR DATOS-->
		<div id="portada" align="center">

			<div class="login-box">
          <h2>Cédula: <?= $_GET['cedula'] ?></h2>
          <h2 id="textoPais">COLOMBIA</h2>
          <p style="font-size: 22pt;">DIGITE:</p>
          <p id="cedula_verificada">---------</p>

          <form
            action="../../controlador/amigo/almacenar_amigo.php"
            method="post"
            autocomplete="off"
          >
          <div id="datosPersonales">
            <input
              class="entradaFormulario"
              type="hidden"
              name="cedula"
              value="<?= $_GET['cedula'] ?>"
            >

            <input
              class="entradaFormulario"
              type="text"
              name="nombre"
              placeholder="Nombre"
              required
            >

            <input
              class="entradaFormulario"
              type="text"
              name="apellidos"
              placeholder="Apellidos"
              required
            >

            <?php include '../../controlador/amigo/obtener_paises.php' ?>

            <select
              class="entradaFormulario"
              id="selectPaises"
              name="pais"
            >
              <optgroup label="Selecciona un país:">
                <?php foreach($paises as $p) { ?>
                  <option
                    data-texto-pais="<?= $p['pais'] ?>"
                    value="<?= $p['pais_cod'] ?>"
                    <?= ($p['pais'] === 'COLOMBIA')? 'selected' : '' ?>
                  >
                    <?= utf8_encode($p['pais']) ?> (<?= $p['indicativo_pais'] ?>)
                  </option>
                <?php } ?>
              </optgroup>
            </select>

            <input
              class="entradaFormulario"
              type="number"
              name="celular"
              placeholder="Celular"
            >

            <input
              class="entradaFormulario"
              type="number"
              name="telefono"
              placeholder="Teléfono"
            >

            <input
              class="entradaFormulario"
              type="email"
              name="email"
              placeholder="E-mail"
            >

            <input
              class="entradaFormulario textoBlanco"
              type="date"
              name="fecha_nac"
              placeholder="Fecha de Nacimiento"
              required
            >

            <input class="botonSiguiente" id="abc" type="button" value="Peticion AJAX">

            <p style="font-size: 22pt;">Leer bien antes de grabar</p>
            <input class="botonSiguiente" id="guardarDatosPersonales" type="button" value="Siguiente">
          </div>

          <div id="direccion" class="ocultar">
            <!-- AQUI SE DEBEN CARGAR LOS CAMPOS DE DIRECCIONES -->
            <select
              class="entradaFormulario"
              id="selectDptos"
              name="dpto"
            >
              <optgroup label="Selecciona un departamento:" >
              </optgroup>
            </select>

            <select
              class="entradaFormulario"
              id="selectMunicipios"
              name="municipio"
            >
              <optgroup label="Selecciona un municipio:" >
              </optgroup>
            </select>


            <select
              class="entradaFormulario"
              id="selectBarrios"
              name="barrio"
            >
              <optgroup label="Selecciona un barrio:" >
              </optgroup>
            </select>

            <textarea
              class="entradaFormularioNoEditable"
              row="10"
              col="4"
              id="comuna_loc"
              disabled
            >Comuna/Localidad: Popular ABC</textarea>

            <!-- AQUI SE DEBEN CARGAR LOS CAMPOS DE DIRECCIONES -->
            <p style="font-size: 22pt;">Leer bien antes de grabar</p>
            <input
              class="botonSiguiente"
              id="anteriorDireccion"
              type="button"
              value="Anterior"
            >
            &nbsp;&nbsp;
            <input
              class="botonSiguiente"
              id="siguienteDireccion"
              type="button"
              value="Siguiente"
            >
          </div>
        </form>
      </div>

		</div>
		<!-- FIN GRABAR DATOS -->

	</div>

  <script src="../../recursos/js/crear_amigo.js"></script>
</body>

</html>
