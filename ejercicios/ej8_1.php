<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 8.1: declaración de variables', 'PHP deduce el tipo a partir del valor asignado. Los booleanos se representan aquí con las palabras true y false.');
// Cada variable ejemplifica una clase de valor; no se fuerza el tipo para mostrar la inferencia de PHP.
$entero = 10;
$flotante = 20.5;
$cadena = 'Esto es una cadena';
$booleano = true;
?>
<!-- Los valores se muestran por separado para que sea fácil identificar cada asignación. -->
<p>Entero: <?=$entero?></p>
<p>Flotante: <?=$flotante?></p>
<p>Cadena: <?=escapar($cadena)?></p>
<p>Booleano: <?=$booleano ? 'true' : 'false'?></p>
<?php finalizarPagina(); ?>
