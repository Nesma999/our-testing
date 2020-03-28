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
