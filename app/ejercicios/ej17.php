<?php
require __DIR__ . '/comun.php';
$mes = random_int(1, 12);
// Se mantienen casos separados porque cada mes necesita un nombre propio; los días se guardan para mostrarlos al final.
switch ($mes) {
    case 1: $nombre = 'Enero'; $dias = 31; break;
    case 3: $nombre = 'Marzo'; $dias = 31; break;
    case 5: $nombre = 'Mayo'; $dias = 31; break;
    case 7: $nombre = 'Julio'; $dias = 31; break;
    case 8: $nombre = 'Agosto'; $dias = 31; break;
    case 10: $nombre = 'Octubre'; $dias = 31; break;
    case 12: $nombre = 'Diciembre'; $dias = 31; break;
    case 4: $nombre = 'Abril'; $dias = 30; break;
    case 6: $nombre = 'Junio'; $dias = 30; break;
    case 9: $nombre = 'Septiembre'; $dias = 30; break;
    case 11: $nombre = 'Noviembre'; $dias = 30; break;
    case 2: $nombre = 'Febrero'; $dias = '28 o 29'; break;
}
// El rango 1-12 garantiza que $nombre y $dias quedan asignados en algún case.
iniciarPagina('Ejercicio 17: nombre y días de un mes', 'Varios case comparten el mismo número de días. Febrero se trata aparte porque depende de si el año es bisiesto.');
?>
<p>Mes: <?=$nombre?> (número <?=$mes?>). Días: <?=escapar($dias)?>.</p>
<?php finalizarPagina(); ?>
