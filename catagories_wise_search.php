<?php 
include('session.php');
//echo("Session blongs to:".$_SESSION['user_name']."<br>");
// echo("Session email is:".$_SESSION['user_email']."<br>");
// echo("User unique id is:".$_SESSION['user_id']."<br>");
?>
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <title><?php echo('User:'.$_SESSION['user_name']);?></title>


    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body>

    <?php
 

   
//Poputating the webpage with external webpage elements.

include('genere_filter.php');


?>

</body>

</html>


   
   
   
   
   
   
   
   