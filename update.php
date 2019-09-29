<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'login');

if(isset($_POST['sub']))
{
	$id = $_GET['id'];
	
$name=$_POST['user'];
$pass=$_POST['password'];
$qa='update sanket set id = $id, username ="$name", password = "$pass" where id = $id ';
//$qa='UPDATE `sanket` SET `id`=[$id],`name`=[$name],`password`=[$pass] WHERE id=$id';



mysqli_query($con,$qa);
header('location:logindisplay.php');

}
?>






<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<h2 class="font-weight-bold text-center text-warning bg-info">Update</h2>

	<div class="container">
	<form action="logindisplay.php" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="user">
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="sub">Done</button>
</form>
</div>
</body>
</html>