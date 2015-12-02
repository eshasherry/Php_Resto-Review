<?php
include_once 'dbconfig.php';
if(!$user->is_loggedin())
{
  $user->redirect('index.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<html>
    <head><link rel="stylesheet" type="text/css" href="css/bootstrap-override.css" >
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script></head>    
     <body id="colorbehind">
        
       
        
   <div id="wrapper">
       <div class="container" style="background-image: url(images/contact.png); height: 370px; width :900px; background-size: cover;background-repeat: no-repeat; "></br></br></br></br></br></br></br></br></br></br>
        
       </div>
       <?php
      require 'header.php';
      ?>

       
   </div>
        <?php
      require 'footer.php';
  ?>
    
    </body>

</html>

