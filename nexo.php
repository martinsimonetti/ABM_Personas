<?php 
	//require_once("clases/AccesoDatos.php");
	//require_once("clases/voto.php");

	$queHago=$_POST['queHacer'];
	switch ($queHago) {
		case 'Grilla':
			include("partes/formGrilla.php");
			break;
		case 'Alta':
			include("partes/formAlta.php");
			break;
		case 'Menu':
			include("partes/menuPrincipal.php");
			break;

		default:
			# code...
			break;
	}

?>