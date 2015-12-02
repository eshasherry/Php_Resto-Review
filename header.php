<?php 
//require_once  'connectivity.php' ;
require_once  'dbconfig.php' ;
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="css/bootstrap-override.css" /> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        </br></br>
<!--        <div class="container" id="searching" style="background-image: url(images/toronto.jpg); height: 270px; width :900px; background-size: cover;background-repeat: no-repeat;">
            
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
        </div>-->
<!--<div class="container-fluid" style="background-color:#F44336;color:#fff;height:150px;">
      </br></br>
      <h1>Resto-Review</h1>-->
<!--  <h3>Fixed (sticky) navbar on scroll</h3>
  <p>Scroll this page to see how the navbar behaves with data-spy="affix".</p>-->
 <?php if($user->is_loggedin()!="")
{ ?>
  <div class="container-fluid">
       <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="home.php">Resto-Review</a>
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

<?php } 
else {
?>
        <div class="container-fluid">
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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      
        <li><a href="about.php">About</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sign-up.php"><span class="glyphicon glyphicon-user"  ></span> Sign Up</a></li>
        <li><a href="login.php" class="btn btn-success btn-md" >
                <span class="glyphicon glyphicon-log-in animate" style="color:white"><span style="color:white"> Login</span></a></li>
      </ul>
       
           </nav>
        </div>
  <?php }
  ?>
     <!--        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
 --><!--       <div class="modal-body">
        <form method="POST" action="connectivity.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" id="email" name="user">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass">
  </div>
      <div class="modal-footer">
           <button type="submit" class="btn btn-default" name="submit">Submit</button>     
            </form>
      </div>
 -->      
<!--        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>
    </div>
    </div>
            </div>
        
        <?php
        // put your code here
        ?>
       
    </body>
</html>
        