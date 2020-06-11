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
	
	$order=$_GET['order'];
	$order2=$_GET['order2'];
	
	
	$con = getCon();
	
	$events=Array();
	$res = $con->query("select * from new_event");
	while($ele = $res->fetch_assoc())
		$events[]=$ele;
	
	$event_id = array();
	foreach($events as $eve)
		$event_id[]=$eve['event_id'];
	
	$filename = array();
	foreach($events as $eve)
		$filename[]=$eve['filename'];
	
	$title = array();
	foreach($events as $eve)
		$title[]=$eve['title'];
	
	$dateandtime = array();
	foreach($events as $eve)
		$dateandtime[]=$eve['dateandtime'];
	
	$arrange_id = array();
	foreach($events as $eve)
		$arrange_id[]=$eve['arrange_id'];
	
	$c=count($title);
	
	
	
	////4////
	
	$events4=Array();
	$res4 = $con->query("select * from new_event order by arrange_id asc");
	while($ele4 = $res4->fetch_assoc())
		$events4[]=$ele4;
	
	$event_id4 = array();
	foreach($events4 as $eve4)
		$event_id4[]=$eve4['event_id'];
	
	$filename4 = array();
	foreach($events4 as $eve4)
		$filename4[]=$eve4['filename'];
	
	$title4 = array();
	foreach($events4 as $eve4)
		$title4[]=$eve4['title'];
	
	$dateandtime4 = array();
	foreach($events4 as $eve4)
		$dateandtime4[]=$eve4['dateandtime'];
	
	$arrange_id4 = array();
	foreach($events4 as $eve4)
		$arrange_id4[]=$eve4['arrange_id'];
	
	$c4=count($title4);
	
	////4////
	
	
	/////5/////
	
	$events5=Array();
	$res5 = $con->query("select * from old_event order by arrange_id asc");
	while($ele5 = $res5->fetch_assoc())
		$events5[]=$ele5;
	
	$event_id5 = array();
	foreach($events5 as $eve5)
		$event_id5[]=$eve5['event_id'];
	
	$filename5 = array();
	foreach($events5 as $eve5)
		$filename5[]=$eve5['filename'];
	
	$title5 = array();
	foreach($events5 as $eve5)
		$title5[]=$eve5['title'];
	
	$dateandtime5 = array();
	foreach($events5 as $eve5)
		$dateandtime5[]=$eve5['dateandtime'];
	
	$arrange_id5 = array();
	foreach($events5 as $eve5)
		$arrange_id5[]=$eve5['arrange_id'];
	
	$c5=count($title5);
	
	
	/////5/////
	
	
	
	
	$events2=Array();
	$res2 = $con->query("select * from old_event");
	while($ele2 = $res2->fetch_assoc())
		$events2[]=$ele2;
	
	
	$event_id2 = array();
	foreach($events2 as $eve2)
		$event_id2[]=$eve2['event_id'];
	
	$filename2 = array();
	foreach($events2 as $eve2)
		$filename2[]=$eve2['filename'];
	
	$title2 = array();
	foreach($events2 as $eve2)
		$title2[]=$eve2['title'];
	
	$dateandtime2 = array();
	foreach($events2 as $eve2)
		$dateandtime2[]=$eve2['dateandtime'];
	
	$arrange_id2 = array();
	foreach($events2 as $eve2)
		$arrange_id2[]=$eve2['arrange_id'];
	
	$c2=count($title2);
	
	
	
	
	
	
	
	
	
