<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'login');
if(isset($_POST['submit']))
{
$name=$_POST['user'];
$pass=$_POST['password'];
$q="select * from sanket";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body>
	<div class="container">
	<div class="col-lg-12">
		<h1 class="text-center text-warning mt-5">DISPLAY</h1><br>
		<table class="table table-striped table-hover table-bordered ">
			
			<tr class="text-center">
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Insert</th>
				<th>Update</th>
				<th>Delete</th>

				
			</tr>
<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'login');
$q="select * from sanket";
$result=mysqli_query($con,$q);
while($res=mysqli_fetch_array($result)){

?>


			<tr class="text-center">
				<td><?php echo $res['id'];?></td>
				<td><?php echo $res['name'];?></td>
				<td><?php echo $res['password'];?></td>


				<td><button class="btn btn-primary"><a href="login.php?id=<?php echo $res['id'];?>" class="text-white">Signin</a></button></td>


				<td> <button class="btn btn-success">
				 <a href="update.php?id=<?php echo $res['id'];?>" class="text-white"> Update </a>
				</button></td>


				<td> <button class="btn btn-danger"> 
					<a href="delete.php?id=<?php echo $res['id'];?>" class="text-white"> Delete </a>
				</button></td>

				
				
			</tr> 


			<?php
                  }

			?> 
		</table>
		

	</div>
</div>

</body>
</html>