<?php
	include 'connect.php';
 
    $doctor_id=$_REQUEST['Doctor_id']; 
    $patient_id=$_REQUEST['PATIENT_ID']; 
    $date_of_birth=$_REQUEST['date_of_birth']; 
	$sql88="insert into appointments
	 values('$doctor_id','$patient_id','$date_of_birth')";
	if ($conn-> query($sql88)) {
				// code...
				echo "Data Inserted Successfully";
			}	
		else{
			echo "Invalid Entries";
		}	

?>
