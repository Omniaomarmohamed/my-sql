<?php
//start session
session_start();
//(!isset($_SESSION['username'])
  //  header('Location: login.php');
    unset($_SESSION['password']);

//destroy
session_destroy();
header('Location: singup.php');
?>