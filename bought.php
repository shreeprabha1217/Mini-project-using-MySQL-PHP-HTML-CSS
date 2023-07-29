
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    

<?php

$con=mysqli_connect('localhost', 'root', '', 'pharmacybyshree');

$un=$_SESSION['Uname'];

$b1=0;
$b2=0;
$b3=0;
$b4=0;
$b5=0;
$b6=0;
$b7=0;
$b8=0;
$total=0;

$b1=$_REQUEST['quantity1'];
$b2=$_REQUEST['quantity2'];
$b3=$_REQUEST['quantity3'];
$b4=$_REQUEST['quantity4'];
$b5=$_REQUEST['quantity5'];
$b6=$_REQUEST['quantity6'];
$b7=$_REQUEST['quantity7'];
$b8=$_REQUEST['quantity8'];


if($b1>0){
    $total += $b1*85;
    $sum=$b1*85;
    $sql_stock_ins = "INSERT into bought(medicine_name,quantity,cost,price,username) values('Bayer aspirin','$b1','85','$sum','$un')";
    mysqli_query($con,$sql_stock_ins);
    $sql_stock = "UPDATE stock set stocks=stocks-$b1 where medicine_name='Bayer aspirin'";
    mysqli_query($con,$sql_stock);
}
else{
    $b1=0;
   
}
if($b2>0){
    $total += $b2*170;
    $sum=$b2*170;
    $sql_stock_ins = "INSERT into bought(medicine_name,quantity,cost,price,username) values('Children Tylenol','$b2','170','$sum','$un')";
    mysqli_query($con,$sql_stock_ins);
    $sql_stock = "UPDATE stock set stocks=stocks-$b2 where medicine_name='Children Tylenol'";
    mysqli_query($con,$sql_stock);
}
else{
    $b2=0;
    

}
if($b3>0){
    $total += $b3*120;
    $sum=$b3*120;
    $sql_stock_ins = "INSERT into bought(medicine_name,quantity,cost,price,username) values( 'ibuProfen','$b3','120','$sum','$un')";
    mysqli_query($con,$sql_stock_ins);
    $sql_stock = "UPDATE stock set stocks=stocks-$b3 where medicine_name='ibuProfen'";
    mysqli_query($con,$sql_stock);
}
else{
    $b3=0;
}
if($b4>0){
    $total += $b4*145;
    $sum=$b4*145;
    $sql_stock_ins = "INSERT into bought(medicine_name,quantity,cost,price,username) values( 'Motrin','$b4','145','$sum','$un')";
    mysqli_query($con,$sql_stock_ins);
    $sql_stock = "UPDATE stock set stocks=stocks-$b4 where medicine_name='Motrin'";
    mysqli_query($con,$sql_stock);
}
else{
    $b4=0;
}
if($b5>0){
    $total += $b5*120;
    $sum=$b5*120;
    $sql_stock_ins = "INSERT into bought(medicine_name,quantity,cost,price,username) values( 'Naproxen','$b5','120','$sum','$un')";
    mysqli_query($con,$sql_stock_ins);
    $sql_stock = "UPDATE stock set stocks=stocks-$b5 where medicine_name='Naproxen'";
    mysqli_query($con,$sql_stock);
}
else{
    $b5=0;
}
if($b6>0){
    $total += $b6*50;
    $sum=$b6*50;
    $sql_stock_ins = "INSERT into bought(medicine_name,quantity,cost,price,username) values( 'Paracetamol','$b6','50','$sum','$un')";
    mysqli_query($con,$sql_stock_ins);
    $sql_stock = "UPDATE stock set stocks=stocks-$b6 where medicine_name='Paracetamol'";
    mysqli_query($con,$sql_stock);
}
else{
    $b6=0;
}
if($b7>0){
    $total += $b7*100;
    $sum=$b7*100;
    $sql_stock_ins = "INSERT into bought(medicine_name,quantity,cost,price,username) values( 'Tylenol','$b7','100','$sum','$un')";
    mysqli_query($con,$sql_stock_ins);
    $sql_stock = "UPDATE stock set stocks=stocks-$b7 where medicine_name='Tylenol'";
    mysqli_query($con,$sql_stock);
}
else{
    $b7=0;
}
if($b8>0){
    $total += $b8*75;
    $sum=$b8*75;
    $sql_stock_ins = "INSERT into bought(medicine_name,quantity,cost,price,username) values( 'vikas','$b8','75','$sum','$un')";
    mysqli_query($con,$sql_stock_ins);
    $sql_stock = "UPDATE stock set stocks=stocks-$b8 where medicine_name='vikas'";
    mysqli_query($con,$sql_stock);
}
else{
    $b8=0;
}

$result = mysqli_query($con,"SELECT * FROM bought where username='$un'");
$i=1;
   
echo "<table border='1' class='table table-bordered'>
 <tr>
 <th>ID</th>
   <th>USERNAME</th>
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
   echo "<td>" . $row['username'] . "</td>";
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
