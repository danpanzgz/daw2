<?php
require __DIR__ . '/comun.php';
// Los encabezados válidos son h1-h6; random_int incluye ambos extremos del rango.
$nivel = random_int(1, 6);
// Cada componente RGB debe tener exactamente dos dígitos hexadecimales; str_pad añade el cero inicial cuando hace falta.
$rojo = str_pad(dechex(random_int(0, 255)), 2, '0', STR_PAD_LEFT);
$verde = str_pad(dechex(random_int(0, 255)), 2, '0', STR_PAD_LEFT);
$azul = str_pad(dechex(random_int(0, 255)), 2, '0', STR_PAD_LEFT);
$color = "#$rojo$verde$azul";
// Se calcula el color antes de abrir la página para reutilizar el mismo valor en estilo y texto.
iniciarPagina('Ejercicio 10: estilo aleatorio', 'Se elige un encabezado entre h1 y h6, y se generan tres componentes RGB entre 00 y FF para formar un color hexadecimal.');
?>
<!-- La misma variable controla la etiqueta inicial y final, evitando encabezados HTML mal emparejados. -->
<h<?=$nivel?> style="color:<?=$color?>">Texto aleatorio — <?=$color?></h<?=$nivel?>>
<?php finalizarPagina(); ?>
