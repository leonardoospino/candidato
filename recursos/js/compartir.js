var enlace = (
  document
  .querySelector('.jsEnlace')
  .value
);

var dComparteEnlace = (
  document
  .querySelector('.jsComparteEnlace')
);

function compartirEnlace() {
  alert('El enlace se compartira');
}

(
  dComparteEnlace
  .addEventListener(
    'click',
    compartirEnlace
  )
);
