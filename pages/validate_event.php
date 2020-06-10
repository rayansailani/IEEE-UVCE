<?php

include '../libraries/cakes.php';

$name=$_GET['name'];
$title=$_GET['title'];
$dateandtime=$_GET['dateandtime'];
$con = getCon();

if($name=="delete_event")
{
	//echo "delete event";
	if(($con->query("delete from new_event where title='$title' and dateandtime='$dateandtime'"))===True)
 	{
		
    		header("Location:modify_event.php");
   		die();
		
 	} 
	else 
	{
		
   		echo 'something went wrong';
   		echo '<a href="profile.php">Woosh</a>';
		
   	}
}
else if($name=="move_to_history")
{
	//echo "move to history";
	$events=Array();
  	$res=$con->query("select * from new_event where title='$title' and dateandtime='$dateandtime'");
		 while($ele = $res->fetch_assoc())
			 $events[]=$ele;
 
   
	//new events
	$title=array();
	$presenters=array();
	$dateandtime=array();
	$venue=array();
	$description=array();
	
	//new events
	foreach($events as $eve)
		$title[]=$eve['title'];
	foreach($events as $eve)
		$presenters[]=$eve['presenters'];
	foreach($events as $eve)
		$dateandtime[]=$eve['dateandtime'];
	foreach($events as $eve)
		$description[]=$eve['description'];
	foreach($events as $eve)
		$venue[]=$eve['venue'];
 
  	$sql= "INSERT INTO old_event(title,presenters,dateandtime,venue,filename,description) values('$title[0]','$presenters[0]','$dateandtime[0]','$venue[0]','$title[0]','$description[0]')";
	
   	if($con->query($sql)===True)   
     	{
  		if(($con->query("delete from new_event where title='$title[0]' and dateandtime='$dateandtime[0]'"))===True)
 		{
			
    			header("Location:modify_event.php");
    			die();
			
 		} else {
  
  			echo "not deleted";
     			echo '<a href="profile.php">Woosh</a>';
			
    		}
	}
	else
 	{
   		echo 'something went wrong not inserted';
   		echo '<a href="profile.php">Woosh</a>';
 	}
}
else if($name=="move_to_current")
{
	//echo "move to current";
	$events2=Array();
  	$res2=$con->query("select * from old_event where title='$title' and dateandtime='$dateandtime'");
		 while($ele2 = $res2->fetch_assoc())
			 $events2[]=$ele2;
 
   
	//new events
	$title2=array();
	$presenters2=array();
	$dateandtime2=array();
	$venue2=array();
	$description2=array();
	
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
 
  	$sql= "INSERT INTO new_event(title,presenters,dateandtime,venue,filename,description) values('$title2[0]','$presenters2[0]','$dateandtime2[0]','$venue2[0]','$title2[0]','$description2[0]')";
	
   	if($con->query($sql)===True)   
     	{
  		if(($con->query("delete from old_event where title='$title2[0]' and dateandtime='$dateandtime2[0]'"))===True)
 		{
			
    			header("Location:modify_event.php");
    			die();
			
 		} else {
  
  			echo "not deleted";
     			echo '<a href="profile.php">Woosh</a>';
			
    		}
	}
	else
 	{
   		echo 'something went wrong not inserted';
   		echo '<a href="profile.php">Woosh</a>';
 	}
}
else if($name=="delete_history")
{
	//echo "delete history";
   	if(($con->query("delete from old_event where title='$title' and dateandtime='$dateandtime'"))===True)
 	{
		
    		header("Location:modify_event.php");
   		die();
		
 	} else {
		
   		echo 'something went wrong';
   		echo '<a href="profile.php">Woosh</a>';
		
   	}	
}
else if($name=="update_arrange_id")
{
	$events=Array();
  	$res=$con->query("select * from new_event");
		 while($ele = $res->fetch_assoc())
			 $events[]=$ele;
 
   
	//new events
	$title=array();
	$dateandtime=array();
	
	//new events
	foreach($events as $eve)
		$title[]=$eve['title'];
	foreach($events as $eve)
		$dateandtime[]=$eve['dateandtime'];
	
	$co=count($title);
	$coo=0;
	for($k=0;$k<$co;$k++)
	{
		$sql="update new_event set arrange_id='$k' where title='$title[$k]' and dateandtime='$dateandtime[$k]'";
		if(($con->query($sql))===True)
 		{
			$coo++;
			
 		} else {
  
  			echo 'not deleted';
     			echo '<a href="profile.php">Woosh</a>';
			
    		}
	}
	if($coo==$co)
	{
    		header("Location:modify_event.php");
    		die();
			
 	} else {
  
  		echo "not deleted";
     		echo '<a href="profile.php">Woosh</a>';
			
    	}
	
	
}
else if($name=="update_arrange_id_history")
{
	$events=Array();
  	$res=$con->query("select * from old_event");
		 while($ele = $res->fetch_assoc())
			 $events[]=$ele;
 
   
	//new events
	$title=array();
	$dateandtime=array();
	
	//new events
	foreach($events as $eve)
		$title[]=$eve['title'];
	foreach($events as $eve)
		$dateandtime[]=$eve['dateandtime'];
	
	$co=count($title);
	$coo=0;
	for($k=$co-1;$k>=0;$k--)
	{
		$sql="update old_event set arrange_id='$k' where title='$title[$k]' and dateandtime='$dateandtime[$k]'";
		if(($con->query($sql))===True)
 		{
			$coo++;
			
 		} else {
  
  			echo "not deleted";
     			echo '<a href="profile.php">Woosh</a>';
			
    		}
	}
	if($coo==$co)
	{
		
    		header("Location:modify_event.php");
    		die();
			
 	} else {
  
  		echo "not deleted";
     		echo '<a href="profile.php">Woosh</a>';
			
    	}
	
	
}

