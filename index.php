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
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/carousel1.jpg" alt="First slide" class="d-block img-fluid caro">
    </div>
    <div class="carousel-item">
      <img src="assets/carousel2.jpg" alt="Secondslide" class="d-block img-fluid caro">
    </div>
    <div class="carousel-item">
      <img src="assets/carousel3.jpg" alt="third slide" class="d-block img-fluid caro">
    </div> 
    <div class="carousel-item">
      <img src="assets/carousel4.jpg" alt="Fourth slide" class="d-block img-fluid caro">
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
			<span id="dots"></span>
			<span id="more" style="display:none;">IEEE UVCE has come to be one of the most recognized student branches across the Region 10 of IEEE. Rekindled in 2001, the student branch has since grown to a strength of over 200 student members every year. The organization has been interminably striving to hoist the student community and the retention of its members. The organization’s commitment to enhancing and upgrading the core knowledge base of its members to the industry standards is reflected in the host of activities organized by it throughout the year.

Two events however stand head and shoulders above the sea of activities. ‘Kagada’ the National level Annual Technical Paper Presentation Competition which has bagged ‘The Darrel Chong Gold Level Activity’ award in the year 2019, aims to inspire undergraduate students to take up research and promote critical thinking. ‘Impetus’ the National Level Technical Extravaganza is conducted with a trending theme, as a part of which, a number of events are organised.

