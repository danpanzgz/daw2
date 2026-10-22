let varTablero; //VARIABLE A USAR LUEGO
let piezas = ["♖", "♘", "♗", "♕", "♔", "♗", "♘", "♖"]; // ARRAY CON LAS PIEZAS ORDENADAS
let peon = "♙"; // VARIBALE DE PEONES

/* CREAMOS EL TABLERO */
onload = function tablero() {
  /* REFERIMOS LA TABLA VACÍA EN UNA VARIABLE */
  varTablero = document.getElementById("tablero");

  /* CREA EN LA TABLA 8 FILAS CON DO WHILE */
  for (let filaActual = 0; filaActual < 8; filaActual++) {
    /* INSERTA CADA FILA DEL TABLERO EN UNA NUEVA VARIABLE FILA: .insertRow(0), .insertRow(1)....*/
    let fila = varTablero.insertRow(filaActual);

    /* CREA EN CADA FILA 8 CELDAS. EMPLEA FOR  */
    for (let columnaActual = 0; columnaActual < 8; columnaActual++) {
      /* INSERTA TODAS LAS CELDAS EN SU CORRESPONDIENTES 8 FILAS (a modo de columnas) .insertCell(0), .insertCell(0)*/
      let celda = fila.insertCell(columnaActual);

      /* AHORA QUE TENEMOS EL TABLERO CONSTRUIDO DE 8X8; CON INNERHTML Y EMPLEADO SWITCH-CASE RELLENA LAS FILAS 0 Y 7 CON LAS PIEZAS CORRESPONDIENTES Y LAS FILAS 1 Y 6 CON LOS PEONES*/
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

