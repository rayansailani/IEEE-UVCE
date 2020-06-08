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
		
    		header("Location:events.php");
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
			
    			header("Location:events.php");
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
			
    			header("Location:events.php");
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
		
    		header("Location:events.php");
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
	for($k=1;$k<=$co;$k++)
	{
		$sql="update new_event set arrange_id='$k' where title='$title[$k-1]' and dateandtime='$dateandtime[$k-1]'";
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
      
	if(($con->query("delete from new_event where title='$sent_title' and dateandtime='$sent_dateandtime'"))===True)
	{
		if(rowExists('new_event','title',$title))	
		{
			echo "somthing went wrong let me head back";
  			echo '<a href="profile.php">Woooosh</a>';
		}
     		else 
     		{
			$sql= "INSERT INTO new_event(title,presenters,dateandtime,venue,filename,description) values('$title','$presenters','$dateandtime','$venue','$filename','$description')";
	   		if($con->query($sql)===True)  
	      			echo 'info updated<br>';
        		//header("Location:profile.php");
       			//die();
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

  $filename = $title;
      
  $sql= "INSERT INTO new_event(title,presenters,dateandtime,venue,filename,description) values('$title','$presenters','$dateandtime','$venue','$filename','$description')";
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

 
  
  
  	$file=$_FILES['upload_file'];
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
	print_r($fileActualExt);
	
	$allowed = array("jpg","jpeg","pdf","png");
	
	if(in_array($fileActualExt,$allowed))
	{
		if($fileError==0)
		{
			if($fileSize<30000)
			{
				$fileNewName = $title.".".$fileActualExt;
				$fileDestination='../assets/event_files/'.$fileNewName;
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
	
    
    
    
     

    
    
}


?>
