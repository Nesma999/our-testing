<?php 
    
    require_once('./config/dbconfig.php'); 
    include 'navbar_user.php';
    include('footer.php');
    $db = new operations();
    $db->Store_feedback(); 
   
?>

