<?php

  //including for calling useful functions 
  include '../libraries/cakes.php';
  if(isset($_POST['register_user'])){
  //to get connection from db
  $con=getCon();

  //getting username and password from register.php
  $u = $_POST['user_name'];
  $e = $_POST['email'];
  $i = $_POST['ieeenumber'];
  //$n = $_POST['name'];
  $p = $_POST['password'];
  $p = password_hash($p,PASSWORD_DEFAULT);

  
  if(rowExists('user','user_name',$u)){
    $userexists=true;
    header("Location:register.php?userexists=".$userexists);
      die();
    
  }
  else if(rowExists('user','email',$e)){
    $emailexists=true;
     header("Location:register.php?emailexists=".$emailexists);
      die();
    
  }
    else
    {
      if(($con->query("insert into user(user_name,email,password,ieeenumber) values('$u','$e','$p','$i');"))===True){
        //echo "YES";
          header("Location:../login/login.php");
          die();
      }
      else
      {
         $error=true;
          header("Location:register.php?emailexists=".$error);
          die();
      }
 }
}   
  //checking if query is valid if yes then yes else respective error will be displayed
  /*if(($con->query("insert into user(user_name,email,password) values('$u','$e','$p');"))===True){
     //echo "YES";
      header("Location:../login/login.php");
      die();
  }
  else
    echo $con->error;
  }*/
  
  
?>
