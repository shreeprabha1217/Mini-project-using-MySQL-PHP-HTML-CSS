<?php
$con=mysqli_connect("localhost","root","","pharmacybyshree");
$un=$_REQUEST["username"];
$pwd=$_REQUEST["password"];

$qry="SELECT password from userlogin where UserName='$un'";
$result=mysqli_query($con,$qry);
while ($row=mysqli_fetch_array($result))
{
      if ($pwd==$row['password']) 
      {
                  echo '<script> alert("Login Successful");</script>';
                  header('location:userhome.php');
                  session_start();
                  $_SESSION['Uname']=$un;
                  if ($utyp=='admin')
                        header('refresh:0;url=adminLogin.php');
                  else
                        header('refresh:0;url=Dashboard.php');
      }
      else
      {
            echo '<script> alert("Incorrect UserName/User Type/Password");</script>';
            header('refresh:0;url=user.php');
      }
}     
?>