<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>

<ul>
                <li><a href="adminpage.php" class="button">ADMIN</a></li>
                <li><a href="medicine.php" class="button">MEDICINE</a></li>
                <li><a href="Dealer.php" class="button">DEALER</a></li></li>
                <li><a href="drug.php" class="button">DRUG</a></li>
                <li><a href="stock.php"class="button">STOCK</a></li>
                <li><a href="#"class="button">USER ORDER DETAILS</a></li>
                <li><a href="index.php"class="button">LOGOUT</a></li>
                
                
            </ul>

            <div style="margin-left:25%;padding:1px 16px;height:1000px;">

<?php
$con=mysqli_connect('localhost', 'root', '', 'pharmacybyshree');

$result = mysqli_query($con,"SELECT * FROM bought");
$i=1;
   
echo "<table border='1' class='table table-bordered'>
 <tr>
 <th>ID</th>
   <th>MEDICINE NAME</th>
   <th>QUANTITY</th>
   <th>COST</th>
   <th>AMOUNT</th>
 </tr>";

echo "<tbody id='myTable'>";
while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td>$i</td>";
   $i++;
   echo "<td>" . $row['medicine_name'] . "</td>";
   echo "<td>" . $row['quantity'] . "</td>";
   echo "<td>" . $row['cost'] . "</td>";
   echo "<td>" . $row['price'] . "</td>";
   

  
   echo "</tr>";
}
echo "</tbody>";
echo "</table>";

mysqli_close($con);


?>
 
</body>
</html>
<?php