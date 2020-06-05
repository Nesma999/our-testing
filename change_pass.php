<?php
require_once('./config/dbconfig.php'); 
include 'navbar_user.php';
include('footer.php');
 $db = new operations();
if(isset($_POST['submit']))
{
// Posted Values
$username        =$_POST['name'];
$password        =$_POST['CPassword'];
$newpassword     =$_POST['NPassword'];
$confirmpassword =$_POST['COPassword'];
//Function Calling
$ret=$db->Change_password($username,$password);
$num=mysqli_fetch_array($ret);
$oldpassworddb = $num ['password'];
//check passwords
if($password==$oldpassworddb)
{
//check the new password
if ($newpassword==$confirmpassword)
{
//succes
//change password in db
$sql = mysqli_query($db->connection,"UPDATE users set password='$newpassword' where name='$username'");
echo "Your password has been changed";
}
else 
 echo "New password dont match!";
}
else 
 echo "Old password doesnt match!";
}

?>

</html>