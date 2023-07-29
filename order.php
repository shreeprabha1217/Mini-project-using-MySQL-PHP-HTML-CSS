
<?php
session_start();
if (!isset($_SESSION['Uname'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location:user.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location:user.php");
}
?>

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
                <li><a href="userhome.php" class="button">DASHBOARD</a></li>
                <li><a href="#" class="button">ORDER</a></li>
                
                
                <li><a href="index.php"class="button">LOGOUT</a></li>
            </ul>

            <div style="margin-left:25%;padding:1px 16px;">
            <div class="container">

          

 </div>
</div>
           
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<div class="container">
   <form action="bought.php" method="post">
<?php

$i=1;
   $con=mysqli_connect('localhost', 'root', '', 'pharmacybyshree');
   // Check connection
   if(mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $result = mysqli_query($con,"SELECT * FROM medicine m,stock s where  m.medicine_name=s.medicine_name");
   
   echo "<table border='1' class='table table-bordered'>
    <tr>
    <th>ID</th>
      <th>MEDICINE NAME</th>
      <th>MEDICINE ID</th>
      <th>MFD</th>
      <th>EXP DATE</th>
      <th>MEDICINE TYPE</th>
      <th>RATE</th>
      <th>STOCK</TH>
      <th>QUANTITY</th>
   
    </tr>";

   echo "<tbody id='myTable'>";
   while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>$i</td>";
      echo "<td>" . $row['medicine_name'] . "</td>";
      echo "<td>" . $row['medicine_id'] . "</td>";
      echo "<td>" . $row['MFD'] . "</td>";
      echo "<td>" . $row['EXP'] . "</td>";
      echo "<td>" . $row['medicine_type'] . "</td>";
      echo "<td>" . $row['rate'] . "</td>";
      echo "<td>" . $row['stocks'] . "</td>";
      echo "<td> <input name=\"quantity$i\" type=\"number\" VALUE=\"0\" min=\"0\" max=".$row['stocks']."> </td>";
      $i++;
      echo "</tr>";
   }
   echo "</tbody>";
   echo "</table>";

   mysqli_close($con);
 ?>
 <button type="submit" class="btn btn-lg btn-primary" style="position:relative;margin-left:80%;width:10rem;">BUY</button>
 </form>
 </div> 
</div>
    
</body>
</html>