function ValidarLogin()
{
	//alert("Login");
	var email=$("#email").val();
	var recordar=$("#recordarme").is(':checked');

	//alert(email);
	//alert(recordar);

	var funcionAjax=$.ajax({
		url:"partes/guardarUsuario.php",
		type:"post",
		data:{
			recordarme:recordar,
			email:email
		}
	});

	funcionAjax.done(function(retorno){
		//alert("done");
		Mostrar('Menu');
	});

	funcionAjax.fail(function(retorno){
		alert(retorno);	
	});
	
}