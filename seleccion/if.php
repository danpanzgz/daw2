<?php
$numero = 5;
if ($numero) {
    echo "<h1>SI</h1>";
}else{
    echo "<h1>NO</h1>";

}

$edad = 0;
echo "<h2>$edad</h2>";
switch (true) {
    case $edad < 4:
        echo "<h2>eres un bebé</h2>";
        break;
    case $edad < 12:
        echo "<h2>niña</h2>";
        break;
    case $edad < 18:
        echo "<h2>adolescente</h2>";
        break;
    case $edad < 26:
        echo "<h2>disfruta la vida</h2>";
        break;
    case $edad < 61:
        echo "<h2>responsabilidades</h2>";
        break;
    case $edad < 91:
        echo "<h2>descansar</h2>";
        break;
    case $edad < 101:
        echo "<h2>sortudo</h2>";
        break;
}