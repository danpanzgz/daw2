<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 1: echo', 'echo muestra texto. En una página web, <br> crea un salto visual; los caracteres \\n y \\t afectan al texto fuente, no al formato HTML.');
?>
<!-- Se usa echo dentro de HTML para comparar texto simple con una cadena que contiene caracteres de control. -->
<p><?php echo 'Hola, este mensaje se muestra con echo.'; ?></p>
<!-- \n y \t se incorporan a la respuesta, aunque el navegador no los representa como saltos o tabuladores visuales. -->
<p><?php echo "Primera parte\n\tSegunda parte"; ?></p>
<!-- Esta línea contrasta el salto de línea del código fuente con el salto de línea propio de HTML. -->
<p>El navegador no interpreta <code>\n</code> como salto visual; para eso se usa <code>&lt;br&gt;</code>.</p>
<?php finalizarPagina(); ?>
