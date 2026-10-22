<?php
require __DIR__ . '/comun.php';
$horas = random_int(30, 50);
$precioHora = 10;
// Se separan horas normales y extra para aplicar el recargo solo a las que superan las 40.
// Solo las horas por encima de 40 reciben la tarifa extra de 1,5.
$horasNormales = min($horas, 40);
$horasExtra = max(0, $horas - 40);
$bruto = $horasNormales * $precioHora + $horasExtra * $precioHora * 1.5;
// match(true) selecciona el tramo cuyo predicado es verdadero; el porcentaje se calcula después sobre el bruto.
$porcentajeIrpf = match (true) {
    $bruto < 600 => 0,
    $bruto <= 800 => 5,
    default => 12,
};
$irpf = $bruto * $porcentajeIrpf / 100;
$neto = $bruto - $irpf;
// Se muestran conceptos separados para poder comprobar el bruto, el descuento y el neto con el mismo cálculo.
iniciarPagina('Ejercicio 22: generar una nómina', 'El salario bruto suma horas normales y horas extra. El IRPF es 0 % por debajo de 600 €, 5 % hasta 800 € y 12 % por encima.');
?>
<table>
    <tr><th>Concepto</th><th>Detalle</th><th>Importe</th></tr>
    <tr><td>Horas normales</td><td><?=$horasNormales?> × <?=number_format($precioHora, 2, ',', '.')?></td><td><?=number_format($horasNormales * $precioHora, 2, ',', '.')?></td></tr>
    <tr><td>Horas extra</td><td><?=$horasExtra?> × <?=number_format($precioHora * 1.5, 2, ',', '.')?></td><td><?=number_format($horasExtra * $precioHora * 1.5, 2, ',', '.')?></td></tr>
    <tr><th colspan="2">Salario bruto</th><th><?=number_format($bruto, 2, ',', '.')?> €</th></tr>
    <tr><td>IRPF (<?=$porcentajeIrpf?> %)</td><td></td><td>-<?=number_format($irpf, 2, ',', '.')?> €</td></tr>
    <tr><th colspan="2">Salario neto</th><th><?=number_format($neto, 2, ',', '.')?> €</th></tr>
</table>
<?php finalizarPagina(); ?>
