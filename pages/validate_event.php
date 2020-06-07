<?php

include '../libraries/cakes.php';

$name=$_GET['name'];
$title=$_GET['title'];
$dateandtime=$_GET['dateandtime'];

if($name=="delete_event")
{
	echo "delete event";
}
else if($name=="move_to_history")
{
	echo "move to history";
}
else if($name=="move_to_current")
{
	echo "move to current";
}
else if($name=="delete_history")
{
	echo "delete history";
}
else if($name=="advanced_editing")
{
	echo "advanced editing";
}





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
