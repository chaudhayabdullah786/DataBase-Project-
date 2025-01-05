<?php
	include 'connect.php';
	$sql = "Update doctor 
			set Doctor_id = 2
			where Doctor_id = 4
			";
		if ($conn-> query($sql)) {
				// code...
				echo "Data Updated Successfully";
			}	
		else{
			echo "Invalid Entries";
		}	

?>