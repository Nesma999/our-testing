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
	<body>
  <?php $db->Store_online(); ?>
	<h1 class="head">Travel Information</h1>
  <div class="f">
  <form action="" method="POST">
  
         <div class="di" data-validate = "ID is required">
          <label class="label" for="fname">Id</label><br>
            <input style="width: 28%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
  margin-top:10px;
  margin-bottom:40px;
  margin-right: 120px;
  margin-left: 120px;" type="text" name="id">
          </div>

  <div class="di">
      <label class="label" for="fname">Application Type</label><br>
      <select style="width: 33%" class="option" name="app">
  <option >Select Application Type</option>
        <option value="Single">Single</option>
        <option value="Family">Family</option>
        <option value="Group">Group</option>
      </select>

<div class="dii">
   <label class="label" for="fname">Visa Type</label><br>
  <select style="width: 35%" class="option" name="visa">
  <option >Select Visa Type</option>
  <option value="Travel">Travel</option>
  </select>
</div>
<div class="di">
   <label class="label" for="fname">Entry Type</label><br>
  <select style="width: 33%" class="option" name="entry">
  <option >Select Entry Type</option>
  <option value="Single">Single</option>
  <option value="Multiple">Multiple</option>
  </select>
</div>
<div class="dii">
   <label class="label" for="fname">Traveling From</label><br>
  <select style="width: 35%" class="option" name="travelfrom">
  <option >select departure country</option>
  <option value="Afghanistan">Afghanistan</option>
  <option value="Argentina">Argentina</option>
  <option value="Chine">Chine</option>
  <option value="United States Of America">United States Of America</option>
  <option value="United States Of Emirates">United States Of Emirates</option>
  <option value="Turkey">Turkey</option>
  <option value="Samoa">Samoa</option>
  <option value="Tuvalu">Tuvalu</option>
  <option value="Vietnam">Vietnam</option>
  <option value="vanuatu">vanuatu</option>
  <option value="Uruguay">Uruguay</option>
  <option value="British">British</option>
  <option value="Tunisia">Tunisia</option>
  <option value="Sweden">Sweden</option>
  <option value="Sudan">Sudan</option>
  <option value="South Africia">South Africia</option>
  <option value="Spain">Spain</option>
  <option value="South Sudan">South Sudan</option>
  <option value="United Kingdom">United Kingdom</option>
  </select>
</div>
<div class="di">
   <label class="label" for="fname">Expected Arrival Date</label><br>
  <input class="option" type="date" id="datee" name="arrival">
</div>
<div class="dii">
   <label class="label" for="fname">Expected Departure Date</label><br>
  <input class="option" type="date" id="datee" name="departure">
</div>
<button type="insert" class="button1" name="insert" > Insert </button>

</form>
  </div>




</body>
</head>

</html>
