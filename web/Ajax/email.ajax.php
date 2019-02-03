<?php
require_once "../Controladores/email.controlador.php";
require_once "../Modelos/email.modelo.php";
require_once '../Librerias/phpMail/PHPMailer/src/Exception.php';
require_once '../Librerias/phpMail/PHPMailer/src/PHPMailer.php';
require_once '../Librerias/phpMail/PHPMailer/src/SMTP.php';
require_once "../Funciones/constantes.funciones.php";
require_once "../Funciones/templateEmail.funciones.php";

class AjaxEmail{
	public function ajaxEnviarMensaje(){
		$data=array();
		$data = $this->frmContacto;
		$respuesta = ControladorEmail::ctrEnviarEmail($data);
		echo $respuesta;
	}
}
if(isset($_POST["enviarMensaje"])){
	$enviarMensaje = new AjaxEmail();
	$enviarMensaje -> frmContacto = array(
		"nombres" => $_POST["nombres"],
		"email"=> $_POST["email"],
		"mensaje"=> $_POST["mensaje"]
	);
	$enviarMensaje -> ajaxEnviarMensaje();
}