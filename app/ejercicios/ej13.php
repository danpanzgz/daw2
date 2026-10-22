<?php
require __DIR__ . '/comun.php';
// Se conserva el rango del enunciado para que el ejemplo incluya menores y adultos.
$edad = random_int(1, 90);
iniciarPagina('Ejercicio 13: selección simple 2', 'Se muestra un aviso rojo solo cuando la edad aleatoria es menor de 18 años.');
?>
<p>Edad generada: <?=$edad?>.</p>
<!-- Es una selección simple: si la condición no se cumple no se imprime ningún aviso. -->
<?php if ($edad < 18): ?>
    <p style="color: #b91c1c">Menor de edad.</p>
<?php endif; ?>
<?php finalizarPagina(); ?>
