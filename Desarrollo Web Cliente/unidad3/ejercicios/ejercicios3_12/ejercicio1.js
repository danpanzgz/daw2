// El objeto Storage nos permite guardar datos de manera local en el navegador.
function clicador() {
  if (typeof Storage !== 'undefined') {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount) + 1;
    } else {
      localStorage.clickcount = 1;
    }

    document.getElementById('result').textContent =
      'Has hecho click ' + localStorage.clickcount + ' veces desde la primera vez.';
  } else {
    document.getElementById('result').textContent =
      'Tu navegador no soporta almacenamiento web.';
  }
}

// localStorage.setItem('Nombre', 'Alvaro Enrique'); // Guardar datos
// localStorage.getItem('Nombre'); // Recuperar datos
// localStorage.removeItem('Nombre'); // Eliminar elementos
// localStorage.clear(); // Limpiar todo el storage