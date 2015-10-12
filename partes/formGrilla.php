<?php
	require_once('clases/Personas.php');

	$mensaje = "Bienvenido.";
	session_start();
	if(isset($_SESSION['registrado'])){
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
<?php }else{    echo"<h3>usted no esta logeado. </h3>"; }?>
