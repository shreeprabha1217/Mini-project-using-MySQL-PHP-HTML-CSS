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
</head>
<body>
    

            <ul>
                <li><a href="#" class="button">DASHBOARD</a></li>
                <li><a href="order.php" class="button">ORDER</a></li>
               
                <li><a href="index.php?logout='1'"class="button">LOGOUT</a></li>
            </ul>
            <div style="margin-left:25%;padding:1px 16px;height:1000px;">
            
  
</body>
</html>

