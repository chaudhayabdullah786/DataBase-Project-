<?php
	include 'connect.php';
	$patient_id = $_REQUEST['patient_id'];
	$patient_name = $_REQUEST['patient_name'];
	$date_of_birth = $_REQUEST['date_of_birth'];
	$contact_number = $_REQUEST['contact_number'];
	

	$sql2 = "insert into Patient
			values('$patient_id','$patient_name','$date_of_birth','$contact_number')

			";
		if ($conn-> query($sql2)) {
				// code...
				echo "Data Inserted Successfully";
			}	
		else{
			echo "Invalid Entries";
		}	

?>
