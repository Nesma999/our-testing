<?php 
    require_once('./config/dbconfig.php'); 
    include 'navbar_admin.php';
    include('footer.php');
    $db = new operations();
   
    $id = $_GET['U_ID'];
    $result = $db->get_answers($id);
    $data = mysqli_fetch_assoc($result);
?>
