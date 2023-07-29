<?php
          $conn = mysqli_connect("localhost", "root", "", "pharmacybyshree");
		
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

		$medicine_id = $_REQUEST['delmedicine'];


        
        $sql = "Delete FROM medicine where medicine_id='$medicine_id'";
		if($sql==0){
			echo "error";
		}
		
		
		if(mysqli_query($conn, $sql)){
			header("Location: medicine.php");
		} else{
			echo "ERROR: Hush! Sorry '$sql'. "
				. mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
