var dBuscarPorCedula = (
  document
  .querySelector('#buscarPorCedula')
);
var dCedula = (
  document
  .querySelector('#cedula')
);
var dCedulaLider = (
  document
  .querySelector('.cedulaLider')
);
var dResultadoContenedor = (
  document
  .querySelector('.resultadoContenedor')
);
var dTablaResultado = (
  document
  .querySelector('.tablaResultado')
);

function validarCedula() {
  var cedula = dCedula.value.trim();
  var cedulaValida = true;

  if (cedula.length == 0) {
    cedulaValida = false;
    dCedula.classList.add('error');
  } else {
    dCedula.classList.remove('error');
  }

  return cedulaValida;
}


function consultarPorCedula() {
  if (validarCedula()) {
    var peticionDatos = {
      'cedula': dCedula.value.trim(),
      'cedula_lider': dCedulaLider.value.trim()
    };

    $.ajax({
      type: 'POST',
      url: `../../controlador/lider/consultar_por_cedula_json.php`,
      dataType: 'JSON',
      data: peticionDatos,
      success: function(amigo) {
        console.log(amigo);
        if (amigo['cedula'] !== undefined) {
          dResultadoContenedor.classList.remove('ocultar');

          var tablaContenido = (
            `<tr>
              <th class="ancho50">Cédula</th>
              <th>${ amigo.cedula }</th>
            </tr>
            <tr>
              <td>Nombre</td>
              <td>${ amigo.nombre + ' ' + amigo.apellidos }</td>
            </tr>
            <tr>
              <td>Genero</td>
              <td>${ amigo.genero }</td>
            </tr>

            <tr>
              <td>Celular</td>
              <td>${ amigo.celular }</td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td>${ amigo.telefono }</td>
            </tr>
            <tr>
              <td>Correo</td>
              <td>${ amigo.correo }</td>
            </tr>
            <tr>
              <td>Fecha de nac.</td>
              <td>${ amigo.fechaNacimiento }</td>
            </tr>
            <tr>
              <td>Pais</td>
              <td>${ amigo.pais }</td>
            </tr>
            <tr>
              <td>Departamento</td>
              <td>${ amigo.dpto }</td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td>${ amigo.municipio }</td>
            </tr>
            <tr>
              <td>Barrio</td>
              <td>${ amigo.barrio }</td>
            </tr>
            <tr>
              <td>Barrio opcional</td>
              <td>${ amigo.barrioOpcional }</td>
            </tr>

            <tr>
              <td>Direccion</td>
              <td>${ amigo.direccion }</td>
            </tr>

            <tr>
              <td>Puesto vot.</td>
              <td>${ amigo.puestoDeVotacion }</td>
            </tr>

            <tr>
              <td>Mesa</td>
              <td>${ amigo.mesa }</td>
            </tr>

            <tr>
              <td>Puede votar</td>
              <td>${ amigo.puedeVotar }</td>
            </tr>

            <tr>
              <td>Es jurado</td>
              <td>${ amigo.esJurado }</td>
            </tr>

            <tr>
              <td>Es testigo</td>
              <td>${ amigo.esTestigo }</td>
            </tr>`
          );
          (
            dTablaResultado
            .innerHTML = tablaContenido
          );
        } else {

        }
      },
      error: function(err) {
        console.log(err);
      }
    });
  }
}

(
  dBuscarPorCedula
  .addEventListener(
    'click',
    consultarPorCedula
  )
);
