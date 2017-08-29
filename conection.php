<?php

$conn= new mysqli("localhost", "root", "","valet_parking");

	if($conn->connect_error){

		echo "no existe la conexion";
	}
?>