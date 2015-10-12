<html>
	<head>
		<title>Ejemplos de ABM - con archivo de texto</title>
		  
			<?php require_once"partes/referencias.php" ;?>
			<!--final de Estilos-->     
	       
	</head>
	<body>
		<?php		
		 require_once"partes/barraDeMenu.php";
		?>
		<div class="container">

			<div class="page-header " >
			<h1>ABM - con archivo de texto Versión 1.0.2 Con foto</h1>      
			</div>

			<div id="principal">
				<?php 
					if(!isset($_SESSION['registrado']))
					{
						include_once("partes/formLogin.php");
					}
					else
					{
						include_once("partes/menuPrincipal.php");
					}
				?>
			</div>

		</div>
	</body>
</html>