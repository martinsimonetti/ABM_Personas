<?php     
	require_once("clases\Personas.php"); 

	session_start();
	if(isset($_SESSION['registrado'])){
?>
	<div class="container">
		<div class="page-header">
			<center> <h1>Datos</h1> </center>     
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1 id="titulo">ALTA</h1>

			<form id="FormIngreso" method="post" onsubmit="GuardarPersona();return false" enctype="multipart/form-data" >
				<input type="text" name="apellido" id="apellido" placeholder="ingrese apellido" /><span id="lblApellido" style="display:none;color:#FF0000;width:1%;float:right;font-size:80">*</span>
				<input type="text" name="nombre" id="nombre" placeholder="ingrese nombre" /> <span id="lblNombre" style="display:none;color:#FF0000;width:1%;float:right;font-size:80">*</span>
				<input type="text" name="dni" id="dni" placeholder="ingrese dni" /> <span id="lblDni" style="display:none;color:#FF0000;width:1%;float:right;font-size:80">*</span><p style='color: black;'>*El DNI no se puede modificar.</p>
				<input type="hidden" name="idOculto" id="idOculto"/>
				<input type="file" name="foto" id="file"/>
				<input type="hidden" id="hdnAgregar" name="agregar" />


				<img id="imgPerfil" src="fotos/pordefecto.png" class="fotoform"/>
				<p style="  color: black;">*La foto se actualiza al guardar.</p>

				<input type="submit" class="btn btn-info " name="guardar" onclick="return Validar()" class="glyphicon glyphicon-save"/>
				
			</form>
		</div>
	</div>

<?php }else{    echo"<h3>usted no esta logeado. </h3>"; }?>