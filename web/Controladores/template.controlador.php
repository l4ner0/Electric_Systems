<?php 

	class ControladorPlantilla{


		public function  ctrPlantilla(){
			include 'Vistas/template.php';
		}

		static public function ctrEnlaces(){
			if(isset($_GET["ruta"])){
				$enlaces = $_GET["ruta"];
			}else{
				$enlaces = "inicio";
			}

			$respuesta = Enlaces::mdlEnlacesPaginas($enlaces);

			include $respuesta;
		}
	}