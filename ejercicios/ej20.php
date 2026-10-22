<?php
require __DIR__ . '/comun.php';
// El intervalo 1-15 permite probar tanto los meses reales como el caso default de un número incorrecto.
$mes = random_int(1, 15);
// switch agrupa toda la relación número-mes-días en un solo lugar y default cubre los valores fuera del calendario.
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
iniciarPagina('Ejercicio 20: mes y número de días', 'switch asocia el número aleatorio con el nombre del mes y sus días. Se elige hasta 15 para comprobar el caso por defecto.');
?>
<p>Mes generado: <?=$mes?>.</p>
<p><?=escapar($nombre)?>: <?=escapar($dias)?> días.</p>
<?php finalizarPagina(); ?>
