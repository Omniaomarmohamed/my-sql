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
<body>
    
<?php

  $id= $_POST['id'];
//define server data
$serverName="localhost";
$dbUser="root";
$dbPassword ='';
$dbName ="omnia_compny";
// talk to database 
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con= new mysqli ($serverName, $dbUser , $dbPassword ,$dbName);
// if con error
if ($con->connect_error)
{
    die ($con->connect_error);
}
//run query
$queryString ="SELECT customers.customerNumber as cNum , COUNT(orders.orderNumber)as cnt , customers.customerName as cname
FROM customers JOIN orders
on customers.customerNumber = orders.customerNumber
WHERE customers.customerNumber=$id
GROUP BY customers.customerName
ORDER by creditLimit";

$dbResult= $con->query ($queryString);
?>


 <h2 class="text-center h-cliants w-50 m-auto py-2 text-capitalize ">our cliants id</h2> 
<?php
      while($row= mysqli_fetch_assoc($dbResult))
      {
          ?>
          <ul>
          <li class="text-danger"> <h6 class="text-dark lead"><?php
             echo $row['cNum']."<br/> "
            .$row['cnt']."<br/> "
            .$row['cname']." <br/>"; ?> </h6></li>

            </ul>  
            
        
            <?php
             
          
      }  
            
?>

 <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>