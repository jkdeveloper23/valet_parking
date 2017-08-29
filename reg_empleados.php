<?php

$nombre_emp= $_POST['n_emp'];
$ape_emp= $_POST['ape_emp'];
$ci_emp= $_POST['c_emp'];
$tlf_emp= $_POST['t_emp'];
$mail_emp= $_POST['mail_emp'];
$genero_emp= $_POST['genero_emp'];
$foto= $_FILES['picture']['name'];
$tfoto= $_FILES['picture']['size'];
$status_emp= $_POST['estado'];

if ($nombre_emp!= "" && $ape_emp!= "" && $ci_emp!="" && $tlf_emp!="" && $mail_emp!="" && $genero_emp!="" && $foto!= "" && $tfoto <= 200000 && $status_emp!= "") {

	$directoriof= $_SERVER['DOCUMENT_ROOT'].'/img';
	move_uploaded_file($_FILES['picture']['tmp_name'], $directoriof.$foto);
	
	require('functions.php');
		Norepeatemp($ci_emp);

			if($data['cid_emp'] != $ci_emp){
				require('conection.php');
				mysqli_query($conn, "INSERT INTO empleados (nombre_emp, ape_emp, cid_emp, telf_emp, correo_emp, genero_emp, foto_emp, status_emp) VALUES ('$nombre_emp', '$ape_emp', '$ci_emp', '$tlf_emp', '$mail_emp', '$genero_emp', '$foto', '$status_emp')")or die(mysqli_error());
				
				echo "<script> alert('Empleado registrado con exito: Nombre: ".$nombre_emp." C.I: ".$ci_emp."')
					window.location.href='reg_empleados.html';</script>";
				mysqli_close($conn);
			}else{
				echo "<script> alert('Error:: El empleado ".$data['nombre_emp']." posee el C.I: ".$data['cid_emp']."')
					window.location.href='index.html';</script>";
			}
}else{
	echo "<script> alert(Error: Los campos deben estar llenos)
	window.location.href='index.html';</script>";
}
?>