<?php

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);

echo "<pre>";
print_r($arrayRutas);
echo "<pre>";

if ( count(array_filter($arrayRutas)) == 1 ) {

    /* Cuando no se hace ninguna petición a la API */

    $json = array( "detalle" => "no encontrado" );
    echo json_encode($json, true);
    return;

} else {

    /* Cuando pasamos solo un indice en el array $arrayRutas */

    if ( count(array_filter($arrayRutas)) == 2 ) {

        /* Cuando se hace peticiones desde cursos */
      
        if ( array_filter($arrayRutas)[2] == "cursos" ) {

            $json = array( "detalle" => "estas en la vista cursos" );
            echo json_encode($json, true);
            return;
        }

        /* Cuando se hace peticiones desde registro */

        if ( array_filter($arrayRutas)[2] == "registro" ) {

            $json = array( "detalle" => "estas en la vista registro" );
            echo json_encode($json, true);
            return;
        }
    
    }
}
?>