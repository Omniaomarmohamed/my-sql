<?php
//session 
session_start();
if(isset($_SESSION['password']))
{
    header('Location: login.php');
}
elseif(!isset($_SESSION['password']))
{
    header('Location: login.php');

}
    
    

?>