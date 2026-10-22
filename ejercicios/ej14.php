<?php
require __DIR__ . '/comun.php';
// Una única edad aleatoria alimenta ambas ramas, de modo que el mensaje y el valor coinciden.
$edad = random_int(1, 90);
iniciarPagina('Ejercicio 14: selección completa', 'La estructura if/else muestra uno de dos mensajes, cubriendo los dos resultados posibles.');
?>
<!-- if/else garantiza que cada edad produce exactamente una de las dos respuestas. -->
<?php if ($edad < 18): ?>
    <p>Edad: <?=$edad?>. Es menor de edad.</p>
<?php else: ?>
    <p>Edad: <?=$edad?>. Es mayor de edad.</p>
<?php endif; ?>
<?php finalizarPagina(); ?>
