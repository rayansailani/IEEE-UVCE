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
	<link rel="shortcut icon" type="image/x-icon" sizes="192x192" href="ieeeuvce.png">
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

<body style="background-color:#E3E2DF;">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
			<img src="ieeeuvce.png" width="40" height="40" alt="ieeeuvce">
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"> <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav">
					<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#about">About</a>
					<a class="nav-link" href="#">Awards</a>
					<a class="nav-link" href="#">SIG</a>
					<a class="nav-link" href="#">Team</a>
					<a class="nav-link" href="#">Gallery</a>
					<a class="nav-link" href="#">Register</a>
					<a class="nav-link" href="#">Login</a>
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
      <img src="mainieeeuvce.jpg" alt="First slide" class="d-block img-fluid caro">
    </div>
    <div class="carousel-item">
      <img src="caro2.jpg" alt="First slide" class="d-block img-fluid caro">
    </div>
    <div class="carousel-item">
      <img src="mainieeeuvce.jpg" alt="First slide" class="d-block img-fluid caro">
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
			<h1 class="animate__animated animate__fadeIn animate__delay-1s fade mt-4 mb-4">IEEE UVCE</h1>
			<p class="animate__animated animate__fadeIn animate__delay-2s">IEEE Student Branch of UVCE endeavors to enhance the learning experience of the student community on the UVCE campus. The Student Branch intends on providing different social, cultural and technical events for the students throughout the year. We encourage the students to take full advantage of the benefits of IEEE membership, including scholarships, competitions, and conference grants. The Student Branch also emphasizes the students to work with peers in other institutes, academicians, professionals, engineers, and scientists through the on campus IEEE Student Branch and the Local IEEE Section, thereby encouraging students to be a part of the global IEEE community.</p>
		</div>
	</div>
	
	<!--student branch-->
	<div id="#" class="m-5">
		<div class="card">
			<img src="test1.jpg" class="card-img-top" alt="fest">
		</div>
	</div>
	<br>
	
	
	<!--SIG-->
	<h1 class="mt-4 mb-4 text-center fade">SIG's</h1>
	<div class="m-5">
		<?$c=1; for($j=1;$j<=2;$j++){ ?>
			<div class="m-2">
				<div class="card-deck m-2">
					<? for($i=1;$i<=4;$i++){ ?>
					<div class="card m-4 fade">
						<div class="sigcontainer">
							<img src="ieeeuvce.png" class="img-fluid" style="width:100%" alt="image">
							<div class="overlay">
								<!--<figcaption class="text text-center">-->
									<h5>SIG</h5>
								<!--</figcaption>-->
							</div>
						</div>
					</div>
					<? $c++;} ?>
				</div>
			</div>
			<? } ?>
	</div>
	
	
	<!--Fests-->
	
	
	<div class="fade"></div>
	<br>
	<!--Awards-->
	<div class="m-5">
		<div class="row m-2">
			<div class="col">
				<img src="awards.jpg" class="img-fluid" style="width:100%">
			</div>
		</div>
	</div>
	<br>
	
	
	<!--Gallery-->
	<div class="container" id="gallery">

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Gallery</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">
	  
	<? for($i=0;$i<8;$i++) { ?>
    <div class="col-lg-3 col-md-4 col-6">
      	<a href="#gallery" class="d-block mb-4 h-100">
            <img id="myImg<?=$i?>" class="img-fluid img-thumbnail" src="mainieeeuvce.jpg" alt="">
          </a>
    </div>
	  
	  <div id="myModal<?=$i?>" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img<?=$i?>">
  <div id="caption<?=$i?>"></div>
</div>
 <? } ?>
	  
  </div>

</div>
<br>
	
	
	
	
	<!--faculty-->
	
	
	
	
</body>
	
	
<!-- Footer -->
<footer class="page-footer font-small" style="background-color:#fff;">

  <!-- Footer Links -->
  <div class="container">

    
  

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem"><a class="m-2" href="mailto:mahith.98@gmail.com " target="_blank"><i class="fa fa-envelope"> </i> Mahith Shetty</a></p>
	      <br><a>Phone : +91 9845207684</a><br>
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
