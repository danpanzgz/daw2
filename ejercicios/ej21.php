<?php
require __DIR__ . '/comun.php';
// Se fija el número una sola vez para que todas las filas pertenezcan a la misma tabla.
$numero = random_int(1, 10);
iniciarPagina('Ejercicio 21: tabla de multiplicar', 'Se elige un número al azar y el bucle calcula sus productos del 1 al 10.');
?>
<!-- Cada vuelta calcula un múltiplo y añade una fila; el rango incluye del 1 al 10. -->
<h2>Tabla del <?=$numero?></h2>
<table><tr><th>Operación</th><th>Resultado</th></tr>
<?php for ($i = 1; $i <= 10; $i++): ?>
    <tr><td><?=$numero?> × <?=$i?></td><td><?=$numero * $i?></td></tr>
<?php endfor; ?>
</table>
<?php finalizarPagina(); ?>
