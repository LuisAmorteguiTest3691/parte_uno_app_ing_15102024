<?php

// controladores
require_once 'controladores/plantilla.controlador.php';
require_once 'controladores/categorias.controlador.php';

// modelos
require_once 'modelos/categorias.modelo.php';

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();