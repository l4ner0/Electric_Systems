<?php
	
	/*Archivos para PHPMailer*/

	require_once "Controladores/template.controlador.php";
	require_once "Controladores/email.controlador.php";
	require_once "Modelos/template.modelo.php";
	require_once "Funciones/constantes.funciones.php";
	require_once "Modelos/email.modelo.php";
	
	$plantilla = new ControladorPlantilla();

	$plantilla -> ctrPlantilla();	