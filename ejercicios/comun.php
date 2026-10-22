<?php
// Estas funciones compartidas evitan repetir la misma estructura HTML en cada ejercicio.
function iniciarPagina(string $titulo, string $explicacion): void
{
    // El título y la explicación llegan como texto: se escapan para que caracteres como < no se interpreten como HTML.
    $tituloSeguro = htmlspecialchars($titulo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $explicacionSegura = htmlspecialchars($explicacion, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    // La cabecera común fija UTF-8 y enlaza la hoja de estilos desde la carpeta de los ejercicios.
    echo "<!doctype html>\n<html lang=\"es\">\n<head>\n";
    echo "<meta charset=\"UTF-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
    echo "<title>$tituloSeguro</title><link rel=\"stylesheet\" href=\"estilos.css\">\n</head>\n<body>\n";
    echo '<main class="contenedor"><nav><a href="index.html">← Todos los ejercicios</a></nav>';
    echo "<h1>$tituloSeguro</h1><p class=\"explicacion\">$explicacionSegura</p><section class=\"resultado\">\n";
}

function finalizarPagina(): void
{
    // Se cierra el contenedor que abrió iniciarPagina() y luego el documento HTML.
    echo '</section></main></body></html>';
}

function escapar(mixed $valor): string
{
    // Se usa al insertar valores en HTML para mostrarlos como texto, no como etiquetas o atributos.
    return htmlspecialchars((string) $valor, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
