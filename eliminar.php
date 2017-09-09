<?php
$c_delete= $_POST['c_delete'];


	if ($c_delete!= 0){
		include('functions.php');
			Deleteemp($c_delete);
				echo "<script> alert('Empleado borrado correctamente')
					window.location.href='reg_empleados.html';</script>";
	}else{
		echo "<script> alert('La cedula seleccionada ya no existe')
				window.location.href='index.html';</script>";
	}

?>