<?php 
/*CONTROLADORES*/
require_once "controllers/template.controller.php";

require_once "controllers/productos.controller.php";

/*MODELO*/
require_once "models/productos.model.php";



$template = new ControllerTemplate();
$template -> template();

?>