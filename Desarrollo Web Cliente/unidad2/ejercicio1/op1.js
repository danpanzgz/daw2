function out(text) { document.getElementById('out').textContent = text }

function ej1() {
  const nombre = prompt('Nombre:');
  const apellido = prompt('Primer apellido:');
  const nombreCompleto = (nombre || '') + ' ' + (apellido || '');
  const age = Number(prompt('Edad:'));
  if (Number.isNaN(age)) return out('Edad no valida');
  const año = new Date().getFullYear() - age;
  out('Nombre completo: ' + nombreCompleto + '\nAño de nacimiento: ' + año);
}

function ej2() {
  const value = Number(prompt('Introduce x para calcular e^x:'));
  if (Number.isNaN(value)) return out('numero no valido');
  out('e^' + value + ' = ' + Math.exp(value));
}

function ej3() {
  const num = Number(prompt('Introduce un numero:'));
  if (Number.isNaN(num)) return out('numero no valido');
  out(num + ' es ' + (num % 2 === 0 ? 'par' : 'impar'));
}

function ej4() {
  const num = Number(prompt('numero principal:'));
  const divisor = Number(prompt('multiplo de: '));
  if (Number.isNaN(num) || Number.isNaN(divisor)) return out('numero no valido');
  const isMultiple = num % divisor === 0;
  out(num + ' ' + (isMultiple ? 'es' : 'no es') + ' multiplo de ' + divisor);
}

function ej5() {
  const meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
  out(meses.join('\n'));
}

function ej6() {
  const num1 = Number(prompt('Primer entero:'));
  const num2 = Number(prompt('Segundo entero:'));
  if (Number.isNaN(num1) || Number.isNaN(num2)) return out('numero no valido');
  const larger = num1 === num2 ? 'iguales' : Math.max(num1, num2);
  const comparar = val => (val > 0 ? val + ' positivo' : val + ' negativo');
  out('Mayor: ' + larger + '\n' + comparar(num1) + ', ' + comparar(num2));
}

function ej7() {
  let numeros = [];
  
  for (let i = 1; i <= 30; i++) {
    numeros.push(i);
  }
  
  out(numeros.join(', '));
}

function ej8() {
  const number = Number(prompt('numero para factorial:'));
  if (Number.isNaN(number) || number < 0) return out('numero no valido');
  let factorial = 1;
  for (let i = 2; i <= number; i++) factorial *= i;
  out('Factorial de ' + number + ' = ' + factorial);
}

function ej9() {
  const cityName = (prompt('Introduce una ciudad (Zaragoza, Barcelona, Madrid):') || '').trim().toLowerCase();
  let message = 'Ciudad no reconocida';

  switch (cityName) {
    case 'zaragoza':
      message = 'Has elegido Zaragoza';
      break;
    case 'barcelona':
      message = 'Has elegido Barcelona';
      break;
    case 'madrid':
      message = 'Has elegido Madrid';
      break;
  }

  out(message);
}
