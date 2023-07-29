<?php
          $conn = mysqli_connect("localhost", "root", "", "pharmacybyshree");
		
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

		$dealer_id = $_REQUEST['deldealer'];


        
        $sql = "Delete FROM dealer where dealer_id='$dealer_id'";
		if($sql==0) {
			echo "error";
		}
		
		
		if(mysqli_query($conn, $sql)){
			header("Location: dealer.php");
		} else{
			echo "ERROR: Hush! Sorry '$sql'. "
				. mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
