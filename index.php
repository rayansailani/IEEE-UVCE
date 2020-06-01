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
    <link rel="shortcut icon" type="image/x-icon" sizes="192x192"  href="ieeeuvce.png">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    
     <!-- Compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->

    <!-- Compiled and minified JavaScript -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
</head>
<body>
     
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="ieeeuvce.png" width="40" height="40" alt="ieeeuvce">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Awards</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="#">Impetus</a>
           <a class="dropdown-item" href="#">Codefury</a>
           <a class="dropdown-item" href="#">Kagada</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SIG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
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
      <img class="img-fluid" src="mainieeeuvce.jpg" alt="First slide" style="width:100%">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="mainieeeuvce.jpg" alt="Second slide" style="width:100%">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="mainieeeuvce.jpg" alt="Third slide" style="width:100%">
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
<br>
    
   <!--About-->
<div id="about" class="container">
    <div class="text-center">
    <h1 class="animate__animated animate__fadeIn animate__delay-1s fade mt-4 mb-4">IEEE UVCE</h1>
        <p class="animate__animated animate__fadeIn animate__delay-2s">IEEE Student Branch of UVCE endeavors to enhance the learning experience of the student community on the UVCE campus. The Student Branch intends on providing different social, cultural and technical events for the students throughout the year. We encourage the students to take full advantage of the benefits of IEEE membership, including scholarships, competitions, and conference grants. The Student Branch also emphasizes the students to work with peers in other institutes, academicians, professionals, engineers, and scientists through the on campus IEEE Student Branch and the Local IEEE Section, thereby encouraging students to be a part of the global IEEE community.</p>
    </div>
</div>
 <br>   
    
    
    <!--events-->
<div id="#" class="container">
    <h1 class="fade text-center mt-4 mb-4">Main Events</h1>
    <div class="card">
     <div class="card-header">
    <div class="text-center">
        <div class="row">
            <div class="col">Impetus</div>
            <div class="col">Codefury</div>
            <div class="col">Kagada</div>
        </div>
    </div>
  </div>
  <img src="test1.jpg" class="card-img-top" alt="fest">
</div>
</div>    
<br>
   
<!--SIG-->
    <h1 class="mt-4 mb-4 text-center fade">SIG's</h1>
    

    
<?$c=1; for($j=1;$j<=2;$j++){ ?>
    <div class="container">
    <div class="card-deck m-2">
    <? for($i=1;$i<=4;$i++){ ?> 
   <div class="card m-4 fade">
     <figure class="sigcontainer">
       <img src="ieeeuvce.png" class="figure-img img-fluid rounded" style="width:100%" alt="image">
         <div class="overlay">
            <figcaption class="text text-center"><h5>SIG</h5></figcaption>
         </div>
     </figure>
   </div> 
  <? $c++;} ?>
      </div> 
     </div>
    <? } ?>    
    
    
 <!--Fests-->
    <div class="row m-2">
        <div class="col"><img src="fest1.jpg" class="img-fluid" style="width:100%"/></div>
        <div class="col"><img src="fest2.jpg" class="img-fluid" style="width:100%"/></div>
    </div>
  
  
</body>
 <script>
     $('.navbar-nav>li>a').on('click', function(){
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
</style> 
    
    
    
    
    <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">©
    <a href="#">ieeeuvce</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
    
</html>
