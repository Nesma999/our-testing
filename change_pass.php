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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css\s.css">
    <link rel="stylesheet" href="css\footer.css">
    <title>Change Password</title>
</head>
<body>
     <div class="box">
      <h2>Change Password</h2>
        <form method="POST">
           <div class="inputBox">
               <input type="text" name="name" placeholder=" Name" class="form-control mb-2" required>
           </div>
           <div class="inputBox">
               <input type="text" name="CPassword" placeholder="Current Password" class="form-control mb-2" required>
           </div>
            <div class="inputBox">
              <input type="password" name="NPassword" placeholder="New Password" class="form-control mb-2" required>
           </div>
           <div class="inputBox">
              <input type="password" name="COPassword" placeholder="Confirm Password" class="form-control mb-2" required>
           </div>
                    
              <button class="btn btn-success" name="submit"> Submit </button>
        </form>
     </div>
</body>
</html>
