<?php
/**
 * cargar datos de liga de baloncesto en un archivo CSV
 * y retornarlo.
 */
function obtenerDatos(string $nombreArchivo):array|false
{
    $r = fopen($nombreArchivo, 'r');
    if ($r !== false) {
        //Cargar datos
        $datos = [];
        $cabecera = null;
        while ($fila = fgetcsv($r)) {
            if (!$cabecera) {
                $cabecera = $fila;
            } else {
                $datos[] = array_combine($cabecera, $fila);
                //print_r($fila);
                //echo '<br>';
            }
        }
        fclose($r);
    } else {
        //die('No se pudo cargar el archivo');
        return false;
    }
    return [$cabecera, $datos];
}



