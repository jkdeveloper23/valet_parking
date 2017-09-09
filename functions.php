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
function Modifyemp($db_data, $e_data, $ced_emp){
	require('conection.php');
		mysqli_query($conn, "UPDATE empleados SET $db_data= ('$e_data') WHERE cid_emp= ('$ced_emp')")or die(mysqli_error());
		mysqli_close($conn);
}
function Deleteemp($cedula){
	require('conection.php');
		mysqli_query($conn, "DELETE FROM empleados WHERE cid_emp= ('$cedula')")or die(mysqli_error());
		mysqli_close($conn);
}
function SearchAll($table){
	require('conection.php');
		$result= mysqli_query($conn, "SELECT * FROM $table ORDER BY cid_emp ASC")or die(mysqli_error('error en la query'));
		$GLOBALS['list']=$result;
		mysqli_close($conn);
}
?>