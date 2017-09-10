<!doctype html>
<html lan="es">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/animations.css">
</head>  
<body>
  <div class="titulazo">
    <h2>Empleados</h2>
      <div class="search">
        <form action="buscar.php" method="POST">  
          <label class= "labelazo" for= "busqueda">Buscar Empleado:</label>
            <input type="search" name="buscar" class="txtlogin">
            <input type="submit" value="buscar" class="envio">
        </form>
      </div>
  </div>

<div id="menuv">
  <ul>
      <li><a href="reg_empleados.html" id="search">Registrar Empleados</a></li>
      <li><a href="SAemp.php" id="update">Ver Empleados</a></li>    
  </ul>
</div>
</body>
</html>

<?php
include('functions.php');
	SearchAll("usuarios", "cedula_admin");
		if ($list->num_rows > 0) {
			
		echo "<div class= 'bresults'>
				<center>
						<table class= 'consultadota'>
							<tr>
								<th><label class= 'labelazo'>Nombre</label><br></th>
								<th><label class= 'labelazo'>Apellido</label><br></th>
								<th><label class= 'labelazo'>Cedula</label><br></th>
								<th><label class= 'labelazo'>Telefono</label><br></th>
								<th><label class= 'labelazo'>Correo</label><br></th>
								<th><label class= 'labelazo'>Contraseña</label><br></th>
								<th><label class= 'labelazo'>Modificar</label><br></th>
							</tr>";
						while($row= $list->fetch_assoc()){
						echo "<tr>
									<td><form action= 'modificaradmin.php' method= 'POST'><input type= 'text' name= 'n_admin' class='iinvisible' placeholder= ".$row['nombre_admin']." ></td>
									<td><input type= 'text' name= 'a_admin' class='iinvisible' placeholder= ".$row['apellido_admin']."></td>
									<td><input type= 'text' name= 'cid_admin' class='iinvisible' placeholder= ".$row['cedula_admin']." ></td>
									<td><input type= 'text' name= 't_admin' class='iinvisible' placeholder= ".$row['telf_admin']." ></td>
									<td><input type= 'text' name= 'mail_admin' class='iinvisible' placeholder=  ".$row['correo_admin']." ></td>	 
									<td> <input type= 'text' name= 'pass_admin' class='iinvisible' placeholder= ".$row['password_admin']." ></td>
									<input type= 'hidden' name= 'c_admin' value= ".$row['cedula_admin'].">
									<td><input type= 'submit' value= 'Modificar' class= 'envio'></form></td>
								</tr>";		
						}	echo "</table><br>		  
						</center>
				</div>";

		}else{
			echo "<script> alert('Error: No se encontraron registros')
					window.location.href='index.html';</script>";
		}
?>