<?php
	include 'connect.php';
	$sql = "Update doctor 
			set patient_name = M Hussain
			where patient_name =hussani
			";
		if ($conn-> query($sql)) {
				// code...
				echo "Data Updated Successfully";
			}	
		else{
			echo "Invalid Entries";
		}	

?>