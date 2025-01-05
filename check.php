<?php
	

include 'connect.php';
	
	$sql = "delete from doctor
			where Doctor_id = 4
			";
		if ($conn-> query($sql)) {
				// code...
				echo "Data Deleted Successfully";
			}	
		else{
			echo "Invalid Entries";
		}	

?>