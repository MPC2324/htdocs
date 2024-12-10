<?php

$archivo=fopen('datos1.csv','r');
if ($archivo!==false)
{
    $datos=[];
     while($fila=fgetcsv($archivo)) //while(($fila=fgetcsv($archivo))!==false)
    {
        //guardar fila
        $datos[]=$fila;
    }  
    //cerramos 
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
</head>
<body>
    <table border=1>
        <?php foreach ($datos as $key=>$fila): ?>
            <tr> 
                <?php if ($key===0):?>  
                    <th><?=$fila[0];?></th>
                    <th><?=$fila[1];?></th>
                    <th><?=$fila[2];?></th>
                    <th><?=$fila[3];?></th>
                    <th><?=$fila[4];?></th>
                <?php else: ?>
                    <td><?=$fila[0];?></td>
                    <td><?=$fila[1];?></td>
                    <td><?=$fila[2];?></td>
                    <td><?=$fila[3];?></td>
                    <td><?=$fila[4];?></td>
                <?php endif; ?>
            </tr>

        <?php endforeach; ?>    
    </table>
</body>
</html>