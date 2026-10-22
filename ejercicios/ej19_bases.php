<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 19: sistemas numéricos', 'Las funciones decbin(), decoct() y dechex() convierten cada entero decimal a las bases 2, 8 y 16.');
?>
<!-- El decimal se usa como valor de referencia y las otras columnas muestran sus representaciones convertidas. -->
<table><tr><th>Decimal</th><th>Binario</th><th>Octal</th><th>Hexadecimal</th></tr>
<!-- Se incluye el cero además del 1-50, según el intervalo explícito del enunciado. -->
<?php for ($numero = 0; $numero <= 50; $numero++): ?>
    <tr><td><?=$numero?></td><td><?=decbin($numero)?></td><td><?=decoct($numero)?></td><td><?=dechex($numero)?></td></tr>
<?php endfor; ?>
</table>
<?php finalizarPagina(); ?>
