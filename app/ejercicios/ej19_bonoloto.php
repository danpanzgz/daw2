<?php
require __DIR__ . '/comun.php';
// Se usan variables independientes para practicar la generación sin colecciones.
$numero1 = random_int(1, 49);
// Cada número posterior se vuelve a generar mientras coincida con uno de los anteriores.
do {
    $numero2 = random_int(1, 49);
} while ($numero2 === $numero1);

do {
    $numero3 = random_int(1, 49);
} while ($numero3 === $numero1 || $numero3 === $numero2);

do {
    $numero4 = random_int(1, 49);
} while ($numero4 === $numero1 || $numero4 === $numero2 || $numero4 === $numero3);

do {
    $numero5 = random_int(1, 49);
} while (
    $numero5 === $numero1
    || $numero5 === $numero2
    || $numero5 === $numero3
    || $numero5 === $numero4
);
iniciarPagina('Ejercicio 19: números de Bonoloto', 'Se extraen cinco números entre 1 y 49. 
                        Se usan variables independientes y se repite una extracción si coincide con un número anterior.');
?>
<p class="numeros"><?=$numero1?> · <?=$numero2?> · <?=$numero3?> · <?=$numero4?> · <?=$numero5?></p>
<?php finalizarPagina(); ?>
