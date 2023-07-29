<?php
          $conn = mysqli_connect("localhost", "root", "", "pharmacybyshree");
		
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

		$drug_id = $_REQUEST['deldrug'];


        
        $sql = "Delete FROM drugs where drug_id='$drug_id'";
		if($sql==0){
			echo "error";
		}
		
		
		if(mysqli_query($conn, $sql)){
			header("Location: drug.php");
		} else{
			echo "ERROR: Hush! Sorry '$sql'. "
				. mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
