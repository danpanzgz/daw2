<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 18: suma de los 100 primeros números', 'Un acumulador conserva la suma. En cada vuelta del bucle se añade el número de esa iteración.');
// El acumulador debe empezar en cero para que la primera suma no herede un valor anterior.
$suma = 0;
?>
<!-- Se actualiza la suma antes de crear cada fila para que la tabla muestre el acumulado de esa iteración. -->
<table><tr><th>Iteración</th><th>Suma acumulada</th></tr>
<?php for ($i = 1; $i <= 100; $i++): $suma += $i; ?>
    <tr><td><?=$i?></td><td><?=$suma?></td></tr>
<?php endfor; ?>
</table>
<p>La suma final es <?=$suma?>.</p>
<?php finalizarPagina(); ?>
