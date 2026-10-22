<?php
require __DIR__ . '/comun.php';
// random_int(1, 100) incluye ambos extremos y ofrece un entero aleatorio para cada carga.
$numero = random_int(1, 100);
iniciarPagina('Ejercicio 12: selección simple', 'Se genera un número y se comprueba si es par mediante el resto de su división entre dos.');
?>
<p>Número obtenido: <?=$numero?>.</p>
<!-- El resto de dividir entre dos es cero exactamente cuando el número es par. -->
<?php if ($numero % 2 === 0): ?>
    <p class="mayor">¡Has ganado un premio! El número es par.</p>
<?php else: ?>
    <p>El número es impar; no hay premio esta vez.</p>
<?php endif; ?>
<?php finalizarPagina(); ?>
