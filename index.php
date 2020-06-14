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
	<link rel="shortcut icon" type="image/x-icon" sizes="192x192" href="assets/logo.png">
	<title>IEEE-UVCE</title>
	<link rel="stylesheet" href="refine/style.css">
	<script src="refine/features.js"></script>
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
			<img src="assets/logo.png" width="40" height="40" alt="ieeeuvce">
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"> <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav">
					<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#about">About</a>
					<a class="nav-link" href="#sigs">SIG</a>
					<a class="nav-link" href="#awards">Awards</a>
					<a class="nav-link" href="pages/events.php">Events</a>
					<a class="nav-link" href="pages/team.php">Team</a>
					<a class="nav-link" href="pages/gallery.php">Gallery</a>
			
			</div>
		<div class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['user_name'])) {
                    echo '<a href="pages/profile.php" class="nav-item nav-link active"><i class="fa fa-user-o">  '.$_SESSION['user_name'].'</i></a>';
                    echo '<a href="login/logout.php" class="nav-item nav-link">Logout</a>';
                }
                else{
                    echo '<a href="register/register.php" class="nav-item nav-link">Register</a>
                            <a href="login/login.php" class="nav-item nav-link">Login</a>';
                }
            ?>
        </div>
		</div>
	</nav>
	
	
	
	<!--carousel-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/carousel1.jpg" alt="First slide" class="d-block img-fluid caro">
    </div>
    <div class="carousel-item">
      <img src="assets/carousel2.jpg" alt="First slide" class="d-block img-fluid caro">
    </div>
    <div class="carousel-item">
      <img src="assets/carousel1.jpg" alt="First slide" class="d-block img-fluid caro">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	
	
	
	
	
	
	
	
	
	<!--About-->
	<div id="about" class="m-5">
		<div class="text-center">
			<h1 class="animate__animated animate__fadeIn animate__delay-1s mt-4 mb-4">IEEE UVCE</h1>
			<p class="animate__animated animate__fadeIn animate__delay-2s">IEEE Student Branch of UVCE endeavors to enhance the learning experience of the student community on the UVCE campus. The Student Branch intends on providing different social, cultural and technical events for the students throughout the year. We encourage the students to take full advantage of the benefits of IEEE membership, including scholarships, competitions, and conference grants. The Student Branch also emphasizes the students to work with peers in other institutes, academicians, professionals, engineers, and scientists through the on campus IEEE Student Branch and the Local IEEE Section, thereby encouraging students to be a part of the global IEEE community.</p>
		</div>
	</div>
	
	<!--student branch-->
	<div id="#" class="m-5">
		<div class="card">
			<img src="assets/mainposter.jpg" class="card-img-top" alt="fest">
		</div>
	</div>
	<br>
	
	<?php
		$sig_desc=array("IEEE Women in Engineering (WIE) is a global network of IEEE members and volunteers dedicated to promoting women engineers and scientists, and inspiring girls around the world to follow their academic interests in a career in engineering and science. IEEE UVCE WIE is an Affinity group under IEEE UVCE. It's goal is to facilitate the recruitment and retention of women in technical disciplines globally. We envision a vibrant community of IEEE women and men collectively using their diverse talents to innovate for the benefit of humanity.","Computer Society is one of the most prominent societies that comes under IEEE UVCE. It acts as a great platform for students of all branches to learn more and contribute to the computing world. Computer Society has been conducting many events since its inception which includes our yearly hackathon CodeFury, our monthly coding competition NCode and several workshops to kindle student's interest to update their knowledge on new upcoming technological advances and improve their programming skills as well.","Power and Energy Society is a new student chapter under IEEE UVCE, started in April 2019. The main aim of the Society is to strengthen the technical skills of interested students from all branches, but mainly concentrated on students of electronics and electrical branches. It conducts many technical events, talks and industrial visits.  A monthly Electronics and Electrical Challenge Voltorb is also conducted, through which students can test their technical strengths.","SIGHT is an ensemble in IEEE that focuses on projects that are beneficial to the society. It gives enthusiastic groups of engineers a platform to reach out to different sectors of people in different walks of life, thereby changing lives one at a time towards their better future by solving their everyday problems by providing a technology based solution.","Robotics club was formed in 2005 to further the understanding of the field. Students from various discipline have collaborated to keep this club active for last 14 years. With the wake of recent developments in technology, robotics predominates the important sectors and also demands a new approach. The club has shouldered several workshops, events and peer-to-peer training programs for teaching robotics to everyone who were curious and interested and intends to form a strong community of roboticists in UVCE. It commits to the fundamentals for rethinking the design and to build efficient robots with advanced capabilities.","The Web Development SIG was started in April 2017. This is the web tweaking pavilion of IEEE UVCE. It specialises in conducting all the web related competitions and workshops for IEEE UVCE. Workshops on HTML and CSS and contests on front end designing have been conducted.","The design team of IEEE UVCE consists of Graphic designers who design and conduct workshops on Adobe Illustrator and Photoshop. This SIG gives opportunities to the students to be a part of the design team for various events conducted by IEEE UVCE. It was started in April 2017.","Literary club functions as a part of IEEE UVCE with a motto of harnessing the linguistic skills. It conducts activities to develop communication and creative writing abilities of students. This club helps in enhancing the communication skills of students and helps them communicate their ideas and innovations in a clear and efficient way.","The IEEE UVCE Art Forum is a club that provides artistic opportunities beyond the walls of the classroom. Art Forum is for all those students who are passionate and interested in art. It promotes creative qualities among students. Its goal is to promote active participation of students in different events conducted by the club and also to promote student involvement in activities which gives them the opportunity to put forward their creative ideas.");
	?>
	
	<!--SIG-->
	<h1 class="mt-4 mb-4 text-center fade">SIG's</h1>
	<div class="fade" id="sigs"></div>
	<div class="m-4">
		<?$c=1; for($j=1;$j<=3;$j++){ ?>
			<div class="m-4">
				<div class="card-deck m-2">
					<? for($i=1;$i<=3;$i++){ ?>
					<div class="card m-4">
						<div class="sigcontainer">
							<img src="assets/logo.png" class="img-fluid" style="width:100%" alt="image">
							<div class="overlay">
								<!--<figcaption class="text text-center">-->
								<div style="overflow-y:scroll;height:200px">
									<p class="m-4" style="color:#fff"><?=$sig_desc[$c-1]?></p>
								</div>
								<!--</figcaption>-->
							</div>
						</div>
					</div>
					<? $c++;} ?>
				</div>
			</div>
			<? } ?>
	</div>
	
	
	
	
	
	
	<div class="fade" id="awards"></div>
	<br>
	<!--Awards-->
	<div class="m-2">
		<div class="row m-2">
			<div class="col">
				<img src="assets/awards.jpg" class="img-fluid" style="width:100%">
			</div>
		</div>
	</div>
	<br>
	
	
	
	
	
</body>
	
	
<!-- Footer -->
<footer class="page-footer font-small" style="background-color:#E3E2DF;">

  <!-- Footer Links -->
  <div class="container">

    
  

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 0.8rem"><a class="m-2" href="mailto:mahith.98@gmail.com " target="_blank"><i class="fa fa-envelope"> </i> Mahith Shetty</a><br><br><!--<a>Phone : +91 9845207684</a></p>-->
	      <a class="p-2" href="https://goo.gl/maps/P43RC7Qphrq" target="_blank">				
                        <i class="fa fa-map-marker"></i> UVCE, K.R Circle, B.R Ambedkar Veedhi, Bengaluru	                        
                    </a>
      </div>
				                   
      <!-- Grid column -->

    </div>
    
      <!-- Grid column -->


  </div>
	<div class="container">
		<div class="text-center">
			<i class="fa fa-facebook m-2"></i>		
			<i class="fa fa-youtube m-2"></i>		
			<i class="fa fa-twitter m-2"></i>		
			<i class="fa fa-linkedin m-2"></i>		
			<i class="fa fa-instagram m-2"></i>
		</div>
	</div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© Copyright:
    <a href="#">ieeeuvce</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
	
	
	
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