/*else if($name=="advanced_editing_current")
{
	echo "advanced editing";
}
else if($name=="advanced_editing_history")
{
	echo "advanced editing history";	
}*/





////////chnage order

if(isset($_POST['change_order']))
{
	$order=$_POST['arrange_id'];
	//print_r($order);
	$events=Array();
  	$res=$con->query("select * from new_event");
		 while($ele = $res->fetch_assoc())
			 $events[]=$ele;
 
   
	//new events
	$title=array();
	$dateandtime=array();
	
	//new events
	foreach($events as $eve)
		$title[]=$eve['title'];
	foreach($events as $eve)
		$dateandtime[]=$eve['dateandtime'];
	
	
	$t=count($title);
	$coo=0;
	for($k=0;$k<$t;$k++)
	{
		$sql="update new_event set arrange_id='$order[$k]' where title='$title[$k]' and dateandtime='$dateandtime[$k]'";
		if(($con->query($sql))===True)
 		{
			$coo++;
			
 		} else {
  
  			echo "not deleted";
     			echo '<a href="profile.php">Woosh</a>';
			
    		}
	}
	if($coo==$t)
	{
		$reorder=true;
    		header("Location:modify_event.php?order=".$reorder);
    		die();
			
 	} else {
  
  		echo 'not deleted';
     		echo '<a href="profile.php">Woosh</a>';
			
    	}
	
	
	
}





////////////advanced editing
if(isset($_POST['advanced_editing_c'])){

	
	$sent_title=$POST['sent_title'];
        $sent_dateandtime=$POST['sent_dateandtime'];	
	
	$title=$con->real_escape_string($_POST['title']);
  $presenters=$con->real_escape_string($_POST['presenters']);
  $dateandtime=$con->real_escape_string($_POST['dateandtime']);
  $venue=$con->real_escape_string($_POST['venue']);
  $description=$con->real_escape_string($_POST['description']);

  $filename = $title;
      
	$sql="delete from new_event where title='$sent_title' and dateandtime='$sent_dateandtime'";
	if(($con->query($sql))===True)
	{
		$sql= "INSERT INTO new_event(title,presenters,dateandtime,venue,filename,description) values('$title','$presenters','$dateandtime','$venue','$filename','$description')";
	   		if($con->query($sql)===True)  
	      			echo 'info updated<br>';
			else
			{
				echo "somthing went wrong let me head back";
  				echo '<a href="profile.php">Woooosh</a>';	
			}
	}
  	
          // $sql="insert into new_event(title,presenters,dateandtime,filename,description) values('".mysqli_real_escape_string($con,$title)."','".mysqli_real_escape_string($con,$presenters)."','".mysqli_real_escape_string($con,$dateandtime)."','".mysqli_real_escape_string($con,$filename)."','".mysqli_real_escape_string($con,$description)."'";
     
     
	
	
		
}
else if(isset($_POST['advanced_editing_h'])){

	
	$sent_title=$POST['sent_title'];
        $sent_dateandtime=$POST['sent_dateandtime'];	
	
	$title=$con->real_escape_string($_POST['title']);
  $presenters=$con->real_escape_string($_POST['presenters']);
  $dateandtime=$con->real_escape_string($_POST['dateandtime']);
  $venue=$con->real_escape_string($_POST['venue']);
  $description=$con->real_escape_string($_POST['description']);

  $filename = $title;
      
	if(($con->query("delete from old_event where title='$sent_title' and dateandtime='$sent_dateandtime'"))===True)
	{
		$sql= "INSERT INTO old_event(title,presenters,dateandtime,venue,filename,description) values('$title','$presenters','$dateandtime','$venue','$filename','$description')";
	   		if($con->query($sql)===True)  
	      			echo 'info updated<br>';
			else
			{
				echo "somthing went wrong let me head back";
  				echo '<a href="profile.php">Woooosh</a>';	
			}
	}
  	
          // $sql="insert into new_event(title,presenters,dateandtime,filename,description) values('".mysqli_real_escape_string($con,$title)."','".mysqli_real_escape_string($con,$presenters)."','".mysqli_real_escape_string($con,$dateandtime)."','".mysqli_real_escape_string($con,$filename)."','".mysqli_real_escape_string($con,$description)."'";
     
     
	
	
		
}

	
	
