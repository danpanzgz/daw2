// Ejercicios con cadenas, operadores bit a bit y valores especiales de Number.
function out(text){ document.getElementById('out').textContent = text }

// 1. Muestra texto con comillas y saltos de línea.
function o1(){
  const mensaje = 'Hola a todo el mundo\nQue facil es introducir comillas simples \'\' y dobles \"\"';
  out(mensaje);
}

// 2. Desplaza bits a la derecha para dividir entre potencias de 2.
function o2(){
  const dec = parseInt(prompt('Introduce decimal (ej. 40):'),10);
  const shift = parseInt(prompt('Desplazamiento a la derecha (ej. 4):'),10);
  if(isNaN(dec)||isNaN(shift)) return out('Entrada no valida');
  out(dec + ' >> ' + shift + ' = ' + (dec >> shift));
}

// 3. Desplaza bits a la izquierda para multiplicar por potencias de 2.
function o3(){
  const dec = parseInt(prompt('Introduce decimal (ej. 26):'),10);    
  const shift = parseInt(prompt('Desplazamiento a la izquierda (ej. 2):'),10);
  if(isNaN(dec)||isNaN(shift)) return out('Entrada no valida');
  out(dec + ' << ' + shift + ' = ' + (dec << shift));
}

// 4. Muestra los límites y valores especiales del tipo Number.
function o4(){
  out('Numero maximo = ' + Number.MAX_VALUE + '\n Numero minimo = ' + Number.MIN_VALUE + '\nInfinito: ' + Number.POSITIVE_INFINITY);
}

// 5. Comprueba si una cadena está formada solo por mayúsculas o minúsculas.
function o5(){
  const ovni = 'OBJETO VOLADOR NO IDENTIFICADO';
  const info = 'En un lugar de la mancha';
  function check(str){
    const up = str === str.toUpperCase();
    const low = str === str.toLowerCase();
    return str + ' -> mayúsculas: ' + up + ', minúsculas: ' + low;
  }
  let res = check(ovni) + '\n' + check(info) + '\n';
  const user = prompt('Introduce una cadena para evaluar (opcional):');
  if(user) res += '\n' + check(user);
  out(res);
}
