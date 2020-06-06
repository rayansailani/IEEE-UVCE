<?php

include '../libraries/cakes.php';

//delete
$name=$_GET['name'];
echo $name;





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
