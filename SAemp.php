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
      <li><a href="SAadmin.php" id="update">Ver Administradores</a></li>    
  </ul>
</div>
</body>
</html>

<?php
include('functions.php');
	/*
	
	Viendo la funcion en el archivo functions.php, tiene mucho mas sentido 
	colocar los parametros de la forma que lo coloco abajo, asi otra persona 
	que lea el codigo sabra que es lo que esta pasando y como usar esa funcion
	
	Tambien seria bueno colocar un valor por defecto a $field -$orderByField- que
	sea comun en todas las tablas (id, created_at, etc), asi la podrias usar en 
	cualquier tabla sin problemas
	
	*/
	SearchAll($table = "empleados", $orderByField = "cid_emp");
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
								<th><label class= 'labelazo'>Genero</label><br></th>											
								<th><label class= 'labelazo'>Estado</label><br></th>	
							</tr>";
						while($row= $list->fetch_assoc()){
						echo "<tr>
								<td>".$row['nombre_emp']." </td>
								<td>".$row['ape_emp']."</td>
								<td>".$row['cid_emp']." </td>
								<td>".$row['telf_emp']." </td>
								<td> ".$row['correo_emp']." </td>		 
								<td> ".$row['genero_emp']." </td>
								<td>".$row['status_emp']." </td>
							</tr>
				";
			}
		}else{
			echo "<script> alert('Error: No se encontraron registros')
					window.location.href='index.html';</script>";
		}
?>
