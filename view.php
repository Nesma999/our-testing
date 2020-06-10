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
           <table Id="customers">
                <tr>
                    <th style="width: 10%;font-size:20px"> ID </th>
                    <th style="width: 10%;font-size:20px"> Name </th>
                    <th style="width: 20%;font-size:20px"> Email </th>
                    <th style="width: 20%;font-size:20px"> Phone </th>
                    <th style="width: 20;font-size:20px" colspan="2">Operations</th>
                </tr>
                <tr>
                    <?php 
                        while($data = mysqli_fetch_assoc($result))
                        {
                    ?>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['name'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['phone'] ?></td>
  <td style="border-radius: 8px;"><a href="  edit.php?U_ID=<?php echo $data['id'] ?>" class="button">Edit</a></td>
                        <td><a href="del.php?Del_ID=<?php echo $data['id'] ?>" class="button1">Del</a></td>
                </tr>
                <?php
                        }
                    ?>
                        </table>
                    </div>
 </body>
</html>

