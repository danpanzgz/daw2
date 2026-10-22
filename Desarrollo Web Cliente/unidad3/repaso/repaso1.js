// Ejercicios de fechas y cadenas con el objeto Date y String.
function out(text) {
  const output = document.getElementById('out');
  output.textContent += (output.textContent ? '\n' : '') + text;
}

// 1. Muestra la fecha actual en formato dd/mm/yyyy.
function ejemploA() {
        let fecha1 = new Date();
    out(fecha1.getDate() + "/" + (fecha1.getMonth() + 1) + "/" + fecha1.getFullYear());
}

// 2. Recupera el nombre del mes actual a partir del número del mes.
function ejemploB() {
    let meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    let fecha2 = new Date();
    out(fecha2.getDate() + "/" + meses[fecha2.getMonth()] + "/" + fecha2.getFullYear());
}

// 3. Muestra el día de la semana actual en texto.
function ejemploC() {
    let diaSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
    let fecha3 = new Date();
    out(diaSemana[fecha3.getDay()]);
}

// 4. Compara la fecha de nacimiento con la fecha actual para saber si es mayor de edad.
function comprobarEdad() {
    let nombre = prompt("Introduce tu nombre:");
    let [dia, mes, anio] = prompt("Introduce tu fecha (DD-MM-YYYY):").split("-");
    let fechaNac = new Date(anio, mes - 1, dia);

    if (isNaN(fechaNac)) return out("Fecha inválida.");

    let hoy = new Date();
    let edad = hoy.getFullYear() - fechaNac.getFullYear();
    
    let mesActual = hoy.getMonth(), diaActual = hoy.getDate();
    if (mesActual < mes - 1 || (mesActual === mes - 1 && diaActual < dia)){
        edad--;
    } 
    out(nombre + " " + (edad >= 18 ? "eres" : "no eres") + " mayor de edad.");
}