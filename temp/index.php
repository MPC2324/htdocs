<?php

$archivo=fopen('ejemplo.csv','r');
if ($archivo!==false)
{
    //while(($fila=fgetcsv($archivo))!==false)
    while($fila=fgetcsv($archivo)){
        $datos[]=$fila;
    }    

    fclose($archivo);
}
else
{
    die ('No se pudo cargar el archivo');
}

var_dump($datos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo resuelto CSV</title>
    <style> table, th, td { border-collapse: collapse; border: 1px solid black; text-align: center;  } th, td { padding: 5px; } </style>
</head>
<body>
    <table>
        <?php foreach ($datos as $key=>$fila): ?>
            <tr> 
                <?php if ($key===0):?>  
                    <th><?=$fila[0];?></th>
                    <th><?=$fila[1];?></th>
                    <th><?=$fila[2];?></th>
                <?php else: ?>
                    <td><?=$fila[0];?></td>
                    <td><?=$fila[1];?></td>
                    <td><?=$fila[2];?></td>
                <?php endif; ?>
            </tr>

        <?php endforeach; ?>    
    </table>
</body>
</html>