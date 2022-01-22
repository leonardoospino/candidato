
var contenedorDatosPersonales = document.querySelector('#datosPersonales');
var contenedorDireccion = document.querySelector('#direccion');
var textoPais = document.querySelector('#textoPais');
var textoComunaLocalidad = document.querySelector('#comuna_loc');
var listaPaises = document.querySelector('#selectPaises');
var listaDepartamentos = document.querySelector('#selectDptos');
var listaMunicipios = document.querySelector('#selectMunicipios');
var listaBarrios = document.querySelector('#selectBarrios');

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
    url: `../../controlador/departamento/obtener_departamentos_json.php?pais_cod=${pais_cod}`,
    dataType: 'JSON',
    success: function(departamentos) {
      var contenidoHtml = `<optgroup label="Selecciona un departamento:" >`;
      for (indice in departamentos) {
        contenidoHtml += (
          `<option
            value="${departamentos[indice]['dpto_cod']}"
            ${ departamentos[indice]['dpto_cod'] == 76 ? 'selected' : '' }
          >
            ${departamentos[indice]['dpto']}
          </option>`
        );
      }
      contenidoHtml += `</optgroup>`;
      listaDepartamentos.innerHTML = contenidoHtml;

      obtenerMunicipios(listaDepartamentos[listaDepartamentos.selectedIndex].value);
    }
  });
}

listaPaises.addEventListener(
  'change',
  function() {
    textoPais.innerHTML = this.options[this.selectedIndex].dataset.textoPais;
    obtenerDptos(this.options[this.selectedIndex].value);
  }
);

function obtenerMunicipios(dpto_cod) {
  $.ajax({
    url: `../../controlador/municipio/obtener_municipios_json.php?dpto_cod=${dpto_cod}`,
    dataType: 'JSON',
    success: function(municipios) {
      var contenidoHtml = `<optgroup label="Selecciona un municipio:" >`;
      for (indice in municipios) {
        contenidoHtml += (
          `<option
            value="${municipios[indice]['municipio_cod']}"
          >
            ${municipios[indice]['municipio']}
          </option>`
        );
      }
      contenidoHtml += `</optgroup>`;
      listaMunicipios.innerHTML = contenidoHtml;

      obtenerBarrios(listaMunicipios[listaMunicipios.selectedIndex].value);
    }
  });
}

listaDepartamentos.addEventListener(
  'change',
  function() {
    obtenerMunicipios(this.options[this.selectedIndex].value);
  }
);

function obtenerBarrios(municipio_cod) {

  $.ajax({
    url: `../../controlador/barrio/obtener_barrios_json.php?municipio_cod=${municipio_cod}`,
    dataType: 'JSON',
    success: function(barrios) {
      var contenidoHtml = `<optgroup label="Selecciona un barrio:" >`;
      for (indice in barrios) {
        contenidoHtml += (
          `<option
            value="${barrios[indice]['barrio_cod']}"
            data-comuna_loc="${ barrios[indice]['nombre_comuna_loc'] }"
          >
            ${ barrios[indice]['barrio'] }
          </option>`
        );
      }
      contenidoHtml += `</optgroup>`;
      listaBarrios.innerHTML = contenidoHtml;

      textoComunaLocalidad.innerHTML = 'Comuna/Localidad: ' + listaBarrios.options[listaBarrios.selectedIndex].dataset.comuna_loc;
    }
  });
}

listaMunicipios.addEventListener(
  'change',
  function() {
    // console.log(this.options[this.selectedIndex].value);
    obtenerBarrios(this.options[this.selectedIndex].value);
  }
);

listaBarrios.addEventListener(
  'change',
  function() {
    textoComunaLocalidad.innerHTML = 'Comuna/Localidad: ' + this.options[this.selectedIndex].dataset.comuna_loc;
  }
);

(function() {
  obtenerDptos(46);
}());
