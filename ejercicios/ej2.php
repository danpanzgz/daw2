<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 2: printf', 'Los formatos de printf muestran un valor como texto, decimal, carácter o representación en otra base. Las conversiones a bases enteras usan la parte entera.');
// Un valor con decimales ayuda a observar que cada especificador interpreta el mismo argumento de forma distinta.
$valor = 42.75;
?>
<p>Valor original: <?=$valor?></p>
<pre><?php
// %% imprime el signo % del rótulo; los especificadores restantes consumen los argumentos en el mismo orden.
printf("%%s: %s\n%%f: %f\n%%F: %F\n%%c: %c\n%%x: %x\n%%X: %X\n%%b: %b\n%%o: %o\n%%.2f: %.2f",
    $valor, $valor, $valor, $valor, $valor, $valor, $valor, $valor, $valor);
?></pre>
<?php finalizarPagina(); ?>
