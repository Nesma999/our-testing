
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

               // Insert Record in the Database Using Query    
        function insert_record($name,$email,$phone,$password)
        {
            global $db;
            $query = "insert into users (name,email,phone,password) values('$name','$email','$phone','$password')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {

                return true;
            }
            else
            {
                return false;
            }
        }
                // Function for signin admin
       public function signin($name,$pasword)
         {
        global $db;
            $query = "select id,name from users where name='$name' and Password='$pasword' and group_id=1";
            $result = mysqli_query($db->connection,$query);
              return $result;
          }

              // Function for signin user
       public function signin_user($name,$pasword)
          {
        global $db;
            $query = "select id,name from users where name='$name' and Password='$pasword' and group_id=0";
            $result = mysqli_query($db->connection,$query);
              return $result;
          }

            // View Database Record
       public function view_record()
        {
            global $db;
            $query = "select * from users where group_id=0";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }
           // Get Particular Record
       public function get_record($id)
        {
            global $db;
            $sql = "select * from users where id='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }
        
           // Set Session Message
        public function set_messsage($msg)
        {
            if(!empty($msg))
            {
                $_SESSION['Message']=$msg;
            }
            else
            {
                $msg = "";
            }
        }

        
           // Display Session Message
        public function display_message()
        {
            if(isset($_SESSION['Message']))
            {
                echo $_SESSION['Message'];
                unset($_SESSION['Message']);
            }
        }



       
            // Delete Record
        public function Delete_Record($id)
        {
            global $db;
            $query = "delete from users where id='$id'";
            $result = mysqli_query($db->connection,$query);
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        
    } 
?>

