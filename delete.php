<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'login');

$id = $_GET['id'];
$q = " DELETE FROM `sanket` WHERE  id = $id ";
mysqli_query($con,$q);
header('location:logindisplay.php');
?> 