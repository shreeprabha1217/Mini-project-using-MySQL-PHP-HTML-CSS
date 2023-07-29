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
        $mfd = $_REQUEST['mfd'];
        $exp = $_REQUEST['exp'];
		$medicinetype=$_REQUEST['medicinetype'];
		$rate=$_REQUEST['rate'];


		$sqli="SELECT * FROM medicine where medicine_name='$medicinename'";
        $res=mysqli_query($conn,$sqli);
		if(mysqli_num_rows($res)>0){
			echo "ERROR: Hush! Sorry . ";
			echo "<a href=\"medicine.php\">go back</a>";
				
		}
		else{
        $sql = "INSERT INTO medicine (medicine_name, medicine_id, MFD, EXP,medicine_type,rate) VALUES('$medicinename ','$medicineid','$mfd','$exp','$medicinetype','$rate')";

		$result=mysqli_query($conn,$sql) or die ("Error in query: $query. ".mysqli_error());
		
		if($result){
			header("Location: medicine.php");
		} else{
			echo "ERROR: Hush! Sorry  "
				. mysqli_error($conn);
		}
	}

		mysqli_close($conn);
		?>
