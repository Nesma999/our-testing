<?php
require_once('./config/dbconfig.php');
include 'navbar_user.php';
//include('footer.php');
    $db1 = new dbconfig(); 
    $db = new operations();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="css\s.css">
     <link rel="stylesheet" href="css\footer.css">
     <style >
#customers {
  border-collapse: collapse;
  width: 95%;
   background-color:white;
    margin-top: 130px;
  margin-bottom: 40px;
  margin-right: 150px;
  margin-left: 22px;
}
#customers th,#customers td {
   padding: 20px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  border: 1px solid #ddd;

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
  cursor: pointer;
  border-radius: 8px;
  margin-top: -20px;
  margin-bottom: 40px;
  margin-right: 700px;
  margin-left: 50px;
}
.input{
  width: 20%;
  height: 50px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 20px;
  background-color: white;
  padding: 40px;
  transition: width 0.4s ease-in-out;
   margin-top: 130px;
  margin-bottom: 40px;
  margin-right: 150px;
  margin-left: 500px;
}
</style>
    <title></title>
</head>
    <body>
	<form method="POST">
            <div>
            <input class="input" type="text" name="search" placeholder="Search" required>
        </div>
        <button class="button1" name="submit">Check</button>
    </form>
   <?php 
   if(isset($_POST['submit'])){
    $search=mysqli_real_escape_string($db1->connection,$_POST['search']);
        $query="SELECT * FROM interview WHERE id LIKE'%$search%'";
        $result = mysqli_query($db1->connection,$query);
        $query_result=mysqli_num_rows($result);
        if($query_result>0){
            while($row=mysqli_fetch_assoc($result)){
    ?>
      <table Id="customers">
                <tr>
                    <th style="width: 10%;font-size:20px"> ID </th>
                    <th style="width: 10%;font-size:20px"> app </th>
                    <th style="width: 20%;font-size:20px"> visa</th>
                    <th style="width: 20%;font-size:20px"> entry </th>
                    <th style="width: 20%;font-size:20px"> travelfrom </th>
                    <th style="width: 20%;font-size:20px"> arrival </th>
                    <th style="width: 20%;font-size:20px"> departure </th>
                    <th style="width: 20%;font-size:20px"> status </th>
                    <th style="width: 20%;font-size:20px"> Print </th>
                </tr>
                <tr>
                	<td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['app'] ?></td>
                    <td><?php echo $row['visa'] ?></td>
                    <td><?php echo $row['entry'] ?></td>
                    <td><?php echo $row['travelfrom'] ?></td>
                    <td><?php echo $row['arrival'] ?></td>
                    <td><?php echo $row['departure'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td style="border-radius: 8px;"> <button onclick="myfunction()">print</button>
            <script >
              function myfunction(){
                window.print();
              }
            </script></td>
                </tr>
                 <?php 
        }
}else{
 	echo "There are no results matching your search!";
 }
}
     ?>
        </table>
      </body>
</html>
