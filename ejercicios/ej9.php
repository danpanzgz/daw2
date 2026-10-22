<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 9: valores y literales', 'Los literales pueden escribirse en distintas bases. Las cadenas multilínea se pueden crear con HEREDOC; 0874 no es un literal octal válido.');
// Se omite la asignación 0874: en PHP sería un literal octal inválido y produciría un error de sintaxis.
$decimal = 125;
$hexadecimal = 0xABC12;
$binario = 0b1100;
$cadena1 = 'Esto es una cadena de caracteres';
$cadena2 = 'Esto es otra cadena de caracteres';
$flotante = 1.23432230003322014000002234101;
$cientifico = 1234E-2;
$nulo = null;
$verdadero = true;
$falso = false;
// HEREDOC conserva saltos de línea y permite escribir un texto largo sin concatenar cadenas.
$multilinea = <<<TEXTO
Esto es una cadena
multilínea
y termina aquí.
TEXTO;
?>
<p>Decimal: <?=$decimal?>; hexadecimal: <?=$hexadecimal?>; binario: <?=$binario?>.</p>
<p><?=escapar($cadena1)?>; <?=escapar($cadena2)?></p>
<p>Flotante: <?=$flotante?>; científico: <?=$cientifico?>.</p>
<!-- var_export evita que false y null aparezcan como texto vacío. -->
<p>Null: <?=var_export($nulo, true)?>; booleanos: <?=var_export($verdadero, true)?> y <?=var_export($falso, true)?>.</p>
<pre><?=escapar($multilinea)?></pre>
<?php finalizarPagina(); ?>
