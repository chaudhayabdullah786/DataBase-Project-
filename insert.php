<?php
	include 'connect.php';
	$Doctor_id = $_REQUEST['Doctor_id'];
	$Doctor_Name = $_REQUEST['Doctor_name'];
	$Specialization = $_REQUEST['Specialization'];
	$Qualification = $_REQUEST['Qualification'];
	$contact_number = $_REQUEST['contact_number'];
	

	$sql1 = "insert into Doctor
			values('$Doctor_id','$Doctor_Name','$Specialization','$Qualification','$contact_number')

			";
		if ($conn-> query($sql1)) {
				// code...
				echo "Data Inserted Successfully";
			}	
		else{
			echo "Invalid Entries";
		}	

?>
