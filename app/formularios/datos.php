<?php
$edad = $_POST["edad"];
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>documento</title>
    <link rel="stylesheet" href="../style.css?v2">
</head>
<body>
<main class="access-result">
    <?php if ($edad < 18): ?>
        <p class="access-message access-denied">No tienes acceso. Debes tener al menos 18 años.</p>
    <?php else: ?>
        <p class="access-message access-granted">Tienes acceso.</p>
    <?php endif; ?>
    <a href="index.php">Volver al formulario</a>
</main>
</body>
</html>
