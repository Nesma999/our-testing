<?php 
    session_start();
   
 class dbconfig
    {
        public $connection;

        public function __construct()
        {
            $this->db_connect();
        }


?>
