<?php

	echo "Mejorado";

?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset='utf-8'/>
		<link rel='stylesheet' type= 'text/css' href='css/animations.css'>
		<title>Modificar</title>
	</head>
	<body>
			<div class='titulazo'>
				<h2></h2>
					<div class='search'>
						<form action='buscar.php' method='POST'>  
							<label class= 'labelazo' for= 'busqueda'>Buscar Empleado:</label>
								<input type='search' name='buscar' class='txtlogin'>
								<input type='submit' value='buscar' class='envio'>
						</form>
					</div>
			</div>
		 <div id='menuv'>
				<ul>
						<li><a href='#menuv' id='search'>Actualizar Empleados</a></li>
						<li><a href='#menuv' id='update'>Buscar</a></li>
						<li><a href='#menuv' id='delete'>Borrar</a></li>    
				</ul>
		</div>
		<div>
	</body>
</html>
