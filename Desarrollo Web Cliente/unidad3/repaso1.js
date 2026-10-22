function out(text){ document.getElementById('out').textContent = text }

function ejemploA() {
        let fecha1 = new Date();
    out(fecha1.getDate() + "/" + (fecha1.getMonth() + 1) + "/" + fecha1.getFullYear());
}

function ejemploB() {
    let meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    let fecha2 = new Date();
    out(fecha2.getDate() + "/" + meses[fecha2.getMonth()] + "/" + fecha2.getFullYear());
}

function ejemploC() {
    let diaSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
    let fecha3 = new Date();
    out(diaSemana[fecha3.getDay()]);
}