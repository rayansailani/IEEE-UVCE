 
<?php 
	session_start();
	include '../libraries/cakes.php'; 
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
					<a class="nav-link active" href="#">Events</a>
					<a class="nav-link" href="gallery.php">Gallery</a>
          				<a class="nav-link" href="team.php">Team</a>
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
	
	$con=getCon();
	
	$events=Array();
	$events2=Array();
	
	//new upcoming events
	$res=$con->query("select * from new_event order by arrange_id asc");
	while($ele = $res->fetch_assoc())
		$events[]=$ele;
	
	//old events
	$res2=$con->query("select * from old_event order by arrange_id desc");
	while($ele2 = $res2->fetch_assoc())
		$events2[]=$ele2;
	//print_r($events);
	
	
	//new events
	$event_id=array();
	$title=array();
	$presenters=array();
	$dateandtime=array();
	$venue=array();
	$arrange_id=array();
	$filename=array();
	
	//old events
	$event_id2=array();
	$title2=array();
	$presenters2=array();
	$dateandtime2=array();
	$venue2=array();
	$filename2=array();
	
	//new events
	foreach($events as $eve)
		$event_id[]=$eve['event_id'];
	foreach($events as $eve)
		$title[]=$eve['title'];
	foreach($events as $eve)
		$venue[]=$eve['venue'];
	foreach($events as $eve)
		$presenters[]=$eve['presenters'];
	foreach($events as $eve)
		$dateandtime[]=$eve['dateandtime'];
	foreach($events as $eve)
		$arrange_id[]=$eve['arrange_id'];
	foreach($events as $eve)
		$filename[]=$eve['filename'];
	
	
	
	
	//old events
	foreach($events2 as $eve2)
		$event_id2[]=$eve2['event_id'];
	foreach($events2 as $eve2)
		$title2[]=$eve2['title'];
	foreach($events2 as $eve2)
		$venue2[]=$eve2['venue'];
	foreach($events2 as $eve2)
		$presenters2[]=$eve2['presenters'];
	foreach($events2 as $eve2)
		$dateandtime2[]=$eve2['dateandtime'];
	foreach($events2 as $eve2)
		$filename2[]=$eve2['filename'];
	
		
	$e=count($title);
	$e2=count($title2);
	
	
	
	
	////register////
	
	$url=array("www.google.com","www.ieeeuvce.in");
	
	////register////
	
?>

	<div class=" container mt-4 mb-4">
	<div class="row text-center">
		<div class="col"><h1>Upcoming or Current Events</h1></div>
	</div>
	<div class="row text-center">
		
		<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
	    <th>Date and Time</th>
	    <th>venue</th>
            <th>info</th>
        </tr>
    </thead>
    <tbody>
	<? for($i=0;$i<$e;$i++) { ?>
        <tr class="mb-5">
            <td><?=$title[$i]?></td>
	    <td><?=$dateandtime[$i]?></td>
	    <td><?=$venue[$i]?></td>
	    <td class="text-center">
		<a href="#" class="btn btn-success btn-sm mb-2" role="button">Register</a>
		<a href="view_event.php?filename=<?=$filename[$i]?>&&event_id=<?=$event_id[$i]?>&&event=1" class="btn btn-success btn-sm mb-2" role="button">view</a>
            </td>
        </tr>    
	<? } ?>
    </tbody>
</table>
		
	</div>
		<br><br>
	<div class="row text-center">
		<div class="col"><h1>Events History</h1></div>
	</div>
	<div class="row text-center">
		
		<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
	    <th>Date and Time</th>
            <th>Venue</th>
            <th>info</th>
        </tr>
    </thead>
    <tbody>
	<? for($j=0;$j<$e2;$j++) { ?>
        <tr class="mb-5">
            <td><?=$title2[$j]?></td>
	    <td><?=$dateandtime2[$j]?></td>
	    <td><?=$venue2[$j]?></td>
	    <td class="text-center">
		<a href="view_event.php?filename=<?=$filename2[$j]?>&&event_id=<?=$event_id2[$j]?>&&event=0" class="btn btn-success btn-sm mb-2" role="button">view</a>
            </td>
        </tr>    
	<? } ?>
    </tbody>
</table>
		
	</div>
	</div>
	
	
</body>
	
	
<? include 'footer.php'; ?>	
	
	
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
	
	
	
	
	
	
	@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	
}
</style>


</html>
