<?php

function leerCSV($archivo,&$cabecera,&$datos){

    if ($archivo!==false) {
        
         while($fila=fgetcsv($archivo)) //while(($fila=fgetcsv($archivo))!==false)
        {
            
            //si nuestra cabecera está vacía usaremos la primera línea como cabecera
            if (empty($cabecera)) {
                $cabecera=$fila; continue;
            }elseif ($cabecera[0]===$fila[0]) {
                continue;
            }
            //crea un array asociativo
            $datos[]=array_combine($cabecera,$fila);
        } 
        //cerramos 
        fclose($archivo);
    } else {
       die ('No se pudo cargar el archivo');
    }
    return $datos;
}




