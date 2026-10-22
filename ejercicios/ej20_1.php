<?php
require __DIR__ . '/comun.php';
$dia = random_int(1, 33);
$mes = random_int(1, 14);
$anio = random_int(1, 3000);
// Se generan algunos valores fuera de rango a propósito; checkdate valida mes/día/año conjuntamente y contempla bisiestos.
// El orden de sus argumentos es mes, día, año, aunque la fecha se suele escribir día/mes/año.
$valida = checkdate($mes, $dia, $anio);
iniciarPagina('Ejercicio 20.1: validar fechas', 'checkdate() devuelve true si el mes, el día y el año forman una fecha válida. También contempla los años bisiestos.');
?>
<p>Fecha generada: <?=$dia?>/<?=$mes?>/<?=$anio?>.</p>
<p>La fecha es <?=$valida ? 'válida' : 'no válida'?>.</p>
<?php finalizarPagina(); ?>
