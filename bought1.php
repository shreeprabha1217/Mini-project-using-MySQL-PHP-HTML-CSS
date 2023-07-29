<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <br>
    <br>

<h1 style="position:relative;margin-left:20%;width:20rem;">ORDEREDITEM</h1>
<br>
<br>
<br>
<!-- 
$sql = "SELECT * from building";

if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("Total rows in this table :  %d\n", $rowcount);
 } -->

 $result=mysql_query("SELECT count(*) as total from Students");
$data=mysql_fetch_assoc($result);
echo $data['total'];


<?php
$result=mysql_query("SELECT count(*) as total from bought");
$data=mysql_fetch_assoc($result);
echo $data['total'];

?>
<?php
$con=mysqli_connect('localhost', 'root', '', 'pharmacybyshree');
$b1=0;
$result = mysqli_query($con,"SELECT * FROM medicine");

$b1=$_REQUEST['quantity1'];
session_start();
$username=$_SESSION['Uname'];

$result=mysqli_query($con,"SELECT * FROM stock where medicine_name='$medicine_name'");
while($row=mysqli_fetch_array($result))
{
    $stocks=$row['stocks'];
}
if($b1>0 && $b1<$stocks){
    $total += $b1*85;
    $sum=$b1*85;
    $sql_stock_ins = "INSERT into bought(medicine_name,quantity,cost,price,username) values('Bayer aspirin','$b1',85,'$sum','$username')";
    mysqli_query($con,$sql_stock_ins);
    $sql_stock = "UPDATE stock set stocks=stocks-$b1 where medicine_name='Bayer aspirin'";
    mysqli_query($con,$sql_stock);
    
}
else{
    $b1=0;
}


echo "<table border='1' class='table table-bordered'>
 <tr>
 <th>ID</th>
   <th>Username</th>
   <th>MEDICINE NAME</th>
   <th>QUANTITY</th>
   <th>COST</th>
   <th>AMOUNT</th>

 </tr>";

echo "<tbody id='myTable'>";
while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td>$i</td>";
   echo "<td>" . $row['username'] . "</td>";
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
 <a href="Order.php"class="btn btn-lg btn-primary" style="position:relative;margin-left:20%;width:5rem;">back</a>
</body>
</html>

