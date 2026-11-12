const notes = [
  {
    title: '3.10.2. Estructuras de repetición',
    text: 'Estas estructuras de control se llaman bucles y se emplean para repetir una instrucción varias veces, igual que en otros lenguajes de programación.'
  },
  {
    title: 'a) for',
    code: `for (let a = 0; a < 10; a++) {
  console.log(a);
  if (a === 7) {
    break;
  }
}

let a = 0;
for (;;) {
  console.log(a);
  if (a >= 7) {
    break;
  }
  a++;
}`
  },
  {
    title: 'b) while y do...while',
    text: 'Se ejecuta mientras se cumple la condición. Do...while comprueba la condición al final, por lo que la instrucción se ejecuta al menos una vez.',
    code: `let a = 0;
while (a < 5) {
  alert(a);
  a++;
}
alert('Sale de la condición cuando a vale: ' + a);

do {
  alert('Estoy dentro del do...while');
} while (a !== 5);`
  },
  {
    title: 'c) for...in',
    text: 'Se recorre el índice de un array o las propiedades de un objeto.',
    code: `const alumno = ['Alberto', 'Lopez', 25];
for (let i in alumno) {
  console.log(i);
}

for (let i in alumno) {
  console.log(alumno[i]);
}

const persona = { nombre: 'Ana', edad: 25, pais: 'Chile' };
for (const clave in persona) {
  console.log(clave, ':', persona[clave]);
}`
  },
  {
    title: 'd) forEach',
    text: 'Es un método útil para arrays, pero no permite interrumpir el recorrido con break o return.',
    code: `const numeros = [10, 20, 30];
numeros.forEach((valor, indice) => {
  console.log(\`Índice \${indice}: \${valor}\`);
});`
  },
  {
    title: 'e) for...of',
    text: 'Se recorre directamente sobre los elementos del array, string, mapa o conjunto. Es más claro que for...in para arrays.',
    code: `const alumno = ['Juan', 'Perez', 25];
for (const valor of alumno) {
  console.log(valor);
}

for (const letra of 'Hola') {
  console.log(letra);
}

function buscarValor(arr, objetivo) {
  for (const valor of arr) {
    if (valor === objetivo) {
      return \`Encontrado: \${valor}\`;
    }
  }
  return 'No encontrado';
}`
  }
];

const notesRoot = document.getElementById('notes');

function escapeHtml(text) {
  return text
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#039;');
}

notesRoot.innerHTML = notes
  .map(
    (note) => `
      <article class="note">
        <h2>${note.title}</h2>
        ${note.text ? `<p>${note.text}</p>` : ''}
        ${note.code ? `<pre><code>${escapeHtml(note.code)}</code></pre>` : ''}
      </article>
    `
  )
  .join('');
