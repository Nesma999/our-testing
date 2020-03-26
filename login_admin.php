<?php
 require_once('./config/dbconfig.php'); 
    $db = new operations();
if(isset($_POST['signin']))
{
// Posted Values
$name=$_POST['name'];
$pasword=$_POST['password'];
//Function Calling
$ret=$db->signin($name,$pasword);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['uid']=$num['id'];
  $_SESSION['fname']=$num['name'];
// For success
echo "<script>window.location.href='view.php'</script>";
}
else
{
// Message for unsuccessfull login
echo "<script>alert('Invalid details. Please try again');</script>";
  //echo "Invalid details. Please try again";
echo "<script>window.location.href='login_admin.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css\s.css">
    <link rel="stylesheet" type="text/css" href="css\navbar.css">
    <title>Login</title>
</head>
<body>
  <ul>
  <li><a class="active" href="Home.php">Home</a></li>


