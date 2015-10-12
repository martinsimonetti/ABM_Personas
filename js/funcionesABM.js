function GuardarPersona()
{
		alert("Guardar");
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