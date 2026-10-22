<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 6.1: números flotantes', 'Se comparan literales decimales y científicos. rand() genera un entero, así que se escala y divide para obtener decimales; number_format() decide cómo se muestran.');
// Se eligen valores con distinta cantidad de decimales para observar que la precisión mostrada depende del formato.
$valor1 = 1.2;
$valor2 = 1.23;
$valor3 = 1.234;
$valor4 = 1.2345;
// Estos literales tienen el mismo valor que los decimales de arriba, pero usan la notación científica de PHP.
$cientifico1 = 1.2e0;
$cientifico2 = 1.23e0;
$cientifico3 = 1.234e0;
$cientifico4 = 1.2345e0;
// rand() da enteros; dividir por 100 desplaza dos posiciones decimales y produce un ejemplo entre 1,00 y 99,99.
$aleatorio = rand(100, 9999) / 100;
?>
<!-- Se muestran juntos el literal y el valor interpretado para comparar la sintaxis sin cambiar su significado. -->
<table>
    <tr><th>Valor decimal</th><th>Literal científico</th><th>Valor científico interpretado</th></tr>
    <tr><td><?=$valor1?></td><td><code>1.2e0</code></td><td><?=$cientifico1?></td></tr>
    <tr><td><?=$valor2?></td><td><code>1.23e0</code></td><td><?=$cientifico2?></td></tr>
    <tr><td><?=$valor3?></td><td><code>1.234e0</code></td><td><?=$cientifico3?></td></tr>
    <tr><td><?=$valor4?></td><td><code>1.2345e0</code></td><td><?=$cientifico4?></td></tr>
</table>
<!-- number_format solo cambia la representación visible, no el valor numérico almacenado. -->
<p>Formato europeo, con dos decimales: <?=number_format($valor4, 2, ',', '.')?></p>
<p>Con tres decimales: <?=number_format($valor3, 3, ',', '.')?></p>
<p>Notación científica generada con sprintf(): <?=sprintf('%.2E', $valor4)?></p>
<p>Ejemplo aleatorio: rand(100, 9999) / 100 = <?=number_format($aleatorio, 2, ',', '.')?></p>
<?php finalizarPagina(); ?>
