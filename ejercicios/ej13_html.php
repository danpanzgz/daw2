<?php
require __DIR__ . '/comun.php';
// El formulario se procesa en esta misma página; los valores por defecto evitan avisos en la primera visita.
$nombreRecibido = filter_input(INPUT_POST, 'nombre', FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR);
$nombre = is_string($nombreRecibido) ? trim($nombreRecibido) : '';
// filter_input valida que la edad enviada sea un entero antes de compararla.
$edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT, FILTER_REQUIRE_SCALAR);
$edadEnviada = filter_input(INPUT_POST, 'edad', FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR);
iniciarPagina('Selección con formulario HTML', 'El formulario envía nombre y edad. PHP valida la edad y muestra un estilo distinto según sea menor o mayor de edad.');
?>
<!-- POST evita poner los datos del formulario en la URL; required y min/max ayudan al usuario, pero PHP valida de nuevo. -->
<form method="post">
    <label>Nombre: <input name="nombre" value="<?=escapar($nombre)?>" required></label>
    <label>Edad: <input name="edad" type="number" min="0" max="120" required></label>
    <button type="submit">Comprobar</button>
</form>
<?php if ($edadEnviada !== null && $edad !== false && $edad !== null && $edad >= 0 && $edad <= 120): ?>
    <!-- El nombre se escapa porque viene del usuario; la clase visual depende de la edad ya validada. -->
    <p class="<?=$edad < 18 ? 'menor' : 'mayor'?>">
        <?=escapar($nombre)?>, <?=$edad < 18 ? 'eres menor' : 'eres mayor'?> de edad.
    </p>
<?php elseif ($edadEnviada !== null): ?>
    <!-- Se muestra el error solo tras enviar el formulario y recibir una edad inválida. -->
    <p>Introduce una edad válida entre 0 y 120.</p>
<?php endif; ?>
<?php finalizarPagina(); ?>