//////////below is creating event code


if(isset($_POST['create_event'])){
 
    
    
  $con=getCon();
 
  $title=$con->real_escape_string($_POST['title']);
  $presenters=$con->real_escape_string($_POST['presenters']);
  $dateandtime=$con->real_escape_string($_POST['dateandtime']);
  $venue=$con->real_escape_string($_POST['venue']);
  $description=$con->real_escape_string($_POST['description']);
	$arrange_id=$con->real_escape_string($_POST['arrange_id']);

  $filename = $title;
      
	echo $arrange_id."<br>";
	
  $sql= "INSERT INTO new_event(title,presenters,dateandtime,venue,filename,description,arrange_id) values('$title','$presenters','$dateandtime','$venue','$filename','$description','$arrange_id')";
          // $sql="insert into new_event(title,presenters,dateandtime,filename,description) values('".mysqli_real_escape_string($con,$title)."','".mysqli_real_escape_string($con,$presenters)."','".mysqli_real_escape_string($con,$dateandtime)."','".mysqli_real_escape_string($con,$filename)."','".mysqli_real_escape_string($con,$description)."'";
     
     
	if(rowExists('new_event','title',$title))	
	{
		echo "somthing went wrong let me head back";
  		echo '<a href="profile.php">Woooosh</a>';
	}
     else 
     {
	   if($con->query($sql)===True)  
	      echo 'info inserted<br>';
        //header("Location:profile.php");
       //die();
         
     }

 	
  
	
	require('vendor/autoload.php');
// this will simply read AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY from env vars
$s3 = new Aws\S3\S3Client([
    'version'  => '2006-03-01',
    'region'   => 'us-east-1',
]);
$bucket = getenv('S3_BUCKET')?: die('No "S3_BUCKET" config var in found in env!');
	
	
	
	
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['upload_file']) && $_FILES['userfile']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['upload_file']['tmp_name'])) {
    // FIXME: you should add more of your own validation here, e.g. using ext/fileinfo
    try {
        // FIXME: you should not use 'name' for the upload, since that's the original filename from the user's computer - generate a random filename that you then store in your database, or similar
        $upload = $s3->upload($bucket, $_FILES['upload_file']['name'], fopen($_FILES['userfile']['tmp_name'], 'rb'), 'public-read');

    }
}
  
  	/*$file=$_FILES['upload_file'];
	print_r($file);
	echo '<br>';
	
	
	$fileName=$_FILES['file']['name'];
	// or $fileName=$file['name'];	
 	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	
	//$fileExt= explode('.',$fileName);
	//$fileActualExt = strtolower(end($fileExt));
	$fileActualExt =strtolower(end(explode('.',$_FILES['upload_file']['name'])));
	//print_r($fileActualExt);
	
	$allowed = array("jpg","jpeg","pdf","png");
	
	if(in_array($fileActualExt,$allowed))
	{
		if($fileError==0)
		{
			if($fileSize<3000000)
			{
				$na="up";
				//$fileNewName = $title.".".$fileActualExt;
				$fileNewName = $na.".".$fileActualExt;
				$directory = dirname(__FILE__).'/uploads/';
				$fileDestination=$directory.$fileNewName;
				print_r($fileDestination);
				move_uploaded_file($fileTmpName,$fileDestination);
				echo "file uploaded";
			}
			else
			{
				echo "File is too big";
			}
		}
		else
		{
			echo "There was an error uploading the file";
		}
	}
	else
	{
		echo "You cannot upload files of this type";
	}
	
    
    
    */
     

    
    
}


?>
