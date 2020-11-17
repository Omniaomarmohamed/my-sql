
<?php
  
  function cleanData($input)
  {
      $input=htmlspecialchars($input);
      $input=trim($input);
      return $input;
  }
  $username=$_POST['username'];
  $username=cleanData($username);
  $password=$_POST['password'];
  $password=cleanData($password);
  $is_right_data=true;
  if(strlen($username)<=8)
  
  {
      echo"you have to enter right username format <br/>";
      $is_right_data=false;
  }
  if(strlen($password)<=8)
  {
      echo"you have to enter right password format <br/>";
      $is_right_data=false;
  }
  if($is_right_data)
  {
    session_start();
  
  //check db 
  //save to session
  $_SESSION['username']=$username;
  $_SESSION['password']=$password;
  $_SESSION['isLoggedIn']=true;
  
      header('location: home.php');
  }
  
  ?>