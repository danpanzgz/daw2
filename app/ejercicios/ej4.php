<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 4: tipos de variables', 'gettype() devuelve el tipo de dato que PHP asigna a cada valor.');
// Se preparan los cinco tipos básicos como variables independientes, sin agruparlos en una colección.
$entero = 10;
$flotante = 3.14;
$cadena = 'Hola';
$booleano = true;
$nulo = null;
?>
<table><tr><th>Valor</th><th>Tipo</th></tr>
<!-- Cada fila muestra explícitamente el valor y el tipo para relacionar cada variable con gettype(). -->
<tr><td><?=$entero?></td><td><?=gettype($entero)?></td></tr>
<tr><td><?=$flotante?></td><td><?=gettype($flotante)?></td></tr>
<tr><td><?=escapar($cadena)?></td><td><?=gettype($cadena)?></td></tr>
<tr><td><?=var_export($booleano, true)?></td><td><?=gettype($booleano)?></td></tr>
<!-- var_export convierte null en texto visible; al imprimirlo directamente aparecería una celda vacía. -->
<tr><td><?=var_export($nulo, true)?></td><td><?=gettype($nulo)?></td></tr>
</table>
<?php finalizarPagina(); ?>