?>	
	
	
	
	<div class="container">
	  <div class="text-center">
		  <?php if(isset($_SESSION['user_name'])&&$_SESSION['user_name']=="groot") { ?>
                       
		  	<? for($i=0;$i<$c;$i++) { ?>
			    <div class="row">
				    <div class="col m-2"><?=$title[$i]?></div>
				    <div class="col m-2"><?=$filename[$i]?></div>
				    <div class="col m-2"><?=$dateandtime[$i]?></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=delete_event&&title=<?=$title[$i]?>&&dateandtime=<?=$dateandtime[$i]?>&&event_id=<?=$event_id[$i]?>" role="button">delete</a></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=move_to_history&&title=<?=$title[$i]?>&&dateandtime=<?=$dateandtime[$i]?>&&event_id=<?=$event_id[$i]?>&&filename=<?=$filename[$i]?>" role="button">move to history</a></div>
		  		</div>
		  	<? } ?>
		  <? } else if(isset($_SESSION['user_name'])&&$_SESSION['user_name']=="amigroot") { ?>
		  <br><br>
		  <? if($order) { ?>
		  	<form method="POST" action="validate_event.php"> 
			  
		  	<? for($i=0;$i<$c4;$i++) { ?>
			    <div class="row">
				    <div class="col m-2"><?=$event_id4[$i]?></div>
				    <div class="col m-2"><?=$filename4[$i]?></div>
				    <div class="col m-2"><?=$title4[$i]?></div>
				    <div class="col m-2"><?=$dateandtime4[$i]?></div>
				    <div class="col m-2"><?=$arrange_id4[$i]?></div>
				    <div class="col m-2"><input type="number" class="form-control" id="arrange_id" placeholder="arrange id" name="arrange_id[]" value="<?=$arrange_id4[$i]?>" ></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=delete_event&&title=<?=$title4[$i]?>&&dateandtime=<?=$dateandtime4[$i]?>&&event_id=<?=$event_id4[$i]?>" role="button">delete</a></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=move_to_history&&title=<?=$title4[$i]?>&&dateandtime=<?=$dateandtime4[$i]?>&&event_id=<?=$event_id4[$i]?>&&filename=<?=$filename4[$i]?>" role="button">move to history</a></div>
				     <div class="col m-2"><a class="btn btn-dark btn-sm" href="advanced_editing.php?name=advanced_editing_current&&title=<?=$title4[$i]?>&&dateandtime=<?=$dateandtime4[$i]?>&&$event_id=<?=$event_id4[$i]?>" role="button">Advanced Editing</a></div>
		  		</div><br><br>
		  
		  	<? } ?>
			  
			 <button class="btn btn-dark btn-block" name="change_order" type="submit">change order</button><br><br>
		  </form>
		  
		  <? } else { ?>
		  	
		  	<form method="POST" action="validate_event.php"> 
			  
		  	<? for($i=0;$i<$c;$i++) { ?>
			    <div class="row">
				    <div class="col m-2"><?=$event_id[$i]?></div>
				    <div class="col m-2"><?=$filename[$i]?></div>
				    <div class="col m-2"><?=$title[$i]?></div>
				    <div class="col m-2"><?=$dateandtime[$i]?></div>
				    <div class="col m-2"><?=$arrange_id[$i]?></div>
				    <div class="col m-2"><input type="number" class="form-control" id="arrange_id" placeholder="arrange id" name="arrange_id[]" value="<?=$arrange_id[$i]?>" ></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=delete_event&&title=<?=$title[$i]?>&&dateandtime=<?=$dateandtime[$i]?>&&event_id=<?=$event_id[$i]?>" role="button">delete</a></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=move_to_history&&title=<?=$title[$i]?>&&dateandtime=<?=$dateandtime[$i]?>&&event_id=<?=$event_id[$i]?>&&filename=<?=$filename[$i]?>" role="button">move to history</a></div>
				     <div class="col m-2"><a class="btn btn-dark btn-sm" href="advanced_editing.php?name=advanced_editing_current&&title=<?=$title[$i]?>&&dateandtime=<?=$dateandtime[$i]?>&&$event_id=<?=$event_id[$i]?>" role="button">Advanced Editing</a></div>
		  		</div><br><br>
		  
		  	<? } ?>
			  
			 <button class="btn btn-dark btn-block" name="change_order" type="submit">change order</button><br><br>
		  </form>	
		  
		  <? } ?>
		  
		  <? if($order2) { ?>
		  	
		  <form method="POST" action="validate_event.php"> 
		  
		  <!--<a class="btn btn-dark btn-sm btn-block" href="validate_event.php?name=update_arrange_id" role="button">update arrange id</a><br><br>-->
		  	<? for($j=$c2-1;$j>=0;$j--) { ?>
			    <div class="row">
				    <div class="col m-2"><?=$event_id5[$j]?></div>
				    <div class="col m-2"><?=$filename5[$j]?></div>
				    <div class="col m-2"><?=$title5[$j]?></div>
				    <div class="col m-2"><?=$dateandtime5[$j]?></div>
				    <div class="col m-2"><?=$arrange_id5[$j]?></div>
				    <div class="col m-2"><input type="number" class="form-control" id="arrange_id" placeholder="arrange id" name="arrange_id" value="<?=$arrange_id5[$j]?>" ></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=move_to_current&&title=<?=$title5[$j]?>&&dateandtime=<?=$dateandtime5[$j]?>&&event_id=<?=$event_id5[$j]?>&&filename=<?=$filename5[$j]?>" role="button">move to current</a></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=delete_history&&title=<?=$title5[$j]?>&&dateandtime=<?=$dateandtime5[$j]?>&&event_id=<?=$event_id5[$j]?>" role="button">delete History</a></div>
				      <div class="col m-2"><a class="btn btn-dark btn-sm" href="advanced_editing.php?name=advanced_editing_history&&title=<?=$title5[$j]?>&&dateandtime=<?=$dateandtime5[$j]?>&&$event_id=<?=$event_id5[$j]?>" role="button">Advanced Editing</a></div>
		  		</div>
		  	<? } ?>
		  	<br><br>
		   <a class="btn btn-dark btn-sm btn-block" href="validate_event.php?name=update_arrange_id_history" role="button">change history order</a><br><br>
		  	</form>
		  
		  <? } else { ?>
		  	
		  	<form method="POST" action="validate_event.php"> 
		  
		  <!--<a class="btn btn-dark btn-sm btn-block" href="validate_event.php?name=update_arrange_id" role="button">update arrange id</a><br><br>-->
		  	<? for($j=$c5-1;$j>=0;$j--) { ?>
			    <div class="row">
				    <div class="col m-2"><?=$event_id2[$j]?></div>
				    <div class="col m-2"><?=$filename2[$j]?></div>
				    <div class="col m-2"><?=$title2[$j]?></div>
				    <div class="col m-2"><?=$dateandtime2[$j]?></div>
				    <div class="col m-2"><?=$arrange_id2[$j]?></div>
				    <div class="col m-2"><input type="number" class="form-control" id="arrange_id" placeholder="arrange id" name="arrange_id" value="<?=$arrange_id2[$j]?>" ></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=move_to_current&&title=<?=$title2[$j]?>&&dateandtime=<?=$dateandtime2[$j]?>&&event_id=<?=$event_id2[$j]?>&&filename=<?=$filename2[$j]?>" role="button">move to current</a></div>
				    <div class="col m-2"><a class="btn btn-dark btn-sm" href="validate_event.php?name=delete_history&&title=<?=$title2[$j]?>&&dateandtime=<?=$dateandtime2[$j]?>&&event_id=<?=$event_id2[$j]?>" role="button">delete History</a></div>
				      <div class="col m-2"><a class="btn btn-dark btn-sm" href="advanced_editing.php?name=advanced_editing_history&&title=<?=$title2[$j]?>&&dateandtime=<?=$dateandtime2[$j]?>&&$event_id=<?=$event_id2[$j]?>" role="button">Advanced Editing</a></div>
		  		</div>
		  	<? } ?>
		  	<br><br>
		   <a class="btn btn-dark btn-sm btn-block" href="validate_event.php?name=update_arrange_id_history" role="button">change history order</a><br><br>
		  	</form>
		  
				<br><br>
                    <? } else
                    {
                        header("Location:../index.php");
                        die();
                    } ?>
	  </div>
  </div>
  
	
	
	
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
