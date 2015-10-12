<?php
	session_start();
	if(isset($_SESSION['registrado'])){
?>

<div class="CajaInicio animated bounceInRight">
	<h1>PERSONAS</h1>

	<form id="FormIngreso">
		<a onclick="Mostrar('Alta')" class="list-group-item  list-group-item list-group-item-info">
			<h4 class="list-group-item-heading">Alta de Personas</h4>
		</a>

		<a onclick="Mostrar('Grilla')" class="list-group-item  list-group-item list-group-item-info">
			<h4 class="list-group-item-heading">Grilla de Personas</h4>
		</a>
	</form>
</div>

<?php }else{    echo"<h3>usted no esta logeado. </h3>"; }?>