
var contenedorDatosPersonales = document.querySelector('#datosPersonales');
var contenedorDireccion = document.querySelector('#direccion');var textoPais = document.querySelector('#textoPais');


document.querySelector('#guardarDatosPersonales').addEventListener(
  'click',
  function() {
    contenedorDatosPersonales.classList.add('ocultar');
    contenedorDireccion.classList.remove('ocultar');
  }
);

function anteriorDireccion() {
  contenedorDireccion.classList.add('ocultar');
  contenedorDatosPersonales.classList.remove('ocultar');
}

document.querySelector('#anteriorDireccion').addEventListener(
  'click',
  anteriorDireccion
);


document.querySelector('#siguienteDireccion').addEventListener(
  'click',
  function() {
    console.log('Se debe mover hacia la siguiente pantalla');
  }
);

function obtenerDptos(pais_cod) {
  $.ajax({
    url: `http://prueba.test/controlador/departamento/obtener_departamentos_json.php?pais_cod=${pais_cod}`,
    dataType: 'JSON',
    success: function(departamentos) {
      var contenidoHtml = `<optgroup label="Selecciona un departamento:" >`;
      for (indice in departamentos) {
        contenidoHtml += (
          `<option
            value="${departamentos[indice]['dpto_cod']}"
          >
            ${departamentos[indice]['dpto']}
          </option>`
        );
      }
      contenidoHtml += `</optgroup>`;
      document.querySelector('#selectDptos').innerHTML = contenidoHtml;

      if (pais_cod == 46) {
        document.querySelector('#selectDptos').selectedIndex = 23;
      }
    }
  });
}

document.querySelector('#selectPaises').addEventListener(
  'change',
  function() {
    textoPais.innerHTML = this.options[this.selectedIndex].dataset.textoPais;
    obtenerDptos(this.options[this.selectedIndex].value);
  }
);

(function() {
  obtenerDptos(46);
}());
