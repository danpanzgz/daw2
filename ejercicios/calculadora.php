<?php
require __DIR__ . '/comun.php';
$resultado = null;
$error = '';
// filter_input lee campos concretos por su nombre y evita procesar la página si no se envió el botón.
$calcular = filter_input(INPUT_POST, 'calcular', FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR);
if ($calcular !== null) {
    // El enunciado pide reemplazar entradas no numéricas por aleatorios; se valida cada operando de forma independiente.
    $entradaA = filter_input(INPUT_POST, 'a', FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR);
    $entradaB = filter_input(INPUT_POST, 'b', FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR);
    $entradaOperacion = filter_input(INPUT_POST, 'operacion', FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR);
    $a = is_numeric($entradaA) ? (float) $entradaA : random_int(1, 100);
    $b = is_numeric($entradaB) ? (float) $entradaB : random_int(1, 100);
    $operacion = $entradaOperacion ?? 'sumar';
    // La división se comprueba antes de match para evitar una operación indefinida.
    if ($operacion === 'dividir' && $b == 0.0) {
        $error = 'No se puede dividir entre cero.';
    } else {
        // match devuelve directamente el resultado de la opción seleccionada y obliga a cubrir una alternativa por defecto.
        $resultado = match ($operacion) {
            'restar' => $a - $b,
            'multiplicar' => $a * $b,
            'dividir' => $a / $b,
            default => $a + $b,
        };
    }
}
// Se prepara el resultado antes de renderizar el formulario para separar cálculo y presentación.
iniciarPagina('Repaso: calculadora con match', 'El formulario pide dos números y una operación. match calcula el resultado; un dato no numérico se sustituye por un entero aleatorio.');
?>
<!-- El mismo formulario sirve para cada operación y se vuelve a mostrar junto al resultado. -->
<form method="post">
    <label>Primer número: <input name="a" inputmode="decimal" required></label>
    <label>Operación:
        <select name="operacion">
            <option value="sumar">Sumar</option><option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option><option value="dividir">Dividir</option>
        </select>
    </label>
    <label>Segundo número: <input name="b" inputmode="decimal" required></label>
    <button name="calcular" value="1">Calcular</button>
</form>
<?php if ($error !== ''): ?>
    <p><?=escapar($error)?></p>
<?php elseif ($calcular !== null): ?>
    <p>Resultado: <?=number_format((float) $resultado, 2, ',', '.')?></p>
<?php endif; ?>
<?php finalizarPagina(); ?>
