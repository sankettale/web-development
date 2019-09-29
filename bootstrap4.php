<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap 4</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/ico" href="D:\SRT Data\My etc\20180209_212926.png">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	<style>
		*{
			margin:0; padding: 0;
			font-family: 'Lobster', cursive; 
		}
		.container img{
			width: 500px;
			height: 300px;
		}
	</style>
</head>
<body>

<!-- navigation -->
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">SRT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1411_bal-ganesh-wallpaper-13.jpg" width="100%" height="700">
    </div>
    <div class="carousel-item">
      <img src="1411_bal-ganesh-wallpaper-13.jpg"width="100%" height="700">
    </div>
    <div class="carousel-item">
      <img src="1411_bal-ganesh-wallpaper-13.jpg" width="100%" height="700">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</header>

<!-- about us -->
<section>
	<div class="container-fluid">
		<h1 class="text-center m-5">About Us</h1>
		<hr class="w-25 mx-auto pt-5">


		<div class="row mb-5">
		<div class="col-lg-6 col-md-6 col-12">
			<<img src="1411_bal-ganesh-wallpaper-13.jpg" class="img-fluid  ">
			</div>



		<div class="col-lg-6 col-md-6 col-12">
			<h1 class="pt-5">Who Am I ?</h1>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<button class="text-capitalize btn bg-warning ">wanna know me</button>
		</div>
	</div>
	 </div>

</section>

<!-- 
services -->
<section>
	
	<div class="container">
		<h1 class="text-center m-5">Services</h1>
		<hr class="w-25 mx-auto pt-5">

		<div class="row text-center mb-5">
	<div class="col-lg-4 col-md-4 col-12">
		<div class="card" >
  <img style="width: auto; height:300px" class="card-img-top" src="1411_bal-ganesh-wallpaper-13.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Army</h4>
    <p class="card-text">Hows The Josh </p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


	</div>
	

	<div class="col-lg-4 col-md-4 col-12">
		<div class="card">
  <img  style="width: auto; height:300px" class="card-img-top" src="1411_bal-ganesh-wallpaper-13.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Navy</h4>
    <p class="card-text">Hows The Josh </p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


	</div>
	

	<div class="col-lg-4 col-md-4 col-12">
		<div class="card">
  
  <img  style="width: auto; height:300px" class="card-img-top" src="1411_bal-ganesh-wallpaper-13.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Air Force</h4>
    <p class="card-text">Hows The Josh </p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


	</div>
	
</div>
</div>
</section>

<!-- contact -->


<section class="bg-warning">
	<article class="py-5 text-center  ">
		<div>
			<h3 class="display-4">+91 1234567899</h3>
			<p>if you want best service call us now</p>
			<button class="btn bg-info">contact now</button>
		</div>
	</article>
</section>


<!-- gallary -->
<section>
	
	<div class="container">
		<h1 class="text-center m-5">Gallary</h1>
		<hr class="w-25 mx-auto pt-5">
		<div class="row">
			<div class="col-lg-4 col-md-2 col-12 mb-4">
				<img src="1411_bal-ganesh-wallpaper-13.jpg" alt="" class="img-fluid" >
				
			</div>
			<div class="col-lg-4 col-md-2 col-12 mb-4">
				<img src="1411_bal-ganesh-wallpaper-13.jpg" alt="" class="img-fluid" >
				
			</div>
			<div class="col-lg-4 col-md-2 col-12 mb-4">
				<img src="1411_bal-ganesh-wallpaper-13.jpg" alt="" class="img-fluid" >
				
			</div>
			<div class="col-lg-4 col-md-2 col-12 mb-4">
				<img src="1411_bal-ganesh-wallpaper-13.jpg" alt="" class="img-fluid" >
				
			</div>
			<div class="col-lg-4 col-md-2 col-12 mb-4">
				<img src="1411_bal-ganesh-wallpaper-13.jpg" alt="" class="img-fluid" >
				
			</div>
			<div class="col-lg-4 col-md-2 col-12 mb-4">
				<img src="1411_bal-ganesh-wallpaper-13.jpg" alt="" class="img-fluid" >
				
			</div>
		</div>
	</div>
</section>


<!-- register -->


<section class="bg-warning">
	<article class="py-5 text-center  ">
		<div>
			<h3 class="display-4">Want to join</h3>
			<p>Be a part of SRT</p>
			<button class="btn bg-info" data-toggle="modal" data-target="#myModal">Join Now</button>
		</div>


		 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Signup</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> 
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  
  <form class="text-left" action="bootstrap.php" method="POST" enctype="multipart/form-data">
  	
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
 
	</article>
</section>
 <!-- contact us  -->

 <section>
	<div class="w-50 mx-auto">
	<div class="container mb-5">
		<h1 class="text-center m-5">Contact Us</h1>
		<hr class="w-25 mx-auto pt-5">

		  <form action="bootstrap.php" method="POST">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="emai">
    </div>
    <div class="form-group">
      <label for="pwd">Number:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter No." name="no">
    </div>
    <div class="form-group">
      <label for="pwd">Message:</label>
      <textarea class="form-control" name="sms"></textarea>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
</div>

</div>
</section>
<footer>
	<p class="text-center bg-warning"> @copyright SRT.com 2019 </p>
</footer>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>