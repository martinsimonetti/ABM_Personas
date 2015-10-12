<?php
	require_once('clases/Personas.php');

	$ArrayDePersonas = Persona::TraerTodasLasPersonas();

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>  Foto   </th>				
					<th>  Nombre     </th>
					<th>  Apellido   </th>
					<th>  Dni        </th>
					<th>  BORRAR     </th>
					<th>  MODIFICAR  </th>
				</tr> 
			</thead>";   	

		foreach ($ArrayDePersonas as $personaAux){

			echo " 	<tr>
						<td><img  class='fotoGrilla' src='fotos/".$personaAux->foto."' /></td>
						
						<td>".$personaAux->nombre."</td>
						<td>".$personaAux->apellido."</td>
						<td>".$personaAux->dni."</td>
						<td><button class='btn btn-danger' name='Borrar' onclick='BorrarPersona(".$personaAux->id.")'>   <span class='glyphicon glyphicon-remove-circle'>&nbsp;</span>Borrar</button></td>
						<td><button class='btn btn-warning' name='Modificar' onclick='EditarPersona(".$personaAux->id.")'><span class='glyphicon glyphicon-edit'>&nbsp;</span>Modificar</button></td>
					</tr>";
		}	
	echo "</table>";		
?>
