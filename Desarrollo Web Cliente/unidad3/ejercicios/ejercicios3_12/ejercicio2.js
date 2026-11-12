function clickCounter() {
  if (typeof Storage !== 'undefined') {
    if (sessionStorage.clickcount) {
      sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
    } else {
      sessionStorage.clickcount = 1;
    }

    document.getElementById('result').textContent =
      'Has hecho click ' + sessionStorage.clickcount + ' veces en esta sesión.';
  } else {
    document.getElementById('result').textContent =
      'Lo sentimos, tu navegador no soporta el objeto Storage...';
  }
}