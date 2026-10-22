<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 11: variables de variables', 'El contenido de $producto se usa como nombre de variable. $$producto accede al precio correspondiente.');
$tomate = 2.5;
$cebolla = 1.2;
$zanahoria = 1.8;
$pimiento = 2.1;
$lechuga = 1.4;
// El texto de $producto coincide con el nombre de una variable de precio; $$producto accede a esa variable.
$producto = 'tomate';
?>
<p>El precio de <?=$producto?> es <?=number_format($$producto, 2, ',', '.')?></p>
<?php $producto = 'cebolla'; ?>
<!-- Cambiar solo $producto cambia la variable de precio consultada mediante la variable variable. -->
<p>El precio de <?=$producto?> es <?=number_format($$producto, 2, ',', '.')?></p>
<?php $producto = 'zanahoria'; ?>
<p>El precio de <?=$producto?> es <?=number_format($$producto, 2, ',', '.')?></p>
<?php $producto = 'pimiento'; ?>
<p>El precio de <?=$producto?> es <?=number_format($$producto, 2, ',', '.')?></p>
<?php $producto = 'lechuga'; ?>
<p>El precio de <?=$producto?> es <?=number_format($$producto, 2, ',', '.')?></p>
<?php finalizarPagina(); ?>
