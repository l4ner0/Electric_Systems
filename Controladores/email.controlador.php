<?php

class ControladorEmail{
	public  function ctrEnviarEmail($datosAjax){
		if(isset($datosAjax)){
			$nombres=$datosAjax["nombres"];
			$email=$datosAjax["email"];
			$mensaje=$datosAjax["mensaje"];
			$respuesta = ModeloEmail::mdlEnviarCorreo($email,$nombres,$mensaje);
		}
	}
}