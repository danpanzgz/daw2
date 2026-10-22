<?php
require __DIR__ . '/comun.php';
// El rango termina en 15 deliberadamente para poder comprobar también la rama "Mes incorrecto".
$numeroMes = random_int(1, 15);
// if/elseif enseña la selección múltiple explícita que solicita este ejercicio.
if ($numeroMes === 1) {
    $nombreMes = 'Enero';
} elseif ($numeroMes === 2) {
    $nombreMes = 'Febrero';
} elseif ($numeroMes === 3) {
    $nombreMes = 'Marzo';
} elseif ($numeroMes === 4) {
    $nombreMes = 'Abril';
} elseif ($numeroMes === 5) {
    $nombreMes = 'Mayo';
} elseif ($numeroMes === 6) {
    $nombreMes = 'Junio';
} elseif ($numeroMes === 7) {
    $nombreMes = 'Julio';
} elseif ($numeroMes === 8) {
    $nombreMes = 'Agosto';
} elseif ($numeroMes === 9) {
    $nombreMes = 'Septiembre';
} elseif ($numeroMes === 10) {
    $nombreMes = 'Octubre';
} elseif ($numeroMes === 11) {
    $nombreMes = 'Noviembre';
} elseif ($numeroMes === 12) {
    $nombreMes = 'Diciembre';
} else {
    $nombreMes = 'Mes incorrecto';
}
iniciarPagina('Ejercicio 15: meses con if', 'Una cadena if/elseif asocia cada número del 1 al 12 con el mes correspondiente. Los demás valores son incorrectos.');
?>
<p>Número generado: <?=$numeroMes?>.</p>
<p>Resultado: <?=escapar($nombreMes)?>.</p>
<?php finalizarPagina(); ?>
