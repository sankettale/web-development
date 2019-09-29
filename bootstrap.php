<?php
session_start();
// header('location:bootstrap4.php');
$con=mysqli_connect('localhost','root','');
if($con){
	echo "connection successful <br>";
}
else{ 
	echo "connection failed";
}
mysqli_select_db($con,'bootstrap')
.$email=$_POST['email'];
$pass=$_POST['pswd'];
$q="select * from signin where username = '$email' && password = '$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
	echo "duplicate data";
}
else{
	$qy= "insert into signin(username , password) values('$email','$pass')";
	mysqli_query($con,$qy);


// contact

          $name=$_POST['name'];
          $emai=$_POST['emai'];
          $number=$_POST['no'];
          $message=$_POST['sms'];

$y= "insert into contact(name , emai , number , massage ) values('$name','$emai','$number','$message')";
	mysqli_query($con,$y);

}
?>