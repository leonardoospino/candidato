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

</head>

<body>
	<div id="container">
		<!-- GRABAR DATOS-->
		<div id="portada" align="center">

			<div class="login-box">
          <h2>Cédula: <?= $_GET['cedula'] ?></h2>
          <p style="font-size: 22pt;">DIGITE:</p>
          <p id="cedula_verificada">---------</p>

          <form
            action="../../controlador/amigo/guardar_datos_personales.php"
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
              name="pais"
            >
              <optgroup label="Selecciona un país:">
                <?php foreach($paises as $p) { ?>
                  <option
                    value="<?= $p['pais'] ?>"
                    <?= ($p['pais'] === 'COLOMBIA')? 'selected' : '' ?>
                  >
                    <?= $p['pais'] ?> (<?= $p['indicativo_pais'] ?>)
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

            <p style="font-size: 22pt;">Leer bien antes de grabar</p>
            <input class="botonSiguiente" id="guardarDatosPersonales" type="button" value="Siguiente">
          </div>

          <div id="direccion" class="ocultar">
            <!-- AQUI SE DEBEN CARGAR LOS CAMPOS DE DIRECCIONES -->



            <h1 class="textoBlanco">AQUI SE DEBEN CARGAR LOS CAMPOS DE DIRECCIONES</h1>




            <!-- AQUI SE DEBEN CARGAR LOS CAMPOS DE DIRECCIONES -->
            <p style="font-size: 22pt;">Leer bien antes de grabar</p>
            <input class="botonSiguiente" id="guardarDireccion" type="button" value="Siguiente">
          </div>
        </form>
      </div>

		</div>
		<!-- FIN GRABAR DATOS -->

	</div>

  <script src="../../recursos/js/crear_amigo.js"></script>
</body>

</html>
