<?php

include '../libraries/cakes.php';

if(isset($_POST['create_event'])){
 
    
  $title=$_POST['title'];
  $presenters=$_POST['presenters'];
  $dateandtime=$_POST['dateandtime'];
  $description=$_POST['description'];

  $filename = $title;
      
  $target_file = $target_dir . basename($_FILES["upload_file"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    
  $con=getCon();
  
    
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
           
     if(($con->$query("insert into new_event(title,presenters,dateandtime,filename,description) values ('".mysqli_real_escape_string($con,$title)."','".mysqli_real_escape_string($con,$presenters)."','".mysqli_real_escape_string($con,$dateandtime)."','".mysqli_real_escape_string($con,$filename)."','".mysqli_real_escape_string($con,$description)."')"))===True)   
     {
        echo "all data except file inserted";   
         
     }
         
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
