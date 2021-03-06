<?php 
	include 'libraries/cakes.php'; 
?>
<!--HTML boiler plate-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" sizes="192x192" href="../assets/logo.png">
	<title>IEEE-UVCE</title>
	<link rel="stylesheet" href="style.css">
	<!--bootstrap link-->
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!--font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--bootstrap js-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!--animate.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
	<!-- Compiled and minified CSS -->
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
	<!-- Compiled and minified JavaScript -->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
</head>

<body style="background-color:#fff">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
			<img src="../assets/logo.png" width="40" height="40" alt="ieeeuvce">
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"> <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav">
					<a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
					<!--<a class="nav-link" href="#about">About</a>
					<a class="nav-link" href="#awards">Awards</a>
					<a class="nav-link" href="#sigs">SIG</a>
					<a class="nav-link" href="#">Team</a>
					<a class="nav-link" href="#gallery">Gallery</a>-->

			</div>
			<div class="navbar-nav ml-auto">
				<a class="nav-link" href="#">Register</a>
				<a class="nav-link" href="../login/login.php">Login</a>
			</div>
		</div>
	</nav>
	
  

	
	 <div class="jumbotron">
     <div class="text-center">
        <h1>Create an IEEE account today!</h1>       
     </div>
  </div>
  
 <?php
        $userexists=$_GET['userexists'];
        $emailexists=$_GET['emailexists'];
        $error=$_GET['error'];
    
  ?> 
    
    <div class="container">
       <div class="text-center">
           <?php
            if($userexists)
                echo "<h5>User already exists</h5>";
            else if($emailexists)
                echo "<h5>Email is already registered</h5>";
            else if($error)
                echo "<h5>Something happened. try again</h5>";
           ?>
        </div>
     </div>
	
 <!--Register form-->   
  <form method="POST" action="register_details.php" class="jumbotron m-4">
     <div class="form-group">
        <label for="inputuser">Username</label>
        <input type="text" class="form-control" id="inputuser_name" placeholder="username" name="user_name" required>
    </div>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="email" name="email" required>
    </div>
    <div class="form-group">
	    <label for="inputieeenumber">IEEE number</label> <p class="text-muted">(optional)</p>
        <input type="number" class="form-control" id="inputieeenumber" placeholder="ieeenumber" name="ieeenumber">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
    </div>
	  
    <button type="submit" name="register_user" class="btn btn-dark">Register</button>
	  <p class="text-muted mt-2">Already have an account? <a href="../login/login.php">sign in</a></p>
</form>
  
  
  
  
  
  
  
  
  
  
  </body>
  
 <? include '../pages/footer.php'; ?>
	
</html>
