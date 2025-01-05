<?php
	include 'connect.php';
		$sql = "create table Doctor(Doctor_id int primary key,
				Doctor_name varchar(255),
				Specialization varchar(255),
				Qualification varchar(255),
				contact_number int
					)";
			
			

		if ($conn-> query($sql) ) {
			echo "Table is created successfully";
			// code...
		}
		else {
			echo "Table is not created ";
			// code...
		}


?>