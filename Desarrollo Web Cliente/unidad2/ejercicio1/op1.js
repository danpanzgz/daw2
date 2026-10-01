function out(text) { document.getElementById('out').textContent = text }

function ej1() {
  const firstName = prompt('Nombre:');
  const lastName = prompt('Primer apellido:');
  const fullName = (firstName || '') + ' ' + (lastName || '');
  const age = Number(prompt('Edad:'));
  if (Number.isNaN(age)) return out('Edad no valida');
  const birthYear = new Date().getFullYear() - age;
  out('Nombre completo: ' + fullName + '\nAño de nacimiento: ' + birthYear);
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
  const number = Number(prompt('numero principal:'));
  const divisor = Number(prompt('¿Múltiplo de?:'));
  if (Number.isNaN(number) || Number.isNaN(divisor)) return out('numero no valido');
  const isMultiple = number % divisor === 0;
  out(number + ' ' + (isMultiple ? 'es' : 'no es') + ' múltiplo de ' + divisor);
}

function ej5() {
  const months = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
  out(months.join('\n'));
}

function ej6() {
  const num1 = Number(prompt('Primer entero:'));
  const num2 = Number(prompt('Segundo entero:'));
  if (Number.isNaN(num1) || Number.isNaN(num2)) return out('numero no valido');
  const larger = num1 === num2 ? 'iguales' : (num1 > num2 ? num1 : num2);
  const describe = v => (v > 0 ? v + ' positivo' : v + ' no positivo');
  out('Mayor: ' + larger + '\n' + describe(num1) + ', ' + describe(num2));
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
