document.querySelector('#guardarDatosPersonales').addEventListener(
  'click',
  function() {
    document.querySelector('#datosPersonales').classList.add('ocultar');
    document.querySelector('#direccion').classList.remove('ocultar');
  }
);

document.querySelector('#direccion').addEventListener(
  'click',
  function() {
    console.log('Se debe mover hacia la siguiente pantalla');
  }
);

console.log('Mostrar y ocultar secciones de datos....');
