// Genera un tablero de ajedrez con piezas en la posición inicial.
let varTablero; // variable que apunta al elemento HTML del tablero
let piezas = ["♖", "♘", "♗", "♕", "♔", "♗", "♘", "♖"]; // piezas de la primera fila
let peon = "♙"; // peón usado en la segunda y séptima fila

// Se ejecuta al cargar la página y crea la estructura del tablero.
onload = function tablero() {
  // Guarda la referencia a la tabla vacía del documento HTML.
  varTablero = document.getElementById("tablero");

  // Genera 8 filas para representar cada línea del tablero.
  for (let filaActual = 0; filaActual < 8; filaActual++) {
    // Inserta una nueva fila dentro de la tabla.
    let fila = varTablero.insertRow(filaActual);

    // Crea 8 celdas por fila para completar el tablero.
    for (let columnaActual = 0; columnaActual < 8; columnaActual++) {
      // Inserta cada celda en la fila actual.
      let celda = fila.insertCell(columnaActual);

      switch (filaActual) {
        case 0:
          celda.innerHTML = "<span class='negras'>" + piezas[columnaActual] + "</span>";
          break;
        case 1:
          celda.innerHTML = "<span class='negras'>" + peon + "</span>";
          break;
        case 6:
          celda.innerHTML = "<span class='blancas'>" + peon + "</span>";
          break;
        case 7:
          celda.innerHTML = "<span class='blancas'>" + piezas[columnaActual] + "</span>";
          break;
      }
    }
  }
};

