<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 6: conversiones numéricas', 'decbin(), dechex() y decoct() convierten un entero decimal a cadenas en base binaria, hexadecimal y octal.');
$numero = 10;
// Guardamos una conversión para poder mostrar explícitamente el tipo que devuelve: una cadena, no un entero.
$binario = decbin($numero);
?>
<p>Decimal: <?=$numero?> (tipo <?=gettype($numero)?>)</p>
<p>Binario: <?=escapar($binario)?> (tipo <?=gettype($binario)?>)</p>
<!-- Las tres funciones devuelven representaciones en otras bases; el valor original no cambia. -->
<p>Hexadecimal: <?=dechex($numero)?></p>
<p>Octal: <?=decoct($numero)?></p>
<?php finalizarPagina(); ?>
