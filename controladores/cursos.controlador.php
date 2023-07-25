<?php

class ControladorCursos {

    public function index() {
        $json = array( "detalle" => "estas en la vista cursos index" );
        echo json_encode($json, true);
        return;
    }

    public function create() {
        $json = array( "detalle" => "estas en la vista cursos create" );
        echo json_encode($json, true);
        return;
    }

    public function show($id) {
        $json = array( "detalle" => "este es el curso con el id ... ->" . $id );
        echo json_encode($json, true);
        return;
    }

    public function update($id) {
        $json = array( "detalle" => "curso actualizado correctamente con el id ... ->" . $id );
        echo json_encode($json, true);
        return;
    }

    public function delete($id) {
        $json = array( "detalle" => "curso BORRADO correctamente con el id ... ->" . $id );
        echo json_encode($json, true);
        return;
    }

}

?>