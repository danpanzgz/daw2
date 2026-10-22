<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 5: números enteros', 'Los prefijos 0b, 0o y 0x declaran literales binarios, octales y hexadecimales. Todos se almacenan como enteros y se muestran en decimal al imprimirlos.');
// Los cuatro literales representan el mismo número; PHP los convierte internamente a enteros.
$decimal = 125;
$octal = 0o175;
$hexadecimal = 0x7D;
$binario = 0b1111101;
?>
<!-- Al imprimirlos sin conversión, PHP muestra el valor numérico decimal y no la base escrita en el literal. -->
<p>Decimal: <?=$decimal?></p>
<p>Octal (0175): <?=$octal?></p>
<p>Hexadecimal (0x7D): <?=$hexadecimal?></p>
<p>Binario (0b1111101): <?=$binario?></p>
<!-- Se explica 0874 como texto porque escribirlo como literal inválido detendría la ejecución del ejercicio. -->
<p>El literal octal <code>0874</code> no es válido, porque los dígitos octales van del 0 al 7.</p>
<?php finalizarPagina(); ?>