Along with these, ample amount of workshops, symposiums, guest lectures and industrial visits are organised. IEEE UVCE offers support and encouragement to its members by conducting seminars for free and also reduction in the paid hands-on workshop fee. The industrial visits organised provides students a sneak peek into the inner workings of the industries and the thrill of exploration. IEEE UVCE hunts for new talents in college by these events, also helping the members develop their organising, leadership and volunteering skills.</span></p>
		<button onclick="readMore()" id="myBtn" class="btn btn-outline-dark">Read more</button>	
		</div>
	</div>
	
	
	<script>
		function readMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
    moreText.fadeOut(1000);
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
    moreText.fadeIn(1000);
  }
}
	</script>
	
	
	
	<!--student branch-->
	<div id="#" class="m-5">
		<div class="card">
			<img src="assets/mainposter.jpg" class="card-img-top" alt="fest">
		</div>
	</div>
	<br>
	
	<?php
		$sig_title=array("Women in Engineering (WIE) ","Computer Society (CS) ","Power & Energy Society (PES) ",
				"Special Interest Group on Humanitarian Technology (SIGHT) ","Yantrik ","Web Development SIG ",
				"Graphic Design ","Literary Club ","Art Forum SIG ");
		$sig_desc=array("is a global network of IEEE members and volunteers dedicated to promoting 
			women engineers and scientists, and inspiring girls around the world to follow their 
			academic interests in a career in engineering and science. IEEE UVCE WIE is an Affinity group under
			IEEE UVCE. It's goal is to facilitate the recruitment and retention of women in technical 
			disciplines globally. We envision a vibrant community of IEEE women and men collectively
			using their diverse talents to innovate for the benefit of humanity.",
			"is one of the most prominent societies that comes under IEEE UVCE. It acts as a great 
			platform for students of all branches to learn more and contribute to the computing world. 
			Computer Society has been conducting many events since its inception which includes our 
			yearly hackathon CodeFury, our monthly coding competition NCode and several workshops 
			to kindle student's interest to update their knowledge on new upcoming technological 
			advances and improve their programming skills as well."," is a new student chapter under 
			IEEE UVCE, started in April 2019. The main aim of the Society is to strengthen the technical 
			skills of interested students from all branches, but mainly concentrated on students of 
			electronics and electrical branches. It conducts many technical events, talks and industrial visits.
			A monthly Electronics and Electrical Challenge Voltorb is also conducted, through which students
			can test their technical strengths.","is an ensemble in IEEE that focuses on projects that 
			are beneficial to the society. It gives enthusiastic groups of engineers a platform to reach 
			out to different sectors of people in different walks of life, thereby changing lives one at 
			a time towards their better future by solving their everyday problems by providing a technology 
			based solution.","the Robotics club was formed in 2005 to further the understanding of 
			the field. Students from various discipline have collaborated to keep this club active for last
			14 years. With the wake of recent developments in technology, robotics predominates the important 
			sectors and also demands a new approach. The club has shouldered several workshops,
			events and peer-to-peer training programs for teaching robotics to everyone who were curious 
			and interested and intends to form a strong community of roboticists in UVCE. It commits to the 
			fundamentals for rethinking the design and to build efficient robots with advanced capabilities.",
			"Web Development SIG was started in April 2017. This is the web tweaking pavilion of IEEE UVCE.
			It specialises in conducting all the web related competitions and workshops for IEEE UVCE. 
			Workshops on HTML and CSS and contests on front end designing have been conducted.",
			"team of IEEE UVCE consists of passionate designers who design and conduct workshops on 
			Adobe Illustrator and Photoshop. This SIG gives opportunities to the students to be a part 
			of the design team for various events conducted by IEEE UVCE. It was started in April 2017.",
			"functions as a part of IEEE UVCE with a motto of harnessing the linguistic skills.
			It conducts activities to develop communication and creative writing abilities of students.
			This club helps in enhancing the communication skills of students and helps them communicate 
			their ideas and innovations in a clear and efficient way.",
			"is a club that provides artistic opportunities beyond the walls of the classroom. 
			Art Forum is for all those students who are passionate and interested in art. It promotes
			creative qualities among students. Its goal is to promote active participation of students in 
			different events conducted by the club and also to promote student involvement in activities
			which gives them the opportunity to put forward their creative ideas.");
	?>
	
	<!--SIG-->
	<h1 class="mt-4 mb-4 text-center fade">Societies & Special Interest Groups</h1>
	<div class="fade" id="sigs"></div>
	<div class="m-4">
		<?$c=1; for($j=1;$j<=3;$j++){ ?>
			<div class="m-4">
				<div class="card-deck m-2">
					<? for($i=1;$i<=3;$i++){ ?>
					<div class="card m-4">
						<div class="sigcontainer">
							<img src="assets/sigs/sig_<?=$c?>.png" class="img-fluid siglogo" alt="image">
							<div class="overlay">
								<!--<figcaption class="text text-center">-->
								<div class="sig">
									<p class="m-4" style="color:#fff"><b><?=$sig_title[$c-1]?></b><?=$sig_desc[$c-1]?></p>
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
	
	
	
	
	
	
	<h1 class="mt-4 mb-4 text-center fade" id="awards">Awards</h1>
	<br><br>
	<div class="row m-4">
		<?$c=1; for($i=0;$i<4;$i++) { ?>
		<div class="col m-4">
			<div class="card text-white bg-dark">
  				<div class="card-header text-white bg-warning"><i class='fa fa-trophy' style='font-size:18px'></i>&nbsp;&nbsp;&nbsp;&nbsp;Header</div>
  					<div class="card-body">
    					<h5 class="card-title">Title</h5>
   	 				<p class="card-text">Text Goes here</p>
					<img id="myImg<?=$i?>" class="img-fluid thumb-nail" src="../assets/certificates/cert<?=$c?>.jpg" alt="" style="display:none;">
  					<button id="myBtn<?=$i?>" class="btn btn-outline-dark btn-sm">view details</button>	
				</div>
			</div>
		</div>
		
		
		<div id="myModal<?=$i?>" class="modal">
  			<span class="close">&times;</span>
  			<img class="modal-content" id="img<?=$i?>">
  			<div id="caption<?=$i?>"></div>
		</div>
		<? $c++; } ?>
	</div>
	
	<br><br>
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
	
	
<?php include 'pages/footer.php'; ?>
	
	
	
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

for(i=0;i<64;i++){
// Get the modal
var modal = document.getElementById("myModal"+i);

// Get the image and insert it inside the modal - use its "alt" text as a caption
var btn=document.getElementById("myBtn"+i);
var img = document.getElementById("myImg"+i);
var modalImg = document.getElementById("img"+i);
var captionText = document.getElementById("caption"+i);
btn.onclick = function(){
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
	  opacity: 0.75;
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
	@media (min-width:320px)  { .sig { overflow-y:scroll;height:210px } .siglogo { object-fit: cover;width: 100%;height: 200px; }/* smartphones, iPhone, portrait 480x320 phones */ }
	@media (min-width:481px)  {  .sig { overflow-y:scroll;height:380px } .siglogo { object-fit: cover;width: 100%;height: 200px; }/* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
	@media (min-width:641px)  {  .sig { overflow-y:scroll;height:380px } .siglogo { object-fit: cover;width: 100%;height: 200px; } /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
	@media (min-width:961px)  { .caro { object-fit: cover;width: 100%;height: 600px; } .siglogo { object-fit: cover;width: 100%;height: 400px; } .sig { overflow-y:scroll;height:380px } /* tablet, landscape iPad, lo-res laptops ands desktops */ }
	@media (min-width:1025px) { .caro { object-fit: cover;width: 100%;height: 600px; } .siglogo { object-fit: cover;width: 100%;height: 400px; } .sig { overflow-y:scroll;height:380px }/* big landscape tablets, laptops, and desktops */ }
	@media (min-width:1281px) { .caro { object-fit: cover;width: 100%;height: 600px; } .siglogo { object-fit: cover;width: 100%;height: 400px; } .sig { overflow-y:scroll;height:380px } /* hi-res laptops and desktops */ }
	
</style>


</html>
