<?php
require __DIR__ . '/comun.php';
// Se mantienen contadores individuales para practicar variables y switch.
$veces1 = $veces2 = $veces3 = $veces4 = $veces5 = $veces6 = 0;
$mtVeces1 = $mtVeces2 = $mtVeces3 = $mtVeces4 = $mtVeces5 = $mtVeces6 = 0;
// Cada generador tiene sus propios contadores: así se comparan dos muestras independientes de 100 000 tiradas.
for ($i = 0; $i < 100000; $i++) {
    switch (rand(1, 6)) {
        case 1: $veces1++; break;
        case 2: $veces2++; break;
        case 3: $veces3++; break;
        case 4: $veces4++; break;
        case 5: $veces5++; break;
        case 6: $veces6++; break;
    }
    // La segunda tirada de la iteración usa mt_rand(); no reutiliza el resultado generado por rand().
    switch (mt_rand(1, 6)) {
        case 1: $mtVeces1++; break;
        case 2: $mtVeces2++; break;
        case 3: $mtVeces3++; break;
        case 4: $mtVeces4++; break;
        case 5: $mtVeces5++; break;
        case 6: $mtVeces6++; break;
    }
}
iniciarPagina('Ejercicio 19: tirar dados 100 000 veces', 'Se realizan 100 000 tiradas con rand() y otras 100 000 con mt_rand(). Los contadores separados permiten comparar ambos generadores.');
?>
<table><tr><th>Cara</th><th>rand()</th><th>mt_rand()</th></tr>
<tr><td>1</td><td><?=$veces1?></td><td><?=$mtVeces1?></td></tr>
<tr><td>2</td><td><?=$veces2?></td><td><?=$mtVeces2?></td></tr>
<tr><td>3</td><td><?=$veces3?></td><td><?=$mtVeces3?></td></tr>
<tr><td>4</td><td><?=$veces4?></td><td><?=$mtVeces4?></td></tr>
<tr><td>5</td><td><?=$veces5?></td><td><?=$mtVeces5?></td></tr>
<tr><td>6</td><td><?=$veces6?></td><td><?=$mtVeces6?></td></tr>
</table>
<?php finalizarPagina(); ?>
