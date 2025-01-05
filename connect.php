<?php
	$servername = 'localhost';
	$username = 'root';
	$pass = '';
	$database = 'hosiptal';

	$conn = mysqli_connect($servername,$username,$pass,$database);
	if ($conn) {
		echo "Database connected Successfully<br>";
		// code...
	}



?>