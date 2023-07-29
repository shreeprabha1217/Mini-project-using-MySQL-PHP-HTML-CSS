

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
                <li><a href="medicine.php" class="button">MEDICINE</a></li>
                <li><a href="#" class="button">DEALER</a></li></li>
                <li><a href="drug.php" class="button">DRUG</a></li>
                <li><a href="stock.php"class="button">STOCK</a></li>
                <li class="nav"><a href="adminuserorder.php"class="button">USER ORDER DETAILS</a></li>
                <li><a href="index.php?logout='1'"class="button">LOGOUT</a></li>
            </ul>

            <div style="margin-left:25%;padding:1px 16px;">
            <div class="container">

           <h2>ADD DEALER</h2>
         <form action="dealerinsert.php">
          <div class="form-group">
      <label for="dealername">Dealer name:</label>
      <input type="text" class="form-control" id="" placeholder="Enter dealer name" name="dealername">
    </div>
    <div class="form-group">
      <label for="pwd">Dealer ID:</label>
      <input type="text" class="form-control" id="" placeholder="Enter dealer id" name="dealerid">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
 </form>

 </div>
</div>




<div style="margin-left:25%;padding:1px 16px;">
            <div class="container">
<h2>Delete dealer</h2>
         <form action="dealerdelete.php">
   
    <div class="form-group">
      <label for="delete dealer">Dealer ID:</label>
      <input type="text" class="form-control" id="deldealer" placeholder="Enter Dealer id" name="deldealer">
    </div>
    
    <button type="submit" class="btn btn-primary">Delete</button>
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

   $result = mysqli_query($con,"SELECT * FROM  DEALER");
   
   echo "<table border='1' class='table table-bordered'>
    <tr>
      <th>DEALER ID</th>
      <th>DEALER NAME</th>
      
    </tr>";

   echo "<tbody id='myTable'>";
   while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
     
      echo "<td>" . $row['dealer_id'] . "</td>";
      echo "<td>" . $row['dealer_name'] . "</td>";
      
     
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
