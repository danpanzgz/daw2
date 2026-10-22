<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 3: tabla ASCII básica', 'El bucle recorre los códigos del 32 al 127. chr() obtiene el carácter asociado a cada código.');
?>
<!-- La tabla separa los códigos de sus caracteres para poder relacionar cada número con chr(). -->
<table><tr><th>Código</th><th>Carácter</th></tr>
<!-- ASCII básico ocupa los códigos 0-127; 127 queda fuera porque el límite superior del for no se incluye. -->
<?php for ($codigo = 32; $codigo < 128; $codigo++): ?>
    <!-- escapar() impide que caracteres como < se conviertan en etiquetas HTML. -->
    <tr><td><?=$codigo?></td><td><?=escapar(chr($codigo))?></td></tr>
<?php endfor; ?>
</table>
<?php finalizarPagina(); ?>
