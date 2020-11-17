<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body > 

<form class="form-group pt-4 " action="city.php" method="post">
  <label class="text-danger text-capitalize py-5 m-auto"><h4>Choose a city:</h4></label>
  <select class="w-50 form-control" name="city">
    <option value="Nantes">Nantes</option>
    <option value="NYC">NYC</option>
    <option value="Stavern">Stavern</option>
    <option value="Paris">Paris</option>
    <option value="Madrid">Madrid</option>
    <option value="Luleå">Luleå</option>
    <option value="Singapore">Singapore</option>
    <option value="Cambridge">Cambridge</option>
    <option value="Lisboa">Lisboa</option>
    

    


  </select>
  <button class="btn btn-danger rounded-pill my-5" type="submit"> submit</button>
</form>
<script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>