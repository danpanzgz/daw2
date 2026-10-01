function out(text){ document.getElementById('out').textContent = text }

function o1(){
  const mensaje = 'Hola a todo el mundo\nQue facil es introducir comillas simples \'\' y dobles \"\"';
  out(mensaje);
}

function o2(){
  const dec = parseInt(prompt('Introduce decimal (ej. 40):'),10);
  const shift = parseInt(prompt('Desplazamiento a la derecha (ej. 4):'),10);
  if(isNaN(dec)||isNaN(shift)) return out('Entrada no valida');
  out(dec + ' >> ' + shift + ' = ' + (dec >> shift));
}

function o3(){
  const dec = parseInt(prompt('Introduce decimal (ej. 26):'),10);
  const shift = parseInt(prompt('Desplazamiento a la izquierda (ej. 2):'),10);
  if(isNaN(dec)||isNaN(shift)) return out('Entrada no valida');
  out(dec + ' << ' + shift + ' = ' + (dec << shift));
}

function o4(){
  out('Numero maximo = ' + Number.MAX_VALUE + '\n Numero minimo = ' + Number.MIN_VALUE + '\nInfinito: ' + Number.POSITIVE_INFINITY);
}

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
