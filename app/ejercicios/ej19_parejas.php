<?php
require __DIR__ . '/comun.php';
// Un contador por cara permite detectar cuándo esa cara aparece por segunda vez.
$veces1 = $veces2 = $veces3 = $veces4 = $veces5 = $veces6 = 0;
$tiradas = 0;
$pareja = 0;
while ($pareja === 0) {
    // Se incrementa antes de evaluar la cara para que el número final incluya la tirada que formó la pareja.
    $tiradas++;
    $cara = random_int(1, 6);
    switch ($cara) {
        // La pareja se define como la segunda aparición de una misma cara, no como dos tiradas consecutivas iguales.
        case 1: $veces1++; if ($veces1 === 2) $pareja = 1; break;
        case 2: $veces2++; if ($veces2 === 2) $pareja = 2; break;
        case 3: $veces3++; if ($veces3 === 2) $pareja = 3; break;
        case 4: $veces4++; if ($veces4 === 2) $pareja = 4; break;
        case 5: $veces5++; if ($veces5 === 2) $pareja = 5; break;
        case 6: $veces6++; if ($veces6 === 2) $pareja = 6; break;
    }
}
iniciarPagina('Ejercicio 19: buscar pareja de dados', 'Se tira el dado hasta que una misma cara aparece por segunda vez. El contador registra todas las tiradas.');
?>
<p>La cara <?=$pareja?> formó la pareja.</p>
<p>Se necesitaron <?=$tiradas?> tiradas.</p>
<?php finalizarPagina(); ?>
