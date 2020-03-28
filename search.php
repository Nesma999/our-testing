<?php
require_once('./config/dbconfig.php');
include 'navbar_admin.php';
    $db1 = new dbconfig(); 
    $db = new operations();
 ?>


  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="css\s.css">
    <title></title>

  <style>
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
    </head>

<body>
	<form method="POST">
            <div>
            <input class="input" type="text" name="search" placeholder="Search" required>
        </div>
        <button class="button1" name="submit">Search</button>
    </form>
    <?php 
   if(isset($_POST['submit'])){
    $search=mysqli_real_escape_string($db1->connection,$_POST['search']);
        $query="SELECT * FROM users WHERE name LIKE'%$search%' and group_id=0";
        $result = mysqli_query($db1->connection,$query);
        $query_result=mysqli_num_rows($result);
        if($query_result>0){
            while($row=mysqli_fetch_assoc($result)){
    ?>
      <table Id="customers">
                <tr>
                    <th style="width: 10%;font-size:20px"> ID </th>
                    <th style="width: 10%;font-size:20px"> Name </th>
                    <th style="width: 20%;font-size:20px"> Email </th>
                    <th style="width: 20%;font-size:20px"> Phone </th>
                </tr>
                <tr>
                	<td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
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

