<?php
include 'a.php';

function recorrerArray(&$archivo,&$cabecera,&$datos){
        for($numero=1;$numero<=2;$numero++){
                $archivo=fopen('datos'.$numero.'.csv','r');
                leerCSV($archivo,$cabecera,$datos);
        }
}

