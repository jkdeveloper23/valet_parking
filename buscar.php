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

			echo "<table align= 'center'>
					<tr>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Cedula</td>
						<td>Telefono</td>
						<td>Correo</td>
						<td>Genero</td>
						<td>Estatus</td>
					</tr>
					<tr>
						<td>".$nombre."</td>
						<td>".$apellido."</td>
						<td>".$ci."</td>
						<td>".$telf."</td>
						<td>".$correo."</td>
						<td>".$genero."</td>
						<td>".$status."</td>";

			}else{
				echo "<script> alert('Error: El empleado no esta en nuestra base de datos')
				window.location.href='reg_empleados.html';</script>";
			}

}else{
	echo "<script> alert('Error: El campo no puede estar vacio')
	window.location.href='reg_empleados.html';</script>";
}
?>