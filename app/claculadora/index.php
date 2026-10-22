<?php
//hacer una calculadora de +,-,/,*

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../style.css?v2">
</head>
<body>
<form action="calcular.php" method="post">
    <fieldset>
        <legend>Calculadora</legend>
        <label for="op1">Primer número</label>
        <input type="number" name="op1" id="op1" step="any" required>
        <label for="operador">Operación</label>
        <select name="operador" id="operador">
            <option value="+">Sumar (+)</option>
            <option value="-">Restar (-)</option>
            <option value="*">Multiplicar (*)</option>
            <option value="/">Dividir (/)</option>
        </select>
        <label for="op2">Segundo número</label>
        <input type="number" name="op2" id="op2" step="any" required>
        <input type="submit" value="Calcular">
    </fieldset>
</form>

</body>
</html>
