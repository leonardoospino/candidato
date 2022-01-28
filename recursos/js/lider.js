var campoCedulaLider = document.querySelector('#cedula_lider');
var campoClave = document.querySelector('#clave');
var campoClaveConfirmacion = document.querySelector('#clave_confirmacion');
var formularioLider = document.querySelector('#formularioLider');

var errorCedulaAmigo = document.querySelector('#errorCedulaAmigo');
var enlaceCedulaAmigo = document.querySelector('#enlaceCedulaAmigo');

var contenedorValidarCedula = document.querySelector('#validarCedula');
var contenedorDigitarClave = document.querySelector('#digitarClave');
var contenedorTextoCedula = document.querySelector('#contenedorTextoCedula');

var validarCedulaBotonSiguiente = document.querySelector('#validarCedulaBotonSiguiente');

var textoCedula = document.querySelector('#textoCedula');
var textoNombreCompleto = document.querySelector('#textoNombreCompleto');

function validarCedulaLider(cedula) {
  var cedulaValida = true;
  if (cedula.trim().length > 0) {
    campoCedulaLider.classList.remove('error');
  } else {
    campoCedulaLider.classList.add('error');
    cedulaValida = false;
  }
  return cedulaValida;
}

validarCedulaBotonSiguiente.addEventListener(
  'click',
  function() {
    var cedula_lider = campoCedulaLider.value;

    if (!validarCedulaLider(cedula_lider)) {
      return;
    }

    // ecmascript 6
    var datosPeticion = {
      cedula_lider
    };

    $.ajax({
      type: 'POST',
      url: `../../controlador/lider/existe_cedula_amigo_json.php`,
      dataType: 'JSON',
      data: datosPeticion,
      success: function(respuesta) {
        if (!respuesta.existe) {
          errorCedulaAmigo.classList.remove('ocultar');
          enlaceCedulaAmigo.classList.remove('ocultar');
          contenedorValidarCedula.classList.remove('ocultar');
          contenedorDigitarClave.classList.add('ocultar');
        } else { // EXISTE LA CEDULA EN LA TABLA AMIGO

          $.ajax({
            type: 'POST',
            url: `../../controlador/lider/existe_cedula_lider_json.php`,
            dataType: 'JSON',
            data: datosPeticion,
            success: function(respuestaLider) {

              if (respuestaLider.existe) { //OCULTAR confirmar contraseña
                campoClaveConfirmacion.required = false;
                campoClaveConfirmacion.type = 'hidden';
                formularioLider.action = '../../controlador/lider/iniciar_sesion.php';
              } else {
                formularioLider.action = '../../controlador/lider/almacenar_lider.php';
              }

            }
          });

          errorCedulaAmigo.classList.add('ocultar');
          enlaceCedulaAmigo.classList.add('ocultar');
          contenedorValidarCedula.classList.add('ocultar');
          contenedorDigitarClave.classList.remove('ocultar');
          contenedorTextoCedula.classList.remove('ocultar');
          textoCedula.innerText = campoCedulaLider.value;
          textoNombreCompleto.innerText = respuesta.nombreCompleto;
          document.querySelector('#contenedorNombreCompleto').classList.remove('ocultar')
        }
      },
      error: function(err) {
        console.log(err);
      }
    });
  }
)
