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
					<a class="nav-link" href="events.php">Events</a>
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
	
	$event_id=$_POST['event_id'];
	$name=$_GET['name'];
	$title=$_GET['title'];
	$dateandtime=$_GET['dateandtime'];
	
	print_r($event_id);echo "<br>";
	print_r($name);echo "<br>";
	print_r($title);echo "<br>";
	print_r($dateandtime);echo "<br>";
	
	$con = getCon();
	
	$events=Array();
  	$res=$con->query("select * from new_event where title='$title' and dateandtime='$dateandtime'");
		 while($ele = $res->fetch_assoc())
			 $events[]=$ele;
 
        //print_r($events);
   
	//new events


	$title3=array();
	$presenters=array();
	$dateandtime3=array();
	$venue=array();
	$description=array();
	$arrange=array();
	$filename=array();
	
	//new events
	foreach($events as $eve)
		$title3[]=$eve['title'];
	foreach($events as $eve)
		$presenters[]=$eve['presenters'];
	foreach($events as $eve)
		$dateandtime3[]=$eve['dateandtime'];
	foreach($events as $eve)
		$description[]=$eve['description'];
	foreach($events as $eve)
		$venue[]=$eve['venue'];
	foreach($events as $eve)
		$arrange[]=$eve['arrange_id'];
	foreach($events as $eve)
		$filename[]=$eve['filename'];
	
	
	
	
	
	
	$con2=getCon();
	
	$events2=Array();
  	$res2=$con2->query("select * from old_event where title='$title' and dateandtime='$dateandtime'");
		 while($ele2 = $res2->fetch_assoc())
			 $events2[]=$ele2;
 
        
	//new events

	
	//print_r($events2);

	$title2=array();
	$presenters2=array();
	$dateandtime2=array();
	$venue2=array();
	$description2=array();
	$arrange2=array();
	$filename2=array();
	
	//new events
	foreach($events2 as $eve2)
		$title2[]=$eve2['title'];
	foreach($events2 as $eve2)
		$presenters2[]=$eve2['presenters'];
	foreach($events2 as $eve2)
		$dateandtime2[]=$eve2['dateandtime'];
	foreach($events2 as $eve2)
		$description2[]=$eve2['description'];
	foreach($events2 as $eve2)
		$venue2[]=$eve2['venue'];
	foreach($events2 as $eve2)
		$arrange2[]=$eve2['arrange_id'];
	foreach($events2 as $eve2)
		$filename2[]=$eve2['filename'];
	
	//print_r($events2);
	
	/*print_r($title2);echo'<br>';
	print_r($prsenters2);echo'<br>';
	print_r($dateandtime2);echo'<br>';
	print_r($venue2);echo'<br>';
	print_r($description2);echo'<br>';
	print_r($arrange2);echo'<br>';*/
	/*echo "<br>";
	print_r($title);
	
	echo "<br>";
	$ti=implode(" ",$title);
	print_r($ti);*/
	
	
	
	if($name=="advanced_editing_current")
	{
		
	if(isset($_SESSION['user_name'])&&$_SESSION['user_name']=="amigroot"){
               
               echo'<div class="container"><form method="POST" action="validate_event.php" enctype="multipart/form-data">
  <div class="form-row">
      <label for="validationServer01">Event title</label>
      <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="'.$title3[0].'" required>
   </div>
    <div class="form-row">
      <label for="validationServer02">Presenters</label>
      <input type="text" class="form-control" id="presenters" placeholder="Presenters" name="presenters" value="'.$presenters[0].'" required>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Date and Time</label>
      <input type="text" class="form-control" id="dateandtime" placeholder="format : dd/mm/yyyy - 00:00pm" name="dateandtime" value="'.$dateandtime3[0].'" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer03">venue</label>
      <input type="text" class="form-control" id="venue" placeholder="venue" name="venue" value="'.$venue[0].'" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer03">arrange id</label>
      <input type="number" class="form-control" id="arrange_id" placeholder="arrange id" name="arrange_id" value="'.$arrange[0].'" required>
    </div>
     <div class="col-md-6 mb-3">
      <label for="validationServer03">filename</label>
      <input type="text" class="form-control" id="filename" placeholder="filename" name="filename" value="'.$filename[0].'" required>
    </div>
     <!--<div class="col-md-6 mb-3">
      <label for="validationServer03">image</label>
      <input type="file" class="form-control" id="file" placeholder="upload_file" name="upload_file">
    </div>-->
    <!--<div class="col-md-6 mb-3">
      <label for="validationServer03">Time</label>
      <input type="time" class="form-control" id="time" placeholder="time" name="time" required>
    </div>-->
  </div>
  <div class="form-row">
    <div class="col">
      <label for="validationServer03">Description</label>
      <input type="text" class="form-control" id="description" placeholder="description" name="description" value="'.$description[0].'" required>
    </div>
  </div>
  <input type="hidden" name="sent_event_id" value="<?=$event_id?>" />
  <input type="hidden" name="sent_title" value="<?=$title?>" />
  <input type="hidden" name="sent_dateandtime" value="<?=$dateandtime?>" />
  <button class="btn btn-dark" name="advanced_editing_c" type="submit">modify event</button>
</form></div>';
	}     
	}
	 else if($name=="advanced_editing_history")
	      {
		      if(isset($_SESSION['user_name'])&&$_SESSION['user_name']=="amigroot"){
               
               echo'<div class="container"><form method="POST" action="validate_event.php" enctype="multipart/form-data">
  <div class="form-row">
      <label for="validationServer01">Event title</label>
      <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="'.$title2[0].'" required>
   </div>
    <div class="form-row">
      <label for="validationServer02">Presenters</label>
      <input type="text" class="form-control" id="presenters" placeholder="Presenters" name="presenters" value="'.$presenters2[0].'" required>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Date and Time</label>
      <input type="text" class="form-control" id="dateandtime" placeholder="format : dd/mm/yyyy - 00:00pm" name="dateandtime" value="'.$dateandtime2[0].'" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer03">venue</label>
      <input type="text" class="form-control" id="venue" placeholder="venue" name="venue" value="'.$venue2[0].'" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer03">arrange id</label>
      <input type="number" class="form-control" id="arrange_id" placeholder="arrange id" name="arrange_id" value="'.$arrange2[0].'" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer03">filename</label>
      <input type="text" class="form-control" id="filename" placeholder="filename" name="filename" value="'.$filename2[0].'" required>
    </div>
     <!--<div class="col-md-6 mb-3">
      <label for="validationServer03">image</label>
      <input type="file" class="form-control" id="file" placeholder="upload_file" name="upload_file">
    </div>-->
    <!--<div class="col-md-6 mb-3">
      <label for="validationServer03">Time</label>
      <input type="time" class="form-control" id="time" placeholder="time" name="time" required>
    </div>-->
  </div>
  <div class="form-row">
    <div class="col">
      <label for="validationServer03">Description</label>
      <input type="text" class="form-control" id="description" placeholder="description" name="description" value="'.$description2[0].'" required>
    </div>
  </div>
  <input type="hidden" name="sent_event_id" value="<?php echo $event_id;?>" />
  <input type="hidden" name="sent_title" value="<?php echo $title;?>" />
  <input type="hidden" name="sent_dateandtime" value="<?php echo $dateandtime;?>" />
  <button class="btn btn-dark" name="advanced_editing_h" type="submit">modify event</button>
</form></div>';
		}
	      }
		else
                    {
                        header("Location:../index.php");
                        die();
                    }
	
?> 
  
	
	
  
  
  
  
	
	
	
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
	
</style>


</html>
