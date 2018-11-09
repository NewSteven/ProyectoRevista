<?php
 $linki = new mysqli("localhost", "root", "", "revista");
	$linki->query("SET CHARACTER SET utf8");
	if (mysqli_connect_errno()) {
		die("No se puede conectar a la base de datos:" . mysqli_connect_error());
	}  
?>