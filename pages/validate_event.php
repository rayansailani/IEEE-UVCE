<?php

include '../libraries/cakes.php';


$con=getCon();
//delete
$name=$_GET['name'];
$title=$_GET['title'];
//echo $name;
if(isset($_GET['name'])||isset($_GET['title'])){
if($name=="delete")
{
   if(($con->query("delete from new_event where title='$title'"))===True);
 {
    header("Location:profile.php");
   	die();
 }
   echo 'something went wrong';
   echo '<a href="profile.php">Woosh</a>';
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
 
  $sql= "INSERT INTO old_event(title,presenters,dateandtime,filename,description) values('$title[0]','$presenters[0]','$dateandtime[0]','$title[0]','$description[0]')";
   if($con->query($sql)===True)   
     {
  if(($con->query("delete from new_event where title='$title[0]'"))===True)
 {
    header("Location:profile.php");
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

}


if(isset($_POST['create_event'])){
 
    
    
  $con=getCon();
 
  $title=$con->real_escape_string($_POST['title']);
  $presenters=$con->real_escape_string($_POST['presenters']);
  $dateandtime=$con->real_escape_string($_POST['dateandtime']);
  $description=$con->real_escape_string($_POST['description']);

  $filename = $title;
      
  $sql= "INSERT INTO new_event(title,presenters,dateandtime,filename,description) values('$title','$presenters','$dateandtime','$filename','$description')";
          // $sql="insert into new_event(title,presenters,dateandtime,filename,description) values('".mysqli_real_escape_string($con,$title)."','".mysqli_real_escape_string($con,$presenters)."','".mysqli_real_escape_string($con,$dateandtime)."','".mysqli_real_escape_string($con,$filename)."','".mysqli_real_escape_string($con,$description)."'";
     if($con->query($sql)===True)   
     {
        header("Location:profile.php");
      die();
         
     }
 else
 {
   echo "somthing went wrong let me head back";
  echo '<a href="profile.php">Woooosh</a>';
 }
 
  $target_dir="../assets/event_files/";
  $target_file = $target_dir . basename($_FILES["upload_file"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  
    
  // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
    //not right format
} 
    
    
    if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// something was wrong
} else {
     
    
         
  if (move_uploaded_file($_FILES['upload_file']['tmp_name'],$target_dir.$filename)) 
  {
    echo "The file ". basename( $_FILES["upload_file"]["name"]). " has been uploaded.";  
  }
  else
  {
    echo "Sorry, there was an error uploading your file.";
  }
}
    
    
    
}


?>
