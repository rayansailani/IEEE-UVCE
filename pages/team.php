<?php 
	session_start();
	include 'libraries/cakes.php'; 
?>
<!--HTML boiler plate-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" sizes="192x192" href="../assets/logo.png">
	<title>IEEE-UVCE Team</title>
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
		<a class="navbar-brand" href="../index.php">
			<img src="../assets/logo.png" width="40" height="40" alt="ieeeuvce">
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"> <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav">
					<a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
					<a class="nav-link" href="events.php">Events</a>
					<a class="nav-link" href="gallery.php">Gallery</a>
					<a class="nav-link" href="#">Team</a>
			</div>
			<div class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['user_name'])) {
                    echo '<a href="profile.php" class="nav-item nav-link active"><i class="fa fa-user-o">  '.$_SESSION['user_name'].'</i></a>';
                    echo '<a href="../login/logout.php" class="nav-item nav-link">Logout</a>';
                }
                else{
                    echo '<a href="../register/register.php" class="nav-item nav-link">Register</a>
                            <a href="../login/login.php" class="nav-item nav-link">Login</a>';
                }
            ?>
        </div>
		</div>
	</nav>
	
	<?php
		$person=array("Dr. Venugopal K R","Dr. P Deepa Shenoy","Dr. Kiran K","Dr. Venkatesh M",
			      "Dr. Lata B T","Dr. Pushpa C N","Prof. H S Veena","Dr. K P Guruswamy",
			      "Dr. Thriveni J","Dr. B M Rajaprakash","Dr. Rekha H B",
			      "Kennith O Koshy",
			     "Hamsa Shree N A","Sandya Shree N","Vishal M Kanthi",
			      "Rajat R Lingadalli","Vikas Gowda L V",
			      "Pruthvi Raj R ",
			      "Devika K N","Sanketh Rajshekhar Patil",
			      "Gokula Krishnan S ","Jitendra Prasad K K",
			      "Sanjana Ramesh","Srinivas K","Maanasa H B",
			      "Mahima Pradeep",
			      "Supriya V Kurpad","Varsha Nagesh","D S L Rasagnya",
			      "Sriram K K","Charan M K","Pooja Hegde","Ajantha Hebbar","Munnoli Sammed Jaykumar",
			      "Swaminathan S","Anam Ali","Nimitha J",
			      "Sunkeerth M","Varsha S Bhat","Naveen Kumar N",
			      "Harshitha B R","Harish Ramesh","Niveditha G","Harshini B R","Anusha L ",
			      
			      "Venkateshprasad","Vinay Desai","Ajay J",
			      "Nivedita Kulkarnni",
			      "Aditya Shetty",
			      "Manoj Kumar A","Mohammed Rayan Sailani",
			      "Anisha K S","Saurabh S Bharadwaj",
			      
			     "Keerthi N C","Shubham N J","Srinidhi S Prasad","Kavya Bhat","Shriya A","Kruthin N",
			      "Mohith Varma VS","Shrinidhi P","Neha H","Nilkant Bharat Gunjote","Sukhada G Rao",
			     "Kalyan K R","Kishan S T","Deeksha Kalkatte L","Deepak K S","Kalyan Kumar P","Karthik K S",
			      "Rajendraprasad G C");
	
		$post=array("Branch Patron","Branch Advisor","Branch Counselor","Branch Mentor", 
				"Branch Mentor","WIE Advisor","PES Advisor","PELS Advisor", 
				"SIGHT Faculty Mentor","MDC Advisor", "Civil Advisor","Chairperson",
			   "Vice-Chairperson","Vice-Chairperson","Vice-Chairperson","Treasurer","Joint Treasurer",
			    "General Secretary","Joint Secretary","Joint Secretary","Membership Development Committee Chair",
			    "Membership Secretary",
			    "Chairperson","Vice-Chairperson","Coordinator",
			    "Chairperson","Vice-Chairperson","General Secretary","Joint Secretary",
			    "Chairperson","Vice-Chairperson","Vice-Chairperson","General Secretary","Joint Secretary",
			    "Joint Secretary","NCode Secretary","NCode Secretary",
			    "Chairperson","General Secretary","Joint Secretary",
			    "Chairperson","Vice-Chairperson","Vice-Chairperson","General Secretary","Coordinator",
			    
			    "President","Secretary","Coordinator",
			    "President",
			    "President",
			    "President","Secretary",
			    "Joint Secretary","Joint Secretary",
			    
			    "RepCom Member","RepCom Member","RepCom Member","RepCom Member","RepCom Member",
			    "RepCom Member","RepCom Member","RepCom Member","RepCom Member","RepCom Member",
			    "RepCom Member","RepCom Member","RepCom Member","RepCom Member","RepCom Member",
			    "RepCom Member","RepCom Member","RepCom Member");
	
	
		$n=count($person);
		$lim = intval($n/3)+1;
		$c=0;
	?>
	
	
	
	<h1 class="mt-4 mb-4 text-center fade">Team IEEE UVCE</h1>
	<div class="container">
		
	<div class="row">
		<div class="col">
			<div class="card border-dark mt-4 mb-4 text-center" style="margin-left:14%;margin-right:14%;">
  				<div class="card-body p-5">
   					<h5 class="card-title"><?=$person[$c]?></h5>
   					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col">
			<div class="card border-dark mt-4 mb-4 text-center" style="margin-left:14%;margin-right:14%;">
  				<div class="card-body p-5">
   					<h5 class="card-title"><?=$person[$c+1]?></h5>
   					<p class="card-text"><?=$post[$c+1]?></p>
  				</div>
			</div>
		</div>
	</div>
		
	<div class="row">
		<div class="col">
			<div class="card border-dark mt-4 mb-4 text-center" style="margin-left:14%;margin-right:14%;">
  				<div class="card-body p-5">
   					<h5 class="card-title"><?=$person[$c+2]?></h5>
   					<p class="card-text"><?=$post[$c+2]?></p>
  				</div>
			</div>
		</div>
	</div>
		
	<? $c+=2; ?>		
		
	<div class="row">
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-5">
   					<h5 class="card-title"><?=$person[$c+1]?></h5>
   					<p class="card-text"><?=$post[$c+1]?></p>
  				</div>
			</div>
		</div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-5">
   					<h5 class="card-title"><?=$person[$c+2]?></h5>
   					<p class="card-text"><?=$post[$c+2]?></p>
  				</div>
			</div>
		</div>
	</div>
		
	<?php $c+=3; ?>
		
	<div class="row">
		<? for($i=0;$i<3;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-5">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
		
	<div class="row">
		<? for($i=0;$i<3;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-5">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
		
	
		
		
	<!---------EXECOM-------->	
		
	<!--Chair-->
	<h1 class="mt-5 mb-4 text-center fade">Executive Committee</h1>
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
		
	<?php $c++; ?>

		
	<!--Vice Chair-->
	<div class="row">
		<? for($i=0;$i<3;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
	
		
	<!--Treasurer and joint treasurer-->	
	<div class="row">
		<? for($j=0;$j<2;$j++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
	
	
	<!--gen sec-->
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>	
		
	<?php $c++; ?>
	
		
	<!--joint sec and membership-->	
	<? for($i=0;$i<2;$i++) { ?>
	<div class="row">
		<? for($j=0;$j<2;$j++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
	<? } ?>
	
	
	<h1 class="mt-5 mb-4 text-center fade">Student Activities Committee (SAC)</h1>
	<!--sac vice and chair-->
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
		
	<!--SAC co-->
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
		
	<?php $c++; ?>

		
	
		
	
	<!--WIE-->
	<h1 class="mt-5 mb-4 text-center fade">Women In Engineering (WIE)</h1>
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
		
	<!--vice chair,gen,joint-->
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
		
		
	<!--CS-->
	<h1 class="mt-5 mb-4 text-center fade">Computer Society (CS)</h1>
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
		
	<?php $c++; ?>	
	
	<!--vice chair-->
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
		
	<!--gen-->
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
		
	<?php $c++; ?>	
	
	<!--joint-->
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
		
	<!--Ncode-->
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>		
	
		
	
	<!--PES chair-->
	<h1 class="mt-5 mb-4 text-center fade">Power & Energy Society (PES)</h1>
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
		
	<?php $c++; ?>

		
	<!--pes vice and co-->
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
	
	
	
	<!--SIGHT-->
		
	<!--sight chair-->
	<h1 class="mt-5 mb-4 text-center fade">Special Interest Group on Humanitarian Technology (SIGHT)</h1>
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
		
	<?php $c++; ?>	
	
	<!--vice chair-->
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
		
	<!--sight gen and co-->
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
	
	
	<!--ROBOTICS-->
	<!--robotics chair-->
	<h1 class="mt-5 mb-4 text-center fade">Robotics</h1>
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
		
	<?php $c++; ?>

		
	<!--robo vice and co-->
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
		
		
	<!--graphic design-->
	<!--gd chair-->
	<h1 class="mt-5 mb-4 text-center fade">Graphic Design</h1>
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
		
	<?php $c++; ?>	
		
		
	
	<!--art forum-->
	<!--art forum chair-->
	<h1 class="mt-5 mb-4 text-center fade">Art Forum</h1>
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<div class="card border-dark m-4 text-center">
  				<div class="card-body p-4">
    					<h5 class="card-title"><?=$person[$c]?></h5>
    					<p class="card-text"><?=$post[$c]?></p>
  				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>
		
	<?php $c++; ?>		
		
	
	
	<!--WEB-->
	<!--web chair and gen-->
	<h1 class="mt-5 mb-4 text-center fade">Web Development</h1>
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
		
	
	<!--lit-->
	<!--lit both-->
	<h1 class="mt-5 mb-4 text-center fade">Literary Club</h1>
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>		
		
		
		
		
		
		
	<!---------RepCOM-------->	
	<h1 class="mt-5 mb-4 text-center fade">Representative Committee</h1>
	<div class="row">
		<? for($i=0;$i<3;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
	
		
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
		
		
	<? for($i=0;$i<2;$i++) { ?>
	<div class="row">
		<? for($j=0;$j<3;$j++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
	<? } ?>
	
		
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
		
		
		
	<!--civil repcom-->
	<h1 class="mt-5 mb-4 text-center fade">Civil Representatives</h1>
	<div class="row">
		<? for($i=0;$i<2;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>
		
	<div class="row">
		<? for($i=0;$i<3;$i++) { ?>
			<div class="col">
				<div class="card border-dark m-4 text-center">
  					<div class="card-body p-4">
    						<h5 class="card-title"><?=$person[$c]?></h5>
    						<p class="card-text"><?=$post[$c]?></p>
  					</div>
				</div>
			</div>
		<? $c++; } ?>
	</div>	
		
		
		
		
	</div>
	<br><br>

	
	
</body>
	
	
<?php include 'footer.php'; ?>
	
	
<script>
	$('.navbar-nav>a').on('click', function(){
	        $('.navbar-collapse').collapse('hide'); 
	     });
	     
	     $(window).on("load",function() {
	  $(window).scroll(function() {
	    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
	    $(".fade").each(function() {
	      /* Check the location of each desired element */
	      var objectBottom = $(this).offset().top + $(this).outerHeight();
	      
	      /* If the element is completely within bounds of the window, fade it in */
	      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
	        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
	      }/* else { //object goes out of view (scrolling up)
	        if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
	      }*/
	    });
	  }).scroll(); //invoke scroll-handler on page-load
	});
</script>
<script>
	var i;

for(i=0;i<8;i++){
// Get the modal
var modal = document.getElementById("myModal"+i);

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg"+i);
var modalImg = document.getElementById("img"+i);
var captionText = document.getElementById("caption"+i);
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[i];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
}
</script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
	@media (min-width:961px)  { .modal-content { object-fit: cover;width: 100%;height: 400px; } /* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) { .modal-content { object-fit: cover;width: 100%;height: 400px; } /* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) { .modal-content { object-fit: cover;width: 100%;height: 400px; } /* hi-res laptops and desktops */ }
</style>
<style>
	.sigcontainer {
	  position: relative;
	  width: 100%;
	}
	
	.image {
	  display: block;
	  width: 100%;
	  height: auto;
	}
	
	.overlay {
	  position: absolute;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  height: 100%;
	  width: 100%;
	  opacity: 0;
	  transition: .5s ease;
	  background-color: #000;
	}
	
	.sigcontainer:hover .overlay {
	  opacity: 1;
	}
	
	.text {
	  color: white;
	  font-size: 20px;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  -webkit-transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  transform: translate(-50%, -50%);
	  text-align: center;
	}
	
	
	
	/*Media Queries*/
	@media (min-width:320px)  { /* smartphones, iPhone, portrait 480x320 phones */ }
	@media (min-width:481px)  { /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
	@media (min-width:641px)  { /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
	@media (min-width:961px)  { .caro { object-fit: cover;width: 100%;height: 600px; } /* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) { .caro { object-fit: cover;width: 100%;height: 600px; } /* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) { .caro { object-fit: cover;width: 100%;height: 600px; } /* hi-res laptops and desktops */ }
	
</style>


</html>
