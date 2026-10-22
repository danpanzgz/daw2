<?php
require __DIR__ . '/comun.php';
// Se generan algunos números fuera del rango de meses para que también se ejecute el caso default.
$mes = random_int(1, 15);
// Cada case asigna nombre y días; break evita que la ejecución continúe dentro del siguiente mes.
switch ($mes) {
    case 1: $nombre = 'Enero'; $dias = 31; break;
    case 2: $nombre = 'Febrero'; $dias = '28 o 29'; break;
    case 3: $nombre = 'Marzo'; $dias = 31; break;
    case 4: $nombre = 'Abril'; $dias = 30; break;
    case 5: $nombre = 'Mayo'; $dias = 31; break;
    case 6: $nombre = 'Junio'; $dias = 30; break;
    case 7: $nombre = 'Julio'; $dias = 31; break;
    case 8: $nombre = 'Agosto'; $dias = 31; break;
    case 9: $nombre = 'Septiembre'; $dias = 30; break;
    case 10: $nombre = 'Octubre'; $dias = 31; break;
    case 11: $nombre = 'Noviembre'; $dias = 30; break;
    case 12: $nombre = 'Diciembre'; $dias = 31; break;
    default: $nombre = 'Mes incorrecto'; $dias = 'desconocido';
}
iniciarPagina('Ejercicio 16: selección con switch', 'switch elige una rama según el número aleatorio. Los meses son de 28 o 29, 30 o 31 días.');
?>
<p>Mes generado: <?=$mes?>.</p>
<p><?=escapar($nombre)?>: <?=escapar($dias)?> días.</p>
<?php finalizarPagina(); ?>
