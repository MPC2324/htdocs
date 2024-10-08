<?php
include 'a.php';

//leerCSV($archivo,$cabecera,$datos);
function recorrerArray(&$archivo,&$cabecera,&$datos){
        for($numero=1;$numero<=2;$numero++){
                $archivo=fopen('datos'.$numero.'.csv','r');
                leerCSV($archivo,$cabecera,$datos);
                var_dump($cabecera);
                var_dump($datos);
        }
}
?>
