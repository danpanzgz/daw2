function out(text) { document.getElementById('out').textContent = text }

function ej1() {
  const firstName = prompt('Nombre:');
  const lastName = prompt('Primer apellido:');
  const fullName = (firstName || '') + ' ' + (lastName || '');
  const age = Number(prompt('Edad:'));
  if (Number.isNaN(age)) return out('Edad no válida');
  const birthYear = new Date().getFullYear() - age;
  out('Nombre completo: ' + fullName + '\nAño de nacimiento: ' + birthYear);
}

function ej2() {
  const value = Number(prompt('Introduce x para calcular e^x:'));
  if (Number.isNaN(value)) return out('Número no válido');
  out('e^' + value + ' = ' + Math.exp(value));
}

function ej3() {
  const num = Number(prompt('Introduce un número:'));
  if (Number.isNaN(num)) return out('Número no válido');
  out(num + ' es ' + (num % 2 === 0 ? 'par' : 'impar'));
}

function ej4() {
  const number = Number(prompt('Número principal:'));
  const divisor = Number(prompt('¿Múltiplo de?:'));
  if (Number.isNaN(number) || Number.isNaN(divisor)) return out('Número no válido');
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
  if (Number.isNaN(num1) || Number.isNaN(num2)) return out('Número no válido');
  const larger = num1 === num2 ? 'iguales' : (num1 > num2 ? num1 : num2);
  const describe = v => (v > 0 ? v + ' positivo' : v + ' no positivo');
  out('Mayor: ' + larger + '\n' + describe(num1) + ', ' + describe(num2));
}

function ej7() {
  const list = Array.from({length: 30}, (_, i) => i + 1);
  out(list.join(', '));
}

function ej8() {
  const number = Number(prompt('Número para factorial:'));
  if (Number.isNaN(number) || number < 0) return out('Número no válido');
  let factorial = 1;
  for (let i = 2; i <= number; i++) factorial *= i;
  out('Factorial de ' + number + ' = ' + factorial);
}

function ej9() {
  const cityName = (prompt('Introduce una ciudad (Zaragoza, Barcelona, Madrid):') || '').trim().toLowerCase();
  let message = 'Opción no reconocida';
  switch (cityName) {
    case 'zaragoza': message = 'Has elegido Zaragoza - mensaje propio'; break;
    case 'barcelona': message = 'Has elegido Barcelona - mensaje propio'; break;
    case 'madrid': message = 'Has elegido Madrid - mensaje propio'; break;
  }
  out(message);
}
