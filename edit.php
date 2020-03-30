<?php 
    require_once('./config/dbconfig.php'); 
    $db = new operations();
    $db->update();
    $id = $_GET['U_ID'];
    $result = $db->get_record($id);
    $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="css\s.css">
    <title></title>
</head>

<body>
        <?php $db->Store_Record(); ?>
        <div class="box">
      <h2> Edit </h2>
            <form method="POST">
                 <div class="inputBox">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            </div>
             <div class="inputBox">
                <input type="text" name="name" placeholder="Name" class="form-control mb-2" required value="<?php echo $data['name']; ?>">
            </div>
             <div class="inputBox">
                <input type="text" name="email" placeholder=" E-mail" class="form-control mb-2" required value="<?php echo $data['email']; ?>">
            </div>
             <div class="inputBox">
                <input type="text" name="phone" placeholder=" Phone" class="form-control mb-2" required value="<?php echo $data['phone']; ?>">
        </div>
            <button class="btn btn-success" name="btn_update"> Update </button>
        </form>
                    </div>
</body>

</html>

