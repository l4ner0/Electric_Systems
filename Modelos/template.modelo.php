<?php 

	class Enlaces{

		public function mdlEnlacesPaginas ($enlaces){

			$menus = array("empresa","productos","servicios");

			foreach ($menus as $key) {
			      if (preg_match("/".$key."/i",$enlaces)) {
			        if(file_exists("Vistas/Modulos/".$key."/".$enlaces.".php")){
        				$module = "Vistas/Modulos/".$key."/".$enlaces.".php";
	     		 	}
			      }else	if(file_exists("/Vistas/Modulos/".$enlaces.".php")){
        				$module = "Vistas/Modulos/".$enlaces.".php";

			      } else if($enlaces == "inicio"){
			      		$module = "Vistas/Modulos/inicio.php";
			      }
			}

			if(empty($module)){
				$module = "Vistas/Modulos/404.php";
			}

      		return $module;
		}
	}