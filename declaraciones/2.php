<?php
$numeros_sumados = 0;
$lista_numeros = 0;
$total = 0;

while ($numeros_sumados<100){
    if ($lista_numeros%2==0){
    $total += $lista_numeros++;
    $numeros_sumados++;
    }
    $numeros_sumados++;
}

echo "<h1>numeros sumados: $numeros_sumados, lista numeros: $lista_numeros, total: $total</h1>";