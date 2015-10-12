<?php 
	session_start();
	$email=$_POST['email'];
	$recordar=$_POST['recordarme'];
			
	if($recordar=="true")
	{
		setcookie("registro",$email,  time()+36000 , '/');
		
	}else
	{
		setcookie("registro",$email,  time()-36000 , '/');
		
	}
	$_SESSION['registrado']= $email;
?>