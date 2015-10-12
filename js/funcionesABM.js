function GuardarPersona()
{
		//alert("Guardar");
		var id=$("#idOculto").val();
		//alert(id);
		var apellido=$("#apellido").val();
		//alert(apellido);
		var nombre=$("#nombre").val();
		//alert(nombre);
		var dni=$("#dni").val();
		//alert(dni);
		var foto=$("#foto").val();
		//alert(foto);

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarPersona",
			id:id,
			apellido:apellido,
			nombre:nombre,
			dni:dni,
			foto:foto
		}
	});
	funcionAjax.done(function(retorno){
			//alert("done");
			Mostrar('Grilla');
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});
}

function BorrarPersona(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarPersona",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("Grilla");		
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);	
	});	
}

function EditarPersona(idParametro)
{	
	//alert(idParametro);
	Mostrar('Alta');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerPersona",
			id:idParametro
		}
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		var persona =JSON.parse(retorno);
		$('#idOculto').val(persona.id);
		//alert(persona.id);
		$('#apellido').val(persona.apellido);
		//alert(persona.apellido);
		$('#nombre').val(persona.nombre);
		//alert(persona.nombre);
		$('#dni').val(persona.dni);
		//alert(persona.dni);	
		$('#foto').val(persona.foto);
		//alert(persona.foto);
		$('#titulo').text("MODIFICACIÓN");
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});
}