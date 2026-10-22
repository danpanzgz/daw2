// Ejercicios de temporizadores, strings, arrays y lógica de control.
function out(text) {
  const output = document.getElementById('out');
  output.textContent += (output.textContent ? '\n' : '') + text;
}

// Activa un reloj que actualiza la hora cada milisegundo.
function iniciarReloj() {
  reloj = setInterval(() => {
    const d = new Date();
    document.getElementById('out').textContent = d.toLocaleTimeString();
  }, 1);
}

// Muestra propiedades y métodos básicos del objeto String.
function objetoString() {
  document.getElementById('out').textContent = '';

  let texto = new String("Numero de letras de esta cadena");
  out("Numero de letras de la cadena de texto: " + texto.length);
  out("el carácter del índice en la posición 4: " + texto.charAt(4));
  out("La posición de la primera letra “s”: " + texto.indexOf("r"));
  out("La posición de la ultima letra “e”: " + texto.lastIndexOf("e"));
  out("Cambiar letras x caracteres: " + texto.replace("letras", "caracteres"));
}

// Genera una combinación aleatoria de números y estrellas para Euromillones.
function mostrarPuestaEuromillones() {
  document.getElementById('out').textContent = '';

  const apuesta = puestaEuromillones();
  out("Números: " + apuesta.numeros.join(' - '));
  out("Estrellas: " + apuesta.estrellas.join(' - '));
}

function pantallaAnterior() {
  window.history.back();
}

// Abre una nueva ventana con Google como ejemplo de uso de popup.
function abrePopup() {
  window.open("https://www.google.com", "popup", "width=center,height=center");

}

// Muestra los múltiplos de 3 comprendidos entre 1 y 500.
function bucleMultipleTres() {
  for (let i = 1; i <= 500; i++) {
    if (i % 3 === 0) {
      out(i);
    }
  }
}

// Pide 10 números para identificar el máximo y el mínimo.
function mostrarMayorMenor() {
  let mayor = 0;
  let menor = 0;
  for (let i = 1; i <= 10; i++) {
    let numero = parseInt(prompt("Introduce un número:"));
    if (numero > mayor) {
      mayor = numero;
    }
    if (numero < menor || i === 1) {
      menor = numero;
    }
  }
  out("El número mayor es: " + mayor);
  out("El número menor es: " + menor);
}

// Clasifica una talla según la categoría de tamaño indicada.
function identificarTalla() {
  let talla = prompt("Introduce tu talla (XXL, XL,L,M,S, XS, XXS):").toUpperCase();
  switch (talla) {
    case "XXL":
    case "XL":
    case "L":
      out("Grande");
      break;
    case "M":
      out("Mediana");
      break;
    case "S":
    case "XS":
    case "XXS":
      out("Pequeña");
      break;
    default:
      out("Talla no reconocida");
      break;
  }
}

// Calcula la longitud de una circunferencia a partir del radio.
function calcularLongitudCircumferencia() {
  let radio = parseFloat(prompt("Introduce el radio de la circunferencia:"));
  let longitud = 2 * Math.PI * radio;
  out("La longitud de la circunferencia es: " + longitud.toFixed(2));
}

// Genera un conjunto aleatorio de 5 números y 2 estrellas.
function puestaEuromillones() {
  let numeros = [];
  while (numeros.length < 5) {
    let numero = Math.ceil(Math.random() * 50);
    if (!numeros.includes(numero)) {
      numeros.push(numero);
    }
  }

  let estrellas = [];
  while (estrellas.length < 2) {
    let estrella = Math.ceil(Math.random() * 10);
      estrellas.push(estrella);
  }

  out(numeros.join(' - ') + ' | ' + estrellas.join(' - '));
}

// Crea una matriz en pantalla con filas y columnas indicadas por el usuario.
function tablaMatriz() {
  let [filas, columnas] = prompt("Introduce el tamaño de la matriz (ej: 3x3):").split('x');
  document.getElementById('out').textContent = '';

  for (let i = 1; i <= filas; i++) {
    let linea = '';
    for (let j = 1; j <= columnas; j++) {
      linea += i + '.' + j + '\t';
    }
    out(linea.trim());
  }
}

// Limpia la salida y detiene el reloj si estaba activo.
function limpiar() {
  document.getElementById('out').textContent = '';
  clearInterval(reloj);
}