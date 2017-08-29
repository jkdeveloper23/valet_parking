<?php

$nombre_admin= $_POST['n_user'];
$ape_admin= $_POST['a_user'];
$cid_admin= $_POST['c_user'];
$tlf_admin= $_POST['t_user'];
$correo_admin= $_POST['mail_user'];
$pass_admin= $_POST['pass_user'];
$cpass_admin= $_POST['rpass_user'];

if ($nombre_admin!="" && $ape_admin!= "" && $cid_admin!= "" && $tlf_admin!= "" && $correo_admin!= "" && $pass_admin!= "")  
{
	if($cpass_admin == $pass_admin){
		require('functions.php');
		Norepeatadmin($cid_admin);

		if ($cid_admin!== $c){
			require('conection.php');

			mysqli_query($conn, "INSERT INTO usuarios(nombre_admin, apellido_admin, cedula_admin, telf_admin, correo_admin, password_admin)VALUES('$nombre_admin','$ape_admin', '$cid_admin', '$tlf_admin', '$correo_admin', '$pass_admin')")or die(mysqli_error());
								
					echo "<script> alert('Datos registrados con exito: Nombre: ".$nombre_admin." C.I: ".$cid_admin."')
					window.location.href='index.html';</script>";
						
						mysqli_close($conn);
		}else{
			echo "<script> alert('Error: La C.I: ".$c." ya se encuentra registrada a nombre de: ".$n."')
						window.location.href='index.html';</script>";
		}						
	}else{
		echo "<script> alert('Las contraseñas no coinciden')
					window.location.href='index.html';</script>";
	}
}else{
	echo "<script> alert('Todos los campos deben estar llenos')
				window.location.href='index.html';</script>";
}
?>