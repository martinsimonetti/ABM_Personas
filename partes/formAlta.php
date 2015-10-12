<?php     
	require_once("clases\Personas.php");

	$titulo = "ALTA";
	if(isset($_POST['idParaModificar'])) //viene de la grilla
	{
		$unaPersona = Persona::TraerUnaPersona($_POST['idParaModificar']);
		$titulo = "MODIFICACIÓN";
	} 
?>
	<div class="container">
		<div class="page-header">
			<center> <h1>Datos</h1> </center>     
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1> <?php echo $titulo; ?> </h1>

			<form id="FormIngreso" onsubmit="GuardarPersona();return false" enctype="multipart/form-data" >
				<input type="text" name="apellido" id="apellido" placeholder="ingrese apellido" /><span id="lblApellido" style="display:none;color:#FF0000;width:1%;float:right;font-size:80">*</span>
				<input type="text" name="nombre" id="nombre" placeholder="ingrese nombre" /> <span id="lblNombre" style="display:none;color:#FF0000;width:1%;float:right;font-size:80">*</span>
				<input type="text" name="dni" id="dni" placeholder="ingrese dni" /> <span id="lblDni" style="display:none;color:#FF0000;width:1%;float:right;font-size:80">*</span><p style='color: black;'>*El DNI no se puede modificar.</p>
				<input type="hidden" name="idOculto" id="idOculto"/>
				<input type="file" name="foto" id="foto"/>
				<input type="hidden" id="hdnAgregar" name="agregar" />


				<img  src="fotos/pordefecto.png" class="fotoform"/>
				<p style="  color: black;">*La foto se actualiza al guardar.</p>

				<input type="submit" class="btn btn-info " name="guardar" onclick="return Validar()" class="glyphicon glyphicon-save"/>


				
				
			</form>
		</div>
		
<?php 

/*if(isset($_POST['agregar']) && $_POST['agregar'] === "Guardar")// si esto no se cumple ingreso por primera vez.
{


	if($_POST['idOculto'] != "")//Solo para la foto
	{
		$unaPersona = Persona::TraerUnaPersona($_POST['idOculto']);
		$foto=$unaPersona->GetFoto();
		
	}else
	{
		$foto="pordefecto.png";
	}

	

	if(!isset($_FILES["foto"]))
	{
		// no se cargo una imagen
	}
	else
	{
		if($_FILES["foto"]['error'])
		{
			//error de imagen
		}
		else
		{
			$tamanio =$_FILES['foto']['size'];
    		if($tamanio>1024000)
    		{
    				// "Error: archivo muy grande!"."<br>";
    		}
    		else
    		{
    			//OBTIENE EL TAMAÑO DE UNA IMAGEN, SI EL ARCHIVO NO ES UNA
				//IMAGEN, RETORNA FALSE
				$esImagen = getimagesize($_FILES["foto"]["tmp_name"]);
				if($esImagen === FALSE) 
				{
							//NO ES UNA IMAGEN
				}
				else
				{
					$NombreCompleto=explode(".", $_FILES['foto']['name']);
					$Extension=  end($NombreCompleto);
					$arrayDeExtValida = array("jpg", "jpeg", "gif", "bmp","png");  //defino antes las extensiones que seran validas
					if(!in_array($Extension, $arrayDeExtValida))
					{
					   //"Error archivo de extension invalida";
					}
					else
					{
						//$destino =  "fotos/".$_FILES["foto"]["name"];
						$destino = "fotos/". $_POST['dni'].".".$Extension;
						$foto=$_POST['dni'].".".$Extension;
						//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
    					if (move_uploaded_file($_FILES["foto"]["tmp_name"],$destino))
    					{		
      						 echo "ok";
      					}
      					else
      					{   
      						// algun error;
      					}



					}

				}
    		}			
		}
	}






	if($_POST['idOculto'] != "")//paso por grilla y luego guardo
	{
		$PersonaBuscada = Persona::TraerUnaPersona($_POST['idOculto']);
		$PersonaBuscada->SetFoto($foto);
		$PersonaBuscada->SetApellido($_POST['apellido']);
		$PersonaBuscada->SetNombre($_POST['nombre']);
		//$PersonaBuscada->SetDni($_POST['dni']);		
		$retorno = Persona::ModificarPersona($PersonaBuscada);
	}
	else// si es un alta
	{
		$PersonaNueva = new Persona();	
		$PersonaNueva->SetFoto($foto);
		$PersonaNueva->SetApellido($_POST['apellido']);
		$PersonaNueva->SetNombre($_POST['nombre']);
		$PersonaNueva->SetDni($_POST['dni']);
		persona::InsertarPersona($PersonaNueva);

	}	
}*/
?>
</div>