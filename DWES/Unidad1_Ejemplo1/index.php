<?php
require_once 'baloncesto.php';
require_once 'filtrado.php';

//existen obtenerDatos como filtrar
list($cabecera, $datos) = obtenerDatos('liga_baloncesto.csv');
//var_dump($datos);

// $datosFiltrados=filtrar($datos, 'Equipo A');
// var_dump($datosFiltrados);

// $datosFiltrados=filtrar($datos, null, 'Equipo A');
// var_dump($datosFiltrados);

ordenar($datos, 'Puntuación equipo 2');
//var_dump($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de partidos</title>
</head>
<body>
    <table>
        <thead>   
        <tr>
            <?php foreach ($cabecera as $cabecera): ?>
                <th><?= $cabecera ?></th>
            <?php endforeach; ?>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($datos as $fila): ?>
            <tr>
                <?php foreach ($fila as $valor): ?>
                    <td><?= $valor ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
