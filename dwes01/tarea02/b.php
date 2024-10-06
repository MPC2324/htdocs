<?php
include 'a.php';

function recorrerArray($numero){
        $archivo=fopen('datos'.$numero.'.csv','r');
        leerCSV($archivo);

}



?>
