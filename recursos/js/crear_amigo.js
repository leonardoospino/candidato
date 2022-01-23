
var contenedorDatosPersonales = document.querySelector('#datosPersonales');
var contenedorDireccion = document.querySelector('#datosDireccion');
var contenedorPuestoVotacion = document.querySelector('#datosPuestoVotacion');

var textoPais = document.querySelector('#textoPais');
var textoDpto = document.querySelector('#textoDpto');
var textoMunicipio = document.querySelector('#textoMunicipio');
var textoComunaLocalidad = document.querySelector('#comuna_loc');
var textoSector = document.querySelector('#textoSector');
var textoDireccionPuestoVotacion = document.querySelector('#textoDireccionPuestoVotacion');
var textoMesa = document.querySelector('#textoMesa');

var listaPaises = document.querySelector('#selectPaises');
var listaDepartamentos = document.querySelector('#selectDptos');
var listaMunicipios = document.querySelector('#selectMunicipios');
var listaBarrios = document.querySelector('#selectBarrios');
var listaPuestosVotacion = document.querySelector('#selectPuestosVotacion');

var barrioOpcional = document.querySelector('#barrio_opcional');

document.querySelector('#guardarDatosPersonales').addEventListener(
  'click',
  function() {
    contenedorDatosPersonales.classList.add('ocultar');
    contenedorDireccion.classList.remove('ocultar');
    textoPais.classList.remove('ocultar');
  }
);

function anteriorDireccion() {
  contenedorDireccion.classList.add('ocultar');
  contenedorDatosPersonales.classList.remove('ocultar');
  textoPais.classList.add('ocultar');
}

document.querySelector('#anteriorDireccion').addEventListener(
  'click',
  anteriorDireccion
);


document.querySelector('#siguienteDireccion').addEventListener(
  'click',
  function() {
    contenedorDireccion.classList.add('ocultar');
    contenedorPuestoVotacion.classList.remove('ocultar');
    textoDpto.classList.remove('ocultar');
    textoMunicipio.classList.remove('ocultar');
  }
);

document.querySelector('#anteriorPuestoVotacion').addEventListener(
  'click',
  function() {
    contenedorDireccion.classList.remove('ocultar');
    contenedorPuestoVotacion.classList.add('ocultar');
    textoDpto.classList.add('ocultar');
    textoMunicipio.classList.add('ocultar');
  }
)

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

      textoDpto.innerHTML =  ', ' + listaDepartamentos[listaDepartamentos.selectedIndex].innerText;
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
          >${municipios[indice]['municipio']}</option>`
        );
      }
      contenidoHtml += `</optgroup>`;
      listaMunicipios.innerHTML = contenidoHtml;

      obtenerBarrios(listaMunicipios[listaMunicipios.selectedIndex].value);
      obtenerPuestosVotacion(listaMunicipios[listaMunicipios.selectedIndex].value);

      textoMunicipio.innerText = listaMunicipios[listaMunicipios.selectedIndex].innerText;
    }
  });
}

listaDepartamentos.addEventListener(
  'change',
  function() {
    obtenerMunicipios(this.options[this.selectedIndex].value);
    textoDpto.innerHTML = ', ' + listaDepartamentos[listaDepartamentos.selectedIndex].innerText;
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
          >${ barrios[indice]['barrio'] }</option>`
        );
      }
      contenidoHtml += `</optgroup>`;
      listaBarrios.innerHTML = contenidoHtml;

      textoComunaLocalidad.innerHTML = 'Comuna/Localidad: ' + listaBarrios.options[listaBarrios.selectedIndex].dataset.comuna_loc;

      alternarVisibilidadCampoBarrio();
    }
  });
}

function obtenerPuestosVotacion(municipio_cod) {
 console.log(municipio_cod);
  $.ajax({
    url: `../../controlador/puestoVotacion/obtener_puestos_votacion_json.php?municipio_cod=${municipio_cod}`,
    dataType: 'JSON',
    success: function(puestosVotacion) {
      var contenidoHtml = `<optgroup label="Selecciona un puesto de votación:" >`;
      for (indice in puestosVotacion) {
        contenidoHtml += (
          `<option
            value="${puestosVotacion[indice]['puesto_cod']}"
            data-mesas-puesto="${puestosVotacion[indice]['mesas_puesto']}"
            data-sector="${puestosVotacion[indice]['sector']}"
            data-direccion-puesto-votacion="${puestosVotacion[indice]['direccion_puesto']}"
          >${ puestosVotacion[indice]['puesto_de_votacion'] }</option>`
        );
      }
      contenidoHtml += `</optgroup>`;
      listaPuestosVotacion.innerHTML = contenidoHtml;
      actualizarSectorYDireccionPuestoVotacion();
    }
  });
}

function actualizarSectorYDireccionPuestoVotacion() {
  textoSector.innerText = listaPuestosVotacion[listaPuestosVotacion.selectedIndex].dataset.sector;

  textoDireccionPuestoVotacion.innerText = listaPuestosVotacion[listaPuestosVotacion.selectedIndex].dataset.direccionPuestoVotacion;

  textoMesa.innerText = listaPuestosVotacion[listaPuestosVotacion.selectedIndex].dataset.mesasPuesto;

}

listaPuestosVotacion.addEventListener(
  'change',
  function() {
    actualizarSectorYDireccionPuestoVotacion();
  }
);

function alternarVisibilidadCampoBarrio() {
  if (listaBarrios[listaBarrios.selectedIndex].innerText == 'Barrio no encontrado') {
    barrioOpcional.classList.remove('ocultar');
  } else {
    barrioOpcional.classList.add('ocultar');
  }
}

listaMunicipios.addEventListener(
  'change',
  function() {
    // console.log(this.options[this.selectedIndex].value);
    obtenerBarrios(this.options[this.selectedIndex].value);
    textoMunicipio.innerText = listaMunicipios[listaMunicipios.selectedIndex].innerText;
  }
);

listaBarrios.addEventListener(
  'change',
  function() {
    textoComunaLocalidad.innerHTML = 'Comuna/Localidad: ' + this.options[this.selectedIndex].dataset.comuna_loc;
    alternarVisibilidadCampoBarrio();
  }
);

(function() {
  obtenerDptos(46);
}());
