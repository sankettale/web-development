<?php
session_start();
header('location:logindisplay.php');
$con=mysqli_connect('localhost','root','');
if($con){
	echo "connection successful";
}
else{
	echo "connection failed";
}
mysqli_select_db($con,'login')
.$name=$_POST['user'];
$pass=$_POST['password'];
$q="select * from sanket where name = '$name' && password = '$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
	echo "duplicate data";
}
else{
	$qy= "insert into sanket(name , password) values('$name','$pass')";
	mysqli_query($con,$qy);
}
?>