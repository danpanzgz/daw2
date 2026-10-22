<?php
$mes = random_int(1, 12);
$nombre = '';
$dias = 0;

switch ($mes) {
    case 1:
        $nombre = 'Enero';
        $dias = 31;
        break;
    case 2:
        $nombre = 'Febrero';
        $dias = '28 o 29';
        break;
    case 3:
        $nombre = 'Marzo';
        $dias = 31;
        break;
    case 4:
        $nombre = 'Abril';
        $dias = 30;
        break;
    case 5:
        $nombre = 'Mayo';
        $dias = 31;
        break;
    case 6:
        $nombre = 'Junio';
        $dias = 30;
        break;
    case 7:
        $nombre = 'Julio';
        $dias = 31;
        break;
    case 8:
        $nombre = 'Agosto';
        $dias = 31;
        break;
    case 9:
        $nombre = 'Septiembre';
        $dias = 30;
        break;
    case 10:
        $nombre = 'Octubre';
        $dias = 31;
        break;
    case 11:
        $nombre = 'Noviembre';
        $dias = 30;
        break;
    case 12:
        $nombre = 'Diciembre';
        $dias = 31;
        break;
}

$mensaje = "El mes $mes, $nombre, tiene $dias días.";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes aleatorio</title>
    <link rel="stylesheet" href="../style.css?v2">
</head>
<body>
<section>
    <fieldset>
        <legend> Ejercicio meses </legend>
        <h1><?= $mensaje ?></h1>
    </fieldset>
</section>
</body>
</html>
