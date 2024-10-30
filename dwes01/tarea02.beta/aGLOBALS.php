<?php

$GLOBALS['cabecera']=[];
$GLOBALS['datos']=[];

function leerCSV($archivo){

    if ($archivo!==false)

    {
        
         while($fila=fgetcsv($archivo)) //while(($fila=fgetcsv($archivo))!==false)
        {
            
     //si nuestra cabecera está vacía usaremos la primera línea como cabecera
     if (empty($GLOBALS['cabecera']))
         {$GLOBALS['cabecera']=$fila; continue;}
     elseif($GLOBALS['cabecera'][0]===$fila[0])
     {
        continue;
     }
    
     $GLOBALS['datos'][]=array_combine($GLOBALS['cabecera'],$fila);
    //crea un array asociativo
    
        }  
        //cerramos 
        fclose($archivo);
        //var_dump($cabecera);
        //var_dump($datos);

    }
    else
    {
       die ('No se pudo cargar el archivo');
    }
    }
?>



