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
				<h1>Registro Amigo(a)</h1>
				<p style="font-size: 18pt;">Gracias por ser parte de nuestra red de amigos.</p>
				<p style="font-size: 18pt;">Digite:</p>

				<!-- EVITAR QUE LOS CAMPOS AUTCOMPLETEN -->
				<!-- autocomplete="off -->
				<form
					action="../../controlador/amigo/existe_cedula.php"
					method="POST"
					autocomplete="off"
				>
					<input
						type="number"
						name="cedula"
						id="cedula"
						class="entradaFormulario"
						placeholder="Cédula sin puntos ni comas"
						required
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
