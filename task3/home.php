<?php
//session start
session_start();
if(!isset($_SESSION['password']))
    header('Location: login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my_sql</title>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
<div class="container">
  <a class="navbar-brand text-light text-capitalize" href="#">my site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-capitalize text-light">
      <li class="nav-item">
        <a class="nav-link text-light" action ="cliants.php "method="post" href="cliants.php">cliants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="cliant_form.php">cliant id</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light"  action ="orders.php "method="post" href="orders.php">orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" action ="best_orders" method="post" href="best_orders.php">best orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light"  action ="best_orders" method="post"  href="manger.php">manger</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="form_name.php">all customers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="city_form.php">city</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="product_form.php">product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="rich_claint_id.php">rich cliant</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="login.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="logout.php">logout</a>
      </li>
      
      
      

    </ul>
  </div>
  </div>
</nav>
<!-- start home page -->
<header class="home " id="home">
  <div class="layer d-flex justify-content-center align-items-center">
    <div class="caption text-center text-white">
      <h3 class="text-white">welcome in our site </h3>
      <p class="lead py-3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
    </div>
  </div>
</header>



    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>