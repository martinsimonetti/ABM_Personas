<?php
	require_once('clases/Personas.php');

	$mensaje = "Bienvenido.";
?>	
	<div class="container">
		<div class="page-header">
			<center><h1> Ejemplo de Grilla</h1> </center>     
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