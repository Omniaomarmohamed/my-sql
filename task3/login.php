<?php
?>
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
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
        <a class="nav-link text-light" href="login.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="logout.php">logout</a>
      </li>
      
      
      

    </ul>
  </div>
  </div>
</nav>

        <!-- start sec -->
      <section class="py-5">
        <div class="container my-5 shadow-lg rounded-right">
    <form class="py-5" action="validate_login.php" method="post">
      <div class="row m-auto">
        <div class="col-md-6 py-4">
          <input class="form-control" type="text" name="username" placeholder="Your name *">
        </div>
          <div class="col-md-6 py-4">
          <input class="form-control" type="password" name="password" placeholder="password *">
        </div>
      </div>
     
    <div class=" d-flex justify-content-center">
    <button type="submit" class="btn btn-danger btn-lg rounded-pill">login</button>
    </div>
    
    </form>
    
</div>
</section>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>  