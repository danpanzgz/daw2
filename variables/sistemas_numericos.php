<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        /* Es mejor mover los estilos aquí o a tu style.css */
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Texto enunciado breve</h2>
        <ul>
            <li>Items enunciado</li>
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <table>
            <tr>
                <th>Decimal</th>
                <th>Binario</th>
                <th>Octal</th>
                <th>Hexadecimal</th>
            </tr>
            <?php for ($i = 1; $i <= 15; $i++): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $i ?></td>
                    <td><?= $i ?></td>
                    <td><?= $i ?></td>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</div>
</body>
</html>