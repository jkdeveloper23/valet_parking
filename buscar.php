<?php

$search= $_POST['buscar'];

if ($search != "") {
	require('functions.php');
		Buscaremp($search);
			if($result){
				$nombre= $result['nombre_emp'];
				$apellido= $result['ape_emp'];
				$ci= $result['cid_emp'];
				$telf= $result['telf_emp'];
				$correo= $result['correo_emp'];
				$genero= $result['genero_emp'];
				$status= $result['status_emp'];

			echo "<!doctype html>
					<html lan= 'esp'>
						<head>
							<meta charset='utf-8'/>
							<link rel='stylesheet' type= 'text/css' href='css/animations.css'>
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

							<div class= 'bresults'>
								<center>
									<form action= 'modificar.php' method='POST'>
										<table class= 'consultadota'>
											<tr>
												<th><label class= 'labelazo'>Nombre</label><br></th>
												<th><label class= 'labelazo'>Apellido</label><br></th>
												<th><label class= 'labelazo'>Cedula</label><br></th>
												<th><label class= 'labelazo'>Correo</label><br></th>
												<th><label class= 'labelazo'>Genero</label><br></th>											
												<th><label class= 'labelazo'>Telefono</label><br></th>
												<th><label class= 'labelazo'>Estado</label><br></th>	
											</tr>
											<tr>
												<td><input type= 'text' name= 'm_name' placeholder= '".$nombre."'</td>							
												<td><strong class= 'fuertecita'>".$apellido."</strong><br></td>
												<td><strong class= 'fuertecita'>".$ci."</strong><br></td>
												<td><strong class= 'fuertecita'>".$correo."</strong><br></td>
												<td><strong class= 'fuertecita'>".$genero."</strong><br></td>
												<td><strong class= 'fuertecita'>".$telf."</strong><br></td>
												<td><strong class= 'fuertecita'>".$status."</strong><br><td>
											</tr>
										</table>
									</form>
								</center>
								<form action= 'modificar.php' method='POST'>
									<input type= 'hidden' name= 'c_consulta' value= ".$ci.">
									<br><center><input type= 'submit' value= 'Modificar' class= 'envio'></center>
								</form>
								<form action= 'eliminar.php' method='POST'>
									<input type= 'hidden' name= 'c_consulta' value= ".$ci.">
									<br><center><input type= 'submit' value= 'Eliminar' class= 'envio'></center>
								</form>
							</div>
						</body>
					</html>
		";
			}else{
				echo "<script> alert('Error: El empleado no esta en nuestra base de datos')
				window.location.href='reg_empleados.html';</script>";
			}
}else{
	echo "<script> alert('Error: El campo no puede estar vacio')
	window.location.href='reg_empleados.html';</script>";
}
?>