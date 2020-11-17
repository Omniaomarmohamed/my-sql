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
<body>
    
<?php

//define server data
$serverName="localhost";
$dbUser="root";
$dbPassword ='';
$dbName ="omnia_compny";
// talk to database 
$con= new mysqli ($serverName, $dbUser , $dbPassword ,$dbName);
// if con error
if ($con->connect_error)
{
    die ($con->connect_error);
}
//run query
$queryString ="SELECT  productName , buyPrice
                FROM products
                WHERE buyPrice>50 OR buyPrice <105
                GROUP BY buyPrice DESC";
$dbResult= $con->query ($queryString);
?>


 <h2 class="text-center h-cliants w-50 m-auto py-2 text-capitalize ">products</h2> 
<?php
      while($row= mysqli_fetch_assoc($dbResult))
      {
          
             echo $row['productName'].">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> "
             .$row['buyPrice']."<br/>";
            
          
      }  
            
?>

 <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>