<?php
$con=mysqli_connect("localhost","root","","pharmacybyshree");
$un=$_POST["username"];
$pwd=$_POST["password"];
$phno=$_POST["phoneno"];
$eml=$_POST["email"];
$dadd=$_POST['DeliAdd'];
$cty=$_POST['city'];

$qry="Insert into userlogin values ('$un','$pwd','$phno','$eml','$dadd','$cty')";
if (mysqli_query($con,$qry)==TRUE)
{
      echo '<script> alert("Successful");</script>';
      header('refresh:0;url=user.php');
}
else
      echo '<script> alert("Please try again");</script>';
?>