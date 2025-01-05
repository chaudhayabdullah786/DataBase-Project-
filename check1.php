<?php
	

include 'connect.php';
	
	$sq = "delete from Patient
			where patient_id = 4
			";
		if ($conn-> query($sql)) {
				// code...
				echo "Data Deleted Successfully";
			}	
		else{
			echo "Invalid Entries";
		}	

?>