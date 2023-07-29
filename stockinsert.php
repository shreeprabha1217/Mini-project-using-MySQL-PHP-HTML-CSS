<?php
          $conn = mysqli_connect("localhost", "root", "", "pharmacybyshree");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$medicinename = $_REQUEST['medicinename'];
		$medicineid = $_REQUEST['medicineid'];
        $stock = $_REQUEST['stock'];
       
        
        $sql = "INSERT INTO stock (medicine_name, medcine_id, stocks) VALUES('$medicinename ','$medicineid','$stock')";

		
		
		if(mysqli_query($conn, $sql)){
			header("Location: stock.php");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
