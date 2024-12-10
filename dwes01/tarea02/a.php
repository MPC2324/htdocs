<?php
/**
 * cargar datos de un archivo CSV
 * y retornarlo.
 */
function leerCSV(string $archivo, array &$cabecera, array &$datos):array|false
{
    $r = fopen($archivo, 'r');
    if ($r !== false) {
        //Cargar datos
        $datos = [];
        $cabecera = [];
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
    return $cabecera;
    return $datos;

}
