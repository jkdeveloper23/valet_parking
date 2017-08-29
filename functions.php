<?php

function Norepeatadmin($ci){

	require('conection.php');
		
		$select= mysqli_query($conn, "SELECT nombre_admin, cedula_admin FROM usuarios WHERE cedula_admin=('$ci')")or die(mysqli_error());
		
		$datos= mysqli_fetch_array($select);
		
		$c= $datos['cedula_admin'];
		$n= $datos['nombre_admin'];
		$GLOBALS['c'] = $c;
		$GLOBALS['n'] = $n;
	}

function Starsesion($u, $p){

		require('conection.php');
		
		$select= mysqli_query($conn, "SELECT * FROM usuarios WHERE cedula_admin=('$u') AND password_admin= ('$p')")or die(mysqli_error());
		
		$datos= mysqli_fetch_array($select);
		
		$u= $datos['cedula_admin'];
		$p= $datos['password_admin'];
		$name= $datos['nombre_admin'];
		$GLOBALS['u'] = $u;
		$GLOBALS['p'] = $p;
		$GLOBALS['name']= $name;
}

function Norepeatemp($ci_emp){

		require('conection.php');
		
		$select= mysqli_query($conn, "SELECT nombre_emp, cid_emp FROM empleados WHERE cid_emp=('$ci_emp')")or die(mysqli_error());
		
		$datos= mysqli_fetch_array($select);
		
		$GLOBALS['data']= $datos;
}
function Buscaremp($buscar){
	require('conection.php');
		$select= mysqli_query($conn, "SELECT * FROM empleados WHERE cid_emp=('$buscar') OR nombre_emp=('$buscar')")or die(mysqli_error());
		$data= mysqli_fetch_array($select);
		$GLOBALS['result']= $data;  
}
?>