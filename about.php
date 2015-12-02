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
    
        

    
<!--/*img{
      margin: 20px 20px 20px 20px;
      padding: 20px;
      //vertical-align: middle;
        
    }
    
p{
     text-align: center;
        
    }*/
        -->
    
    
    <body id="colorbehind">
        
       
        
   <div id="wrapper">
       <?php
      require 'header.php';
      ?>

        <div id="about">
            
            <h4>Resto Review makes life easy for food lover to get the latest reviews on 
            restaurants, cafes, pubs and bakeries.
        </br></br>
            <p><img src="images/pizzaabout.jpg" alt="pizzaabout"></br></br></p>
        
        Resto Review makes life easy for food lover to get the latest reviews on 
            restaurants, cafes, pubs and bakeries.    
        Resto Review makes life easy for food lover to get the latest reviews on 
            restaurants, cafes, pubs and bakeries. 
        Resto Review makes life easy for food lover to get the latest reviews on 
            restaurants, cafes, pubs and bakeries. 
        Resto Review makes life easy for food lover to get the latest reviews on 
            restaurants, cafes, pubs and bakeries.
            </h4>
        </div>
        
        
   </div>     
          <?php
      require 'footer.php';
  ?>
    
    </body>

</html>


