

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    

            <ul>
                <li><a href="adminpage.php" class="button">ADMIN</a></li>
                <li><a href="#" class="button">MEDICINE</a></li>
                <li><a href="dealer.php" class="button">DEALER</a></li></li>
                <li><a href="drug.php" class="button">DRUG</a></li>
                <li><a href="stock.php"class="button">STOCK</a></li>
                <li class="nav"><a href="adminuserorder.php"class="button">USER ORDER DETAILS</a></li>
                <li><a href="index.php?logout='1'"class="button">LOGOUT</a></li>
            </ul>

            <div style="margin-left:25%;padding:1px 16px;">
            <div class="container">

           <h2>ADD MEDICINE</h2>
         <form action="medicineinsert.php">
          <div class="form-group">
      <label for="medicinename">Medicine name:</label>
      <input type="text" class="form-control" id="medicinename" placeholder="Enter medicine name" name="medicinename">
    </div>
    <div class="form-group">
      <label for="pwd">Medicine ID:</label>
      <input type="text" class="form-control" id="medicineid" placeholder="Enter medicine id" name="medicineid">
    </div>
    <div class="form-group">
      <label for="mfd">MFD:</label>
      <input type="text" class="form-control" id="mfd" placeholder="Enter mfd" name="mfd">
    </div>
    <div class="form-group">
      <label for="exp">EXP:</label>
      <input type="text" class="form-control" id="exp" placeholder="Enter exp" name="exp">
    </div>
    <div class="form-group">
      <label for="medicine_type">MEDICINE TYPE:</label>
      <input type="text" class="form-control" id="medicine_type" placeholder="Enter medicine type" name="medicinetype">
    </div>
    <div class="form-group">
      <label for="rate">RATE:</label>
      <input type="text" class="form-control" id="rate" placeholder="Enter rate" name="rate">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
 </form>

 </div>
</div>




<div style="margin-left:25%;padding:1px 16px;">
            <div class="container">
<h2>DELETE MEDICINE</h2>
         <form action="medicinedelete.php">
   
    <div class="form-group">
      <label for="delmedicine">Medicine ID:</label>
      <input type="text" class="form-control" id="delmedicine" placeholder="Enter medicine id" name="delmedicine">
    </div>
    
    <button type="submit" class="btn btn-primary">delete</button>
 </form>
</div>
</div>



            
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<div class="container">
<?php
   $con=mysqli_connect('localhost', 'root', '', 'pharmacybyshree');
   // Check connection
   if(mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $result = mysqli_query($con,"SELECT * FROM medicine");
   
   echo "<table border='1' class='table table-bordered'>
    <tr>
      <th>MEDICINE NAME</th>
      <th>MEDICINE ID</th>
      <th>MFD</th>
      <th>EXP DATE</th>
      <th>MEDICINE TYPE</th>
      <th>RATE</th>
    </tr>";

   echo "<tbody id='myTable'>";
   while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['medicine_name'] . "</td>";
      echo "<td>" . $row['medicine_id'] . "</td>";
      echo "<td>" . $row['MFD'] . "</td>";
      echo "<td>" . $row['EXP'] . "</td>";
      echo "<td>" . $row['medicine_type'] . "</td>";
      echo "<td>" . $row['rate'] . "</td>";

     
      echo "</tr>";
   }
   echo "</tbody>";
   echo "</table>";

   mysqli_close($con);
 ?>
 </div> 
</div>
    
</body>
</html>