<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 19: tabla de multiplicar completa', 'Dos bucles anidados crean una tabla con los productos de todos los números del 1 al 10.');
?>
<!-- El primer bucle crea las cabeceras de columnas; el primer encabezado identifica los multiplicandos de cada fila. -->
<table><tr><th>×</th><?php for ($columna = 1; $columna <= 10; $columna++): ?><th><?=$columna?></th><?php endfor; ?></tr>
<!-- El bucle exterior selecciona el primer factor y el interior recorre el segundo para formar la cuadrícula completa. -->
<?php for ($fila = 1; $fila <= 10; $fila++): ?>
    <tr><th><?=$fila?></th>
        <?php for ($columna = 1; $columna <= 10; $columna++): ?>
            <td><?=$fila * $columna?></td>
        <?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>
<?php finalizarPagina(); ?>
