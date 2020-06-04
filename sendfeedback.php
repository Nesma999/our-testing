<?php 
    
    require_once('./config/dbconfig.php'); 
    include 'navbar_user.php';
    include('footer.php');
    $db = new operations();
    $db->Store_feedback(); 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Feedback</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css\s.css">
  <link rel="stylesheet" href="css\footer.css">
</head>
	<body>			
	<div class="box">
      <h2> Send Feedback </h2>
        <form method="POST">
           <div class="inputBox">
               <input type="text" name="id" placeholder="ID" required>
           </div>
            <div class="inputBox">
              <input type="text" name="feedback" placeholder="Feedback" required>
           </div>
                    
              <button class="btn btn-success" name="send"> Send </button>
        </form>
     </div>
				
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
