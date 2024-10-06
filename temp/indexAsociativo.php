<?php

$archivo=fopen('datos1.csv','r');
if ($archivo!==false)
{
    $datos=[];
    $cabecera=[];
    while($fila=fgetcsv($archivo)) //while(($fila=fgetcsv($archivo))!==false)
    {
        //si nuestra cabecera está vacía usaremos la primera línea como cabecera
        if (empty($cabecera))
            {$cabecera=$fila; continue;}
        //crea un array asociativo
        $datos[]=array_combine($cabecera,$fila);
    }  
    //cerramos 
    fclose($archivo);
}
else
{
    die ('No se pudo cargar el archivo');
}
var_dump($cabecera);
var_dump($datos);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo resuelto CSV</title>
</head>
<body>
    <table border=1>
            <tr>
                <th><?=$cabecera[0];?></th>
                <th><?=$cabecera[1];?></th>
                <th><?=$cabecera[2];?></th>
                <th><?=$cabecera[3];?></th>
                <th><?=$cabecera[4];?></th>
            </tr>
        <?php foreach ($datos as $fila): ?>
            <tr> 
                <td><?=$fila['nombre'];?></td>
                <td><?=$fila['PVD'];?></td>
                <td><?=$fila['PVP'];?></td>
                <td><?=$fila['codigo'];?></td>
                <td><?=$fila['familia'];?></td>
            </tr>
        <?php endforeach; ?>    
    </table>
</body>
</html>