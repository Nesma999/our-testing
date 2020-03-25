<?php 

    
    require_once('./config/dbconfig.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $name = $db->check($_POST['name']);
                $email = $db->check($_POST['email']);
                $phone = $db->check($_POST['phone']);
                $password = $db->check($_POST['password']);

                if($this->insert_record($name,$email,$phone,$password))
                {
                    //echo "<script>window.location.href='login_user.php'</script>";
                    header("Location:login_user.php");
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }
        
    } 
?>
