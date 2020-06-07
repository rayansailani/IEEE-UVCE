<?php

include '../libraries/cakes.php';


$con=getCon();
//delete
$name=$_GET['name'];
$title=$_GET['title'];
//echo $name;
//if(isset($_GET['name'])||isset($_GET['title'])){
if($name=="delete")
{
	$dateandtime=$_GET['dateandtime'];
   if(($con->query("delete from new_event where title='$title' and dateandtime='$dateandtime'"))===True)
 {
    header("Location:events.php");
   	die();
 }else {
   echo 'something went wrong';
   echo '<a href="profile.php">Woosh</a>';
   }
}
else if($name=="deletehistory")
{
	$dateandtime=$_GET['dateandtime'];
   if(($con->query("delete from old_event where title='$title' and dateandtime='$dateandtime'"))===True)
 {
    header("Location:events.php");
   	die();
 }else {
   echo 'something went wrong';
   echo '<a href="profile.php">Woosh</a>';
   }		
}
else if($name="move")
{
  $events=Array();
  $res=$con->query("select * from new_event");
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
 } else
    {
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

//}





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
				$fileDestination='uploads/'.$fileNewName;
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
