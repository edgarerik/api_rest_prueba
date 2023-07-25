<?php

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);

/*
echo "<pre>";
print_r($arrayRutas);
echo "<pre>";
*/

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

            if ( isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST" ) {

                $cursos = new ControladorCursos();
                $cursos->create();

            } else if ( isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET" ) {

                $cursos = new ControladorCursos();
                $cursos->index();

            }
        }

        /* Cuando se hace peticiones desde registro */

        if ( array_filter($arrayRutas)[2] == "registro" ) {

            if ( isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET" ) {

                $clientes = new ControladorClientes();
                $clientes->create();

            }
        }
    
    } else {

        if ( array_filter($arrayRutas)[2] == "cursos" && is_numeric(array_filter($arrayRutas)[3]) ) {

            /* Peticiones GET */
            if ( isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET" ) {
                $curso = new ControladorCursos();
                $curso->show( array_filter($arrayRutas)[3] );
            }

            /* Peticiones PUT */
            if ( isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "PUT" ) {
                $editarCurso = new ControladorCursos();
                $editarCurso->update( array_filter($arrayRutas)[3] );
            }

            /* Peticiones DELETE */
            if ( isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "DELETE" ) {
                $borrarCurso = new ControladorCursos();
                $borrarCurso->delete( array_filter($arrayRutas)[3] );
            }

        }

    }
}
?>