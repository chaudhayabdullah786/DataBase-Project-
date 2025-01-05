<?php
	include 'connect.php';
$sql33 = "create table Patient(patient_id int primary key,
				patient_name varchar(255),
				date_of_birt int,
				contact_number int
					)";			
			

	
		if ($conn-> query($sql33) ) {
			echo "Table is created successfully";
			// code...
		}
		else {
			echo "Table is not created ";
			// code...
		}


?>