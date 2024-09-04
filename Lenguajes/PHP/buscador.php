<?php

function busqueda($consulta, $caracteristica){
    $clima = array(
        "bogota" => "frio",
        "barranquilla" => "Caliente",
        "medellin" => "templado"
    );

    $ubicacion = array(
        "norte" => "Atlantico",
        "sur" => "amazonas",
        "oriente" => "orinoquia",
        "occidente" => "pacifico",
        "centro" => "andina"
    );

    $turismo = array(
        "cartagena" => "Mar",
        "tolima" => "parque del cafe",
        "riohacha" => "desierto",
        "quindio" => "valle"
    );

    switch($consulta){
        case 'clima':
            echo isset($clima[$caracteristica])? $clima[$caracteristica] : "Caracteristica no encontrada";
            break;
        case 'ubicacion':
            echo isset($ubicacion[$caracteristica])? $ubicacion[$caracteristica] : "Caracteristica no encontrada";
            break;
        case 'turismo':
            echo isset($turismo[$caracteristica])? $turismo[$caracteristica] : "Caracteristica no encontrada";
            break;
        default:
        echo "Consulta invalida.";
        break;
    }
}

busqueda('clima', 'bogota');

?>