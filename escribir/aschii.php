<?php


//CONTROLADOR GENERO VALORES QUE LUEGO VISUALIZARÉ

$filas = "";
for ($i = 32; $i < 127; $i++) {
    $caracter = htmlspecialchars(chr($i), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $filas .= sprintf(
        "<tr><td>%d</td><td>%s</td></tr>\n",
        $i,
        $caracter
    );
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Tabla Ascii</h2>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <table border="solid 1px">
            <tr>
                <td>Número</td>
                <td>Carácter</td>
            </tr>
            <?= $filas?>

        </table>
    </div>

</div>

<?php
    $numero = 5;
    var_dump($numero);
    echo "<h1>Ahora var_dump</h1>\n";
    $datos = [1,3,4,5,6,76];
    var_dump($datos);

    $valor_array = print_r($datos, true);

?>
</body>
</html>