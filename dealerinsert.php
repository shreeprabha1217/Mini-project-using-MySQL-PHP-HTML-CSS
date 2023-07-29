<?php
          $conn = mysqli_connect("localhost", "root", "", "pharmacybyshree");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		
		$dealerid = $_REQUEST['dealerid'];
        $dealername = $_REQUEST['dealername'];
        
        
        $sql = "INSERT INTO dealer (dealer_id, dealer_name) VALUES('$dealerid','$dealername' )";

		
		
		if(mysqli_query($conn, $sql)){
			header("Location: dealer.php");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		mysqli_close($conn);
		?>