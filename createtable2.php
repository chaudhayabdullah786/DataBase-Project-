<?php
	include 'connect.php';
$sql44 = "create table Appointments (
            appointment_id INT PRIMARY KEY,   
            patient_id INT,
            doctor_id INT,
            date_time int,
            FOREIGN KEY (patient_id) REFERENCES Patient(patient_id),
            FOREIGN KEY (doctor_id) REFERENCES Doctor(Doctor_id)
            )";	
			

	
		if ($conn-> query($sql44) ) {
			echo "Table is created successfully";
			// code...
		}
		else {
			echo "Table is not created ";
			// code...
		}


?>

