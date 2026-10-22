<?php
require __DIR__ . '/comun.php';
// Solo se acepta una apuesta entera entre 1 y 6; un POST vacío corresponde a la visita inicial.
$eleccion = filter_input(INPUT_POST, 'dado', FILTER_VALIDATE_INT, FILTER_REQUIRE_SCALAR);
$apuestaEnviada = filter_input(INPUT_POST, 'dado', FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR);
// La tirada se genera en el servidor para que no dependa del valor o la imagen elegidos en el formulario.
$tirada = random_int(1, 6);
$haElegido = $eleccion !== false && $eleccion !== null && $eleccion >= 1 && $eleccion <= 6;
iniciarPagina('Ejercicio 17: apuesta por un dado', 'Elige una cara. El formulario envía el número elegido y el servidor genera una tirada aleatoria para determinar si has ganado.');
?>
<!-- Cada botón envía su propio valor; reutilizar el formulario evita tener seis formularios distintos. -->
<form method="post" class="dados">
    <?php for ($cara = 1; $cara <= 6; $cara++): ?>
        <button type="submit" name="dado" value="<?=$cara?>" aria-label="Apostar por el <?=$cara?>">
            <img src="../juegoDado/fotosDados/dado<?=$cara?>.png" alt="Dado <?=$cara?>">
        </button>
    <?php endfor; ?>
</form>
<?php if ($haElegido): ?>
    <!-- Solo se compara la apuesta después de validar su rango. -->
    <p>Tu apuesta: <?=$eleccion?>. Resultado: <?=$tirada?>.</p>
    <p><?=$eleccion === $tirada ? '¡Has ganado!' : 'Has perdido.'?></p>
<?php elseif ($apuestaEnviada !== null): ?>
    <p>La apuesta no es válida.</p>
<?php endif; ?>
<?php finalizarPagina(); ?>
