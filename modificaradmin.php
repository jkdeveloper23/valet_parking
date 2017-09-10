<?php
$n_admin= $_POST['n_admin'];
$a_admin= $_POST['a_admin'];
$t_admin= $_POST['t_admin'];
$mail_admin= $_POST['mail_admin'];
$pass_admin= $_POST['pass_admin'];
$cid_admin= $_POST['cid_admin'];
$c_admin= $_POST['c_admin'];

if ($n_admin!= "") {
	include('functions.php');
		Modifyadmin("nombre_admin", $n_admin, $c_admin);
			echo "<script> alert('Se ha modificado el ADMINISTRADOR con exito')
					window.location.href='reg_empleados.html';</script>";				
}
if ($a_admin!= "") {
	include('functions.php');
		Modifyadmin("apellido_admin", $a_admin, $c_admin);
			echo "<script> alert('Se ha modificado el ADMINISTRADOR con exito')
					window.location.href='reg_empleados.html';</script>";
}
if ($cid_admin!= "") {
	include('functions.php');
		Modifyadmin("cedula_admin", $cid_admin, $c_admin);
		echo "<script> alert('Se ha modificado el ADMINISTRADOR con exito')
				window.location.href='reg_empleados.html';</script>";
}
if ($t_admin!= "") {
	include('functions.php');
		Modifyadmin("telf_admin", $t_admin, $c_admin);
		echo "<script> alert('Se ha modificado el ADMINISTRADOR con exito')
				window.location.href='reg_empleados.html';</script>";
}
if ($mail_admin!= "") {
	include('functions.php');
		Modifyadmin("correo_admin", $mail_admin, $c_admin);
		echo "<script> alert('Se ha modificado el ADMINISTRADOR con exito')
				window.location.href='reg_empleados.html';</script>";
}
if ($pass_admin!= "") {
	include('functions.php');
		Modifyadmin("password_admin", $pass_admin, $c_admin);
		echo "<script> alert('Se ha modificado el ADMINISTRADOR con exito')
				window.location.href='reg_empleados.html';</script>";
}
?>