<?php include 'navbar_user.php'; 
include('footer.php');
require_once('./config/dbconfig.php'); 
    $db = new operations();
 

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css\s.css">
    <link rel="stylesheet" href="css\footer.css">
    <title>Interview Online</title>
<style >
    .option {
  width: 30%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
  margin-top:10px;
  margin-bottom: 40px;
  margin-right: 120px;
  margin-left: 120px;
}
.head{
	background-color:#ffa500;
	border-radius: 10px;
	width:20%;
	padding:30px;
}
.label{
     margin-top: 100px;
     margin-bottom: 20%;
     margin-right: 120px;
     margin-left: 120px;
     font-size: 25px;
}
.di{
	margin-top:40px;

}
.dii{
	margin-top: -130px;
	margin-left: 45%;
	width: 90%;
}
.button1{
  background-color:#ffa500;
  border: none;
  color: white;
  padding: 15px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 8px;
  margin-top: -20px;
  margin-bottom: 40px;
  margin-right: 260px;
  margin-left: 80px;
  width: 50%;
}
.f{
  margin-left: 15%;
  margin-top: -15px;
  margin-bottom: 30px;
  color: #fff;
  width: 70%;
    position: absolute;
    background: rgba(0,0,0,.8) ;
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5); 
    border-radius: 10px ;
}
</style>
</head>

</html>
