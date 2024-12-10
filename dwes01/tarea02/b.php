<?php
include 'a.php';

function generarArchivo(string &$archivo){
    for($numero=1;$numero<=2;$numero++){
                $archivo=fopen('datos'.$numero.'.csv','r');
                if ($archivo!==false)
                {
                    return $archivo;
                }
                else
                {
                    die ('No se pudo cargar el archivo');
                }
    }
}

generarArchivo($archivo);