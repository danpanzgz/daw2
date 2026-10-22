<?php

$size = mt_rand(1,6);
$red = mt_rand(1,255);
$green = mt_rand(1,255);
$blue = mt_rand(1,255);

$msj = "<h$size style='color:rgb($red, $green, $blue)'>titulo</h$size>";
$msj2 = "El primer mensaje usa h$size y el color rgb($red, $green, $blue).";

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
    <?=$msj?>
    <p><?=$msj2?></p>
</body>
</html>
