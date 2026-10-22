<?php


$mes = rand(1, 12);

$nombre =$mes > 5? "Segunda mitad del año":"Primera mitad";

$mensaje = match ($mes) {
    1,3,5,7,10,12 => 31,
    4,6,9,11 => 30,
    2=> "28 o 29",
    default => "error",
};

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?= $mensaje ?></h1>
</body>
</html>
