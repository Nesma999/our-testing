<?php
 require_once('./config/dbconfig.php'); 
    include 'navbar_admin.php';
   include('footer.php');
    $db = new operations();
    $result=$db->view_answers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css\s.css">
    <link rel="stylesheet" href="css\footer.css">
    <style >
      .head{
  text-align: center;background-color:white; border: 1px solid #ddd;width: 91.80%;
  margin-top: 60px;
  margin-bottom: 0px;
  margin-right: 150px;
  margin-left: 22px;padding:20px;
  font-size: 40px;
  font-style: bold;
      }
#customers {
  border-collapse: collapse;
  width: 95%;
   background-color:white;
    /*margin-top: 100px;*/
  margin-bottom: 50px;
  margin-right: 150px;
  margin-left: 22px;
}
#customers th,#customers td {
   padding: 20px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  border: 1px solid #ddd;

}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}
.button1{
  background-color:#ff0000;
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}
    
</style>
    <title> Interview Online</title>
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
                    <th style="width: 10%;font-size:20px">app </th>
                    <th style="width: 20%;font-size:20px"> visa </th>
                    <th style="width: 20%;font-size:20px"> entry </th>
                    <th style="width: 20%;font-size:20px"> travelfrom </th>
                    <th style="width: 20%;font-size:20px"> arrival </th>
                    <th style="width: 20%;font-size:20px">departure </th>
                    <th style="width: 20;font-size:20px" colspan="2">Operations</th>
                    </tr>
                    <tr>
                    <?php 
                        while($data = mysqli_fetch_assoc($result))
                        {
                    ?>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['app'] ?></td>
                        <td><?php echo $data['visa'] ?></td>
                        <td><?php echo $data['entry'] ?></td>
                        <td><?php echo $data['travelfrom'] ?></td>
                        <td><?php echo $data['arrival'] ?></td>
                        <td><?php echo $data['departure'] ?></td>
                        <td style="border-radius: 8px;"><a href="  answers.php ?U_ID=<?php echo $data['id'] ?>" class="button">Edit</a></td>
                         </tr>
                <?php
                        }
                    ?>
                        </table>
                    </div>
                
</body>
</html>
