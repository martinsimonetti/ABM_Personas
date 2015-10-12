<?php 
	require_once("clases/Personas.php");

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
		case 'GuardarLogin':
			include("partes/GuardarUsuario.php");
			break;
		case 'Desloguearse':
			include("partes/desloguearUsuario.php");
			break;
		case 'Login':
			include("partes/formLogin.php");
			break;
		case 'TraerPersona':
			$persona = Persona::TraerUnaPersona($_POST['id']);
			//echo $persona;
			echo json_encode($persona);
			break;
		case 'GuardarPersona':
			$persona = new Persona();
			$persona->id = $_POST['id'];
			$persona->apellido = $_POST['apellido'];
			$persona->nombre = $_POST['nombre'];
			$persona->dni = $_POST['dni'];
			$persona->foto = $_POST['foto'];
			$cantidad = Persona::GuardarPersona($persona);		
			echo $cantidad;
			break;
		case 'BorrarPersona':
			$id=$_POST['id'];
			$cantidad= Persona::BorrarPersona($id);
			echo $cantidad;
			break;
		default:
			# code...
			break;
	}

?>