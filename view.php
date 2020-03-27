<?php 
    
    require_once('./config/dbconfig.php'); 
    include 'navbar_admin.php';
    $db = new operations();
    $result=$db->view_record();
?>
