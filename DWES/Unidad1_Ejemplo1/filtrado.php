<?php

function filtrar($datos, $equipoLocal = null, $equipoVisitante = null)
{
    $datosBuenos = [];
    foreach ($datos as $partido) {
        if ($equipoLocal !== null && $partido['Equipo 1'] !== $equipoLocal) {
            continue;
        }
        if ($equipoVisitante !== null && $partido['Equipo 2'] !== $equipoVisitante) {
            continue;
        }
        $datosBuenos[] = $partido;
    }
    return $datosBuenos;
}

function ordenar(array &$datos, string $campo): bool
{
    if (count($datos) > 0 && array_key_exists($campo, $datos[0])) {
        $columnaFecha = array_column($datos, $campo);
        array_multisort($columnaFecha, SORT_ASC, $datos);
        return true;
    } else {
        return false;
    }
}
