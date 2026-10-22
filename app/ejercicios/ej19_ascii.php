<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 19: tabla ASCII completa', 'Se muestran los códigos imprimibles del 33 al 126 en seis columnas. chr() obtiene el carácter y escapar() evita que se interprete como HTML.');
?>
<!-- Cada columna contiene un par código/carácter, por eso se repiten los encabezados seis veces. -->
<table>
    <tr><?php for ($columna = 0; $columna < 6; $columna++): ?><th>Código</th><th>Carácter</th><?php endfor; ?></tr>
    <!-- El bucle exterior crea filas y avanza seis códigos, uno por columna. -->
    <?php for ($inicio = 33; $inicio <= 126; $inicio += 6): ?>
        <tr>
            <?php for ($columna = 0; $columna < 6; $columna++):
                // Se calcula el código según la fila y la columna; la última fila se completa con celdas vacías si hace falta.
                $codigo = $inicio + $columna;
            ?>
                <?php if ($codigo <= 126): ?><td><?=$codigo?></td><td><?=escapar(chr($codigo))?></td>
                <?php else: ?><td></td><td></td><?php endif; ?>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
<?php finalizarPagina(); ?>
