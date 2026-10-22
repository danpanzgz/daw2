<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 7: conversiones del 1 al 100', 'Cada función de conversión calcula una representación del número. printf() permite formatear varias representaciones en una sola llamada.');
?>
<!-- La tabla permite comparar cada número decimal con sus conversiones en una misma fila. -->
<table><tr><th>Decimal</th><th>Binario</th><th>Hexadecimal</th><th>Octal</th></tr>
<!-- Se empieza en 1 y se incluye 100, tal como pide el ejercicio. -->
<?php for ($i = 1; $i <= 100; $i++): ?>
    <tr><td><?=$i?></td><td><?=decbin($i)?></td><td><?=dechex($i)?></td><td><?=decoct($i)?></td></tr>
<?php endfor; ?>
</table>
<?php finalizarPagina(); ?>
