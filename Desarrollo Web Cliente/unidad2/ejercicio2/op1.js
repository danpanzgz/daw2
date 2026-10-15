const abcedario = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

function out(text) {
  document.getElementById('out').textContent = text;
}

function calcularNota() {
  const NotaProyecto = Number(prompt('Introduce la nota del proyecto (0-10):'));
  const NotaExamen = Number(prompt('Introduce la nota del examen (0-10):'));

  if (Number.isNaN(NotaProyecto) || Number.isNaN(NotaExamen)) {
    return out('Las notas introducidas no son válidas.');
  }

  if (NotaProyecto < 0 || NotaProyecto > 10 || NotaExamen < 0 || NotaExamen > 10) {
    return out('Las notas deben estar entre 0 y 10.');
  }

  const media = (NotaProyecto + NotaExamen) / 2;
  let calificacion = 'Suspenso';

  if (NotaProyecto >= 4.5 && NotaExamen >= 4.5) {
    if (media < 5) {
      calificacion = 'Suspenso';
    } else if (media < 7) {
      calificacion = 'Aprobado';
    } else if (media < 9) {
      calificacion = 'Notable';
    } else {
      calificacion = 'Sobresaliente';
    }
  }

  out(
    'Nota Proyecto: ' + NotaProyecto + '\n' +
    'Nota Examen: ' + NotaExamen + '\n' +
    'Media: ' + media.toFixed(2) + '\n' +
    'Calificación: ' + calificacion
  );
}

function calcularLetraDni(numero) {
  return abcedario[numero % abcedario.length];
}

function validarDni() {
  const numeroIntroducido = prompt('Número de DNI:');
  const letraIntroducida = prompt('Letra de DNI:');

  if (numeroIntroducido === null || letraIntroducida === null) {
    return out('Validación cancelada.');
  }

  const numero = String(numeroIntroducido).trim();
  const letra = String(letraIntroducida).trim();

  if (numero === '' || !/^\d+$/.test(numero) || numero.length !== 8 || Number(numero) < 0 || Number(numero) > 99999999) {
    return out('DNI incorrecto. Longitud del número incorrecta.');
  }

  if (letra === '') {
    return out('DNI incorrecto. Letra no introducida.');
  }

  if (!/^[A-Za-z]$/.test(letra)) {
    return out('DNI incorrecto. Carácter de la letra incorrecto.');
  }

  const letraCorrecta = calcularLetraDni(Number(numero));
  const letraNormalizada = letra.toUpperCase();

  if (letraNormalizada !== letraCorrecta) {
    return out('DNI incorrecto. El número y la letra no coinciden. La letra correcta sería ' + letraCorrecta + '.');
  }

  out('DNI correcto: ' + numero + letraNormalizada);
}

function tablaMultiplicar() {
    let resultado = 'TABLA DE MULTIPLICAR DEL 7\n';
    for (let i = 1; i <= 10; i++) {
        resultado += '7 x ' + i + ' = ' + (7 * i) + '\n';
    }
    return resultado;
}

function tablaSumar() {
    let resultado = 'TABLA DE SUMAR DEL 8\n';
    let i = 1;
    while (i <= 10) {
        resultado += '8 + ' + i + ' = ' + (8 + i) + '\n';
        i++;
    }
    return resultado;
}

function tablaDividir() {
    let resultado = 'TABLA DE DIVIDIR DEL 9\n';
    let i = 1;
    do {
        resultado += '9 / ' + i + ' = ' + (9 / i) + '\n';
        i++;
    } while (i <= 10);
    return resultado;
}

function operacionesBits() {
    // 125 / 8  => 8 es 2^3, por lo tanto se desplaza 3 bits a la derecha (125 >> 3)
    const res1 = 125 >> 3;

    // 40 x 4   => 4 es 2^2, por lo tanto se desplaza 2 bits a la izquierda (40 << 2)
    const res2 = 40 << 2;

    // 25 / 2   => 2 es 2^1, por lo tanto se desplaza 1 bit a la derecha (25 >> 1)
    const res3 = 25 >> 1;

    // 10 x 16  => 16 es 2^4, por lo tanto se desplaza 4 bits a la izquierda (10 << 4)
    const res4 = 10 << 4;

    return {
        res1,
        res2,
        res3,
        res4
    };
}

function mostrarOperaciones() {
    const bits = operacionesBits();
    const salida =
        'Bucle for:\n' + tablaMultiplicar() + '\n' +
        'Bucle while:\n' + tablaSumar() + '\n' +
        'Bucle do while:\n' + tablaDividir() + '\n' +
        'Operaciones con bits:\n' +
        '125 >> 3 = ' + bits.res1 + '\n' +
        '40 << 2 = ' + bits.res2 + '\n' +
        '25 >> 1 = ' + bits.res3 + '\n' +
        '10 << 4 = ' + bits.res4;

    out(salida);
}