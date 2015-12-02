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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
			        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="css/bootstrap-override.css" /> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<title>welcome - <?php print($userRow['user_email']); ?></title>
</head>

<body>
<?php
require_once 'header.php';
?>
    <body id="colorbehind">
        <div id="wrapper">
             <div class="container" id="searching" style="background-image: url(images/toronto.jpg); height: 270px; width :900px; background-size: cover;background-repeat: no-repeat;">
            
		<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>
	</div>
        </div>


<?php
$query = $DB_con->query('select * from restaurants');
         $restaurant_names = array(); 
         while($row = $query->fetch(PDO::FETCH_ASSOC)){
           $restaurant_names[] = $row ;
          }
?>
<?php foreach ($restaurant_names as $name): ?>
<div class="restaurant_name">
<h3><a href="name.php?id=<?php echo $name['id'] ;?>"><?php echo $name['title']; ?></a></h3>
</div>
<?php endforeach; ?>

       <img src="images/full-hd-wallpaper-food-2.jpg" width="800" height="400">
</div>
  <?php
      require 'footer.php';
  ?>

      <!--   <div class="container-fluid">
       <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">Resto-Review</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      
        <li><a href="about.php">About</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><h4 style="color:white">welcome <?php print($userRow['user_name']); ?>&nbsp;</h4></li>
        <li><a href="logout.php?logout=true" class="btn btn-success btn-md" >
                <span class="glyphicon glyphicon-log-in animate" style="color:white"><span style="color:white"> Logout</span></a></li>
      </ul>
       
           </nav>
        </div>

<div class="header">
	<div class="left">
    	
    </div>
    <div class="right">
    	<label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>
</div>
<div class="content">
welcome : <?php print($userRow['user_name']); ?>
<br /><br />
 -->

</body>
</html>