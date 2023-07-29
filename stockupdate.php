<?php
          $conn = mysqli_connect("localhost", "root", "", "pharmacybyshree");
		
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

		$medicine_id = $_REQUEST['medicine_id'];
		$stock = $_REQUEST['stock'];
        echo $stock;

        
		$result = mysqli_query($conn,"SELECT * FROM stock where medcine_id='$medicine_id'");
        while($row = mysqli_fetch_array($result))
		{
			$old_stock= $row['stocks'];
		}	

		$new_stock = $old_stock + $stock;

		$sql_stock = "UPDATE stock set stocks='$new_stock' where medcine_id='$medicine_id'";

        if(mysqli_query($conn, $sql_stock)){
			header("Location: stock.php");
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
	mysqli_close($conn);
       
		
		
		
		
			
		

		mysqli_close($conn);
		?>
