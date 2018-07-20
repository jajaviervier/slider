<?php 

class ControllerProductos {

	public function ctrMostrarCategorias () {

		$tabla = "categorias";

		$respuesta = ModelProductos::mdlMostrarCategorias($tabla);

		return $respuesta;
	
	}

	static public function ctrMostrarSubCategorias($id) {

		$tabla = "subcategorias";

		$respuesta = ModelProductos::mdlMostrarSubCategorias($tabla, $id);

		return $respuesta;
	}

	static public function ctrMostrarBanner() {

		$tabla = "productos";
		$respuesta = ModelProductos::mdlMostrarBaner($tabla);
		return $respuesta;
	}

}

?>
