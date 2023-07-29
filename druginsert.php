<?php
          $conn = mysqli_connect("localhost", "root", "", "pharmacybyshree");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$drugname = $_REQUEST['drugname'];
		$drugid = $_REQUEST['drugid'];
		$dealerid = $_REQUEST['dealerid'];
		$drugquantity = $_REQUEST['drugquantity'];
		$money = $_REQUEST['money'];
        

        
        $sql = "INSERT INTO drugs (drug_name,drug_id,dealer_id,drug_quantity,money_dr) VALUES(' $drugname','$drugid','$dealerid','$drugquantity','$money' )";
		   $sql1="SELECT * FROM drugs WHERE drug_id='$drugid'";

		   $res=mysqli_query($conn,$sql1);

		   if(mysqli_num_rows($res)==0) {

		    if(mysqli_query($conn,$sql)) {
			   header("location: drug.php");
		   }else{
			   echo "ERROR: Hush! Sorry."
			   .mysqli_error();
		   }
		   }
		   else{
			   echo "Error:Drug Already Exist";
			   ?>
			   <br>
			<button><a href="drug.php">Go BACK</a></button>
		   <?php
		   }

		mysqli_close($conn);
		?>
