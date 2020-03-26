<?php 
    require_once('./config/dbconfig.php'); 
    $db = new operations();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="css\s.css">
     <link rel="stylesheet" type="text/css" href="css\navbar.css">
    <title></title>
</head>
<body>
<ul>
  <li><a class="active" href="Home.php">Home</a></li>
  <li><a href="">About Egypt</a></li>
  <li style="float:right"><a href="login_user.php">Signin</a></li>
  <li style="float:right"><a href="register.php">Signup</a></li>
            
</body>
</html>