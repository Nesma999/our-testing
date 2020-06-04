<?php 
    
    require_once('./config/dbconfig.php'); 
    include 'navbar_user.php';
    include('footer.php');
    $db = new operations();
    $db->Store_feedback(); 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Feedback</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css\s.css">
  <link rel="stylesheet" href="css\footer.css">
</head>
</html>
