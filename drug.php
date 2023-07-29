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
                <li><a href="dealer.php" class="button">DEALER</a></li></li>
                <li><a href="#" class="button">DRUG</a></li>
                <li><a href="stock.php"class="button">STOCK</a></li>
                <li class="nav"><a href="adminuserorder.php"class="button">USER ORDER DETAILS</a></li>
                <li><a href="index.php?logout='1'"class="button">LOGOUT</a></li>
            </ul>

            <div style="margin-left:25%;padding:1px 16px;">
            <div class="container">

           <h2>ADD DRUG</h2>
         <form action="druginsert.php">
          <div class="form-group">
      <label for="drugname">DRUG NAME:</label>
      <input type="text" class="form-control" id="" placeholder="Enter drug name" name="drugname">
    </div>
    <div class="form-group">
      <label for="drugid">DRUG ID:</label>
      <input type="text" class="form-control" id="" placeholder="Enter drug id" name="drugid">
    </div>
    <div class="form-group">
      <label for="dealerid">DEALER ID:</label>
      <input type="text" class="form-control" id="" placeholder="Enter dealer id" name="dealerid">
    </div>
    <div class="form-group">
      <label for="drugquantity">DRUG QUANTITY:</label>
      <input type="text" class="form-control" id="" placeholder="Enter DRUG QUANTITY" name="drugquantity">
    </div>
    <div class="form-group">
      <label for="money">MONEY:</label>
      <input type="text" class="form-control" id="" placeholder="Enter MONEY" name="money">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
 </form>

 </div>
</div>




<div style="margin-left:25%;padding:1px 16px;">
            <div class="container">
<h2>DELETE DRUG</h2>
         <form action="drugdelete.php">
   
    <div class="form-group">
      <label for="deldrug">Drug ID:</label>
      <input type="text" class="form-control" id="" placeholder="Enter drug id" name="deldrug">
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

   $result = mysqli_query($con,'SELECT * FROM drugs');
   
   echo "<table border='1' class='table table-bordered'>
    <tr>
     
      <th>DRUG NAME</th>
      <th>DRUG ID</th>
      <th>DEALER ID </th>
      <th>DRUG QUANTITY </th>
      <th>MONEY </th>
    </tr>";

   echo "<tbody id='myTable'>";
   while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['drug_name'] . "</td>";
      echo "<td>" . $row['drug_id'] . "</td>";
      echo "<td>" . $row['dealer_id'] . "</td>";
      echo "<td>" . $row['drug_quantity'] . "</td>";
      echo "<td>" . $row['money_dr'] . "</td>";
     
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