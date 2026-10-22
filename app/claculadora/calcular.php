<?php


$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$operador = $_POST['operador'];

$resultado = match ($operador) {
    '+' => $op1 + $op2,
    '-' => $op1 - $op2,
    '*' => $op1 * $op2,
    '/' => $op1 / $op2,
    default => "papa noel"
};

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado de la calculadora</title>
    <link rel="stylesheet" href="../style.css?v2">

</head>
<body>
<main class="access-result">
    <h1>Resultado</h1>
    <p><?= $op1 ?> <?= htmlspecialchars($operador, ENT_QUOTES, 'UTF-8') ?> <?= $op2 ?> = <strong><?= $resultado ?></strong></p>
    <a href="index.php">Volver a la calculadora</a>
</main>
</body>
</html>
