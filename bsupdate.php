<?php
include "connection.php";
echo $id = $_GET['id'];

$email=$_POST['email'];
$pass=$_POST['pswd'];
$qw="SELECT * FROM signin WHERE id='$id'";
$res=mysqli_query($con,$qw);
$num=mysqli_num_rows($res);
if($num==1)
{
  $u="UPDATE sanket SET id='$id',username='$email',password='$pass' WHERE id=$id'";
  $res=mysqli_query($con,$u);
  if(isset($res)){

  }
}
header('location:bsdisplay.php');
?>












<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

<div class="modal-body">
          <div class="container">
  
  <form class="text-left" action="bootstrap.php" method="POST" enctype="multipart/form-data">
    <h1 class="text-center text-primary">Update</h1>
  	
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email"  name="email">
    </div>
    

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pswd">
    </div>
    

    <div class="form-group form-check">
      
    </div>
    <button type="submit" class="btn btn-primary">Done</button>
  </form>
</div>

        </div>
        </body>
</html>