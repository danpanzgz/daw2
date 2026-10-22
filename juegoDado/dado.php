<?php
$dado1 = $dado2 = $dado3 = $dado4 = $dado5 = $dado6 = 0;

for ($n = 0; $n < 6000000; $n++) {
    switch (rand(1, 6)) {
        case 1: $dado1++; break;
        case 2: $dado2++; break;
        case 3: $dado3++; break;
        case 4: $dado4++; break;
        case 5: $dado5++; break;
        case 6: $dado6++; break;
    }
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Resultados de 6 millones de tiradas</h1>
    <p><img src="fotosDados/dado1.png" alt="Cara del dado número 1"> El número 1 salió <?=$dado1?> veces.</p>
    <p><img src="fotosDados/dado2.png" alt="Cara del dado número 2"> El número 2 salió <?=$dado2?> veces.</p>
    <p><img src="fotosDados/dado3.png" alt="Cara del dado número 3"> El número 3 salió <?=$dado3?> veces.</p>
    <p><img src="fotosDados/dado4.png" alt="Cara del dado número 4"> El número 4 salió <?=$dado4?> veces.</p>
    <p><img src="fotosDados/dado5.png" alt="Cara del dado número 5"> El número 5 salió <?=$dado5?> veces.</p>
    <p><img src="fotosDados/dado6.png" alt="Cara del dado número 6"> El número 6 salió <?=$dado6?> veces.</p>
</body>
</html>
