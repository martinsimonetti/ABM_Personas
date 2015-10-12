<?php
	require_once('clases/Personas.php');

	$mensaje = "Bienvenido .";
	if(isset($_POST['idParaBorrar']))
	{
		$resultado = Persona::BorrarPersona($_POST['idParaBorrar']);
		$mensaje = "SE HA BORRADO EXITOSAMENTE!!!";
	}
?>	
	<form name="frmBorrar" method="POST" >
		<input type="hidden" name="idParaBorrar" id="idParaBorrar" />
	</form>
	
	<form name="frmModificar" method="POST" action="formAlta.php" >
		<input type="hidden" name="idParaModificar" id="idParaModificar" />
	</form>

	<div class="container">
		<div class="page-header">
			<center><h3><?php echo $mensaje; ?></h3><h1> Ejemplo de Grilla</h1> </center>     
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>Listado de personas</h1>
			<?php		
					include_once"partes/grilla.php";
	 			?>
		</div>
	</div>
</body>
</html>