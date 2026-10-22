<?php
require __DIR__ . '/comun.php';
iniciarPagina('Ejercicio 10.1: factura HEREDOC', 'HEREDOC crea una cadena multilínea. Se calculan subtotal, IVA del 21 % y total, y se alinean productos y precios.');
$cliente = 'Juan Pérez';
$fecha = date('d/m/Y');
$producto1 = 'Cuadros';
$producto2 = 'Luminarias intensas';
$precio1 = random_int(1, 100);
$precio2 = random_int(1, 100);
// El subtotal se calcula antes de aplicar el IVA; así el impuesto se aplica sobre el importe de los productos.
$subtotal = $precio1 + $precio2;
$iva = $subtotal * 0.21;
$total = $subtotal + $iva;
// Se formatean los importes una sola vez para usar coma decimal y dos cifras en toda la factura.
$precio1Texto = number_format($precio1, 2, ',', '.');
$precio2Texto = number_format($precio2, 2, ',', '.');
$subtotalTexto = number_format($subtotal, 2, ',', '.');
$ivaTexto = number_format($iva, 2, ',', '.');
$totalTexto = number_format($total, 2, ',', '.');
// str_pad alinea nombres y precios en columnas de texto; el pre conserva los espacios al mostrarlos.
$linea1 = str_pad($producto1, 25) . str_pad($precio1Texto . ' €', 12, ' ', STR_PAD_LEFT);
$linea2 = str_pad($producto2, 25) . str_pad($precio2Texto . ' €', 12, ' ', STR_PAD_LEFT);
// HEREDOC permite construir la factura completa en varias líneas e interpolar variables de forma legible.
$factura = <<<CONTENIDO_FACTURA
==============================================
FACTURA N.º 1
Cliente: $cliente
Fecha: $fecha
----------------------------------------------
$linea1
$linea2
----------------------------------------------
Subtotal:   {$subtotalTexto} €
IVA (21 %): {$ivaTexto} €
TOTAL:      {$totalTexto} €
==============================================
CONTENIDO_FACTURA;
?>
<pre><?=escapar($factura)?></pre>
<?php finalizarPagina(); ?>
