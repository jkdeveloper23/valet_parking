<?php

$user= $_POST['user'];
$pw= $_POST['pass'];

if ($user!="" && $pw!= ""){
	require('functions.php');
		Starsesion($user, $pw);
		if($pw == $p && $user == $u){
			
			echo "<script> alert('".$name." ha iniciado sesión correctamente')
			window.location.href='reg_empleados.html';</script>";

		}else{
			echo "<script> alert('Usuario y/o contraseña incorrecto')
			window.location.href='index.html';</script>";
		}
}else{
	echo "<script> alert('Debes llenar ambos campos')
			window.location.href='index.html';</script>";
}

?>