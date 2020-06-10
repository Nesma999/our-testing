<?php 
    require_once('./config/dbconfig.php'); 
    include 'navbar_admin.php';
    include('footer.php');
    $db = new operations();
   
    $id = $_GET['U_ID'];
    $result = $db->get_answers($id);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="css\s.css">
     <link rel="stylesheet" href="css\footer.css">
    <title></title>
</head>
<body>
    <?php
    $db->update_status(); 
    ?>
	<div class="box">
      <h2> Edit </h2>
            <form method="POST">
                 <div class="inputBox">
                <input  name="id" value="<?php echo $data['id']; ?>">
            </div>
             <div class="inputBox">
                <input  name="app" value="<?php echo $data['app']; ?>" >
            </div>
             <div class="inputBox">
                <input  name="visa" value="<?php echo $data['visa']; ?>" >
            </div>
             <div class="inputBox">
                <input  name="entry" value="<?php echo $data['entry']; ?>" >
        </div>
       
             <div class="inputBox">
                <input  name="travelfrom" value="<?php echo $data['travelfrom']; ?>" >
        </div>
        
             <div class="inputBox">
                <input  name="arrival" value="<?php echo $data['arrival']; ?>" >
        </div>
     
             <div class="inputBox">
                <input  name="departure" value="<?php echo $data['departure']; ?>" >
        </div>
         <div class="inputBox">
                <input  name="status" value="<?php echo $data['status']; ?>" >
        </div>
            <button class="btn btn-success" name="insert"> Insert</button>
            
        </form>
                    </div>
</body>
</html>
