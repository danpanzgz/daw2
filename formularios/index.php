<?php
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comprobar edad</title>
    <link rel="stylesheet" href="../style.css?v2">
</head>
<body>
    <form action="datos.php" method="post">
        <fieldset>
            <legend>Acceso</legend>
            <label for="edad">¿Cuántos años tienes?</label>
            <input type="number" name="edad" id="edad" min="0" required>
            <input type="submit" value="Comprobar edad">
        </fieldset>
    </form>
</body>
</html>
