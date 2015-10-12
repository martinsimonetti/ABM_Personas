<?php 
	//require_once("clases/AccesoDatos.php");
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
		case 'GuardarPersona':
			$persona = new Persona();
			$persona->SetId($_POST['id']);
			$persona->SetApellido($_POST['apellido']);
			$persona->SetNombre($_POST['nombre']);
			$persona->SetDni($_POST['dni']);
			$persona->SetFoto($_POST['foto']);
			$cantidad = Persona::GuardarPersona($persona);		
			echo $cantidad;
			break;

		default:
			# code...
			break;
	}

?>