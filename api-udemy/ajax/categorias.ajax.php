<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxCategorias {

    //  VISTA SUBCATEGORIAS
    public $idCategoria;
    public $item;
    public $tabla;

    public function ajaxVistaSubcategorias() {

        // Configuramos el encabezado para que la respuesta sea JSON
        header('Content-Type: application/json');

        $tabla = $this->tabla;
        $item = $this->item;
        $valor = $this->idCategoria;

        // Llamamos al controlador para obtener la respuesta
        $respuesta = ControladorCategorias::ctrMostrarCATySUB($tabla, $item, $valor);

        // Verificamos si la respuesta es válida, y si no, retornamos un error
        if (!$respuesta) {
            echo json_encode([
                "error" => "No se encontraron datos para la categoría."
            ]);
        } else {
            // Retornamos la respuesta como JSON
            echo json_encode($respuesta);
        }
    }
}

/*=============================================
VISTA SUBCATEGORIAS
=============================================*/    
if (isset($_POST["tabla"])) {
    $subcategorias = new AjaxCategorias();
    $subcategorias->idCategoria = $_POST["idCategoria"];
    $subcategorias->item = $_POST["item"];
    $subcategorias->tabla = $_POST["tabla"];
    $subcategorias->ajaxVistaSubcategorias();
}
