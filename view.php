<?php 
    
    require_once('./config/dbconfig.php'); 
    include 'navbar_admin.php';
    $db = new operations();
    $result=$db->view_record();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css\s.css">
    <title></title>
</head>

<body>
        <div>
            <h2 class="head"> All Users </h2>
        </div>
        <div class="card-body">
            <?php
                  $db->display_message(); 
                  $db->display_message();
            ?>
 </body>
</html>

