<?php
$m_name= $_POST['m_name'];
$m_ape= $_POST['m_ape'];
$m_ci= $_POST['m_ci'];
$m_telf= $_POST['m_telf'];
$m_mail= $_POST['m_mail'];
$m_gender= $_POST['m_gender'];
$m_status= $_POST['m_status'];
$ci_m= $_POST['ci_m'];

if ($m_name!= "") {
	include('functions.php');
		Modifyemp("nombre_emp", $m_name, $ci_m);
			echo "<script> alert('Se ha modificado correctamente el empleado')
					window.location.href='reg_empleados.html';</script>";				
}
if ($m_ape!= "") {
	include('functions.php');
		Modifyemp("ape_emp", $m_ape, $ci_m);
			echo "<script> alert('Se ha modificado correctamente el empleado')
					window.location.href='reg_empleados.html';</script>";
}
if ($m_ci!= "") {
	include('functions.php');
		Modifyemp("cid_emp", $m_ci, $ci_m);
		echo "<script> alert('Se ha modificado correctamente el empleado')
				window.location.href='reg_empleados.html';</script>";
}
if ($m_telf!= "") {
	include('functions.php');
		Modifyemp("telf_emp", $m_telf, $ci_m);
		echo "<script> alert('Se ha modificado correctamente el empleado')
				window.location.href='reg_empleados.html';</script>";
}
if ($m_mail!= "") {
	include('functions.php');
		Modifyemp("correo_emp", $m_mail, $ci_m);
		echo "<script> alert('Se ha modificado correctamente el empleado')
				window.location.href='reg_empleados.html';</script>";
}
if ($m_gender!= "") {
	include('functions.php');
		Modifyemp("genero_emp", $m_gender, $ci_m);
		echo "<script> alert('Se ha modificado correctamente el empleado')
				window.location.href='reg_empleados.html';</script>";
}
if ($m_status!= "") {
	include('functions.php');
		Modifyemp("status_emp", $m_status, $ci_m);
		echo "<script> alert('Se ha modificado correctamente el empleado')
				window.location.href='reg_empleados.html';</script>";
}
?>