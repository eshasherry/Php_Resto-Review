<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-override.css" >
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body id="colorbehind">
    <?php
require_once 'header.php';
    ?>
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

        
        <div class="container-fluid" style="height:1000px">
         <div class="rating">
<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>     
       <h2>Welcome to Resto-Review. Discover the best places to eat.</h2> </br>
      
       <h2>Genießen und Spaß haben!</h2>
<?php foreach ($restaurant_names as $name): ?>
<div class="restaurant_name">
<h3><a href="name.php?id=<?php echo $name['id'] ;?>"><?php echo $name['title']; ?></a></h3>
</div>
<?php endforeach; ?>


   
       <img src="images/full-hd-wallpaper-food-2.jpg" width="800" height="400">
       
</div>

     </div>
  <?php
      require 'footer.php';
  ?>
    
<!--            <div class="jumbotron">
            <h1>My First <mark>Bootstrap</mark> <kbd>Page</kbd></h1>
            <div class="text-primary">
                <p class="bg-warning">This is some text.</p></div> 
            </div> <div class="btn-group">
            <button type="button" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown">Information<span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
      <li><a href="#">Tablet</a></li>
      <li><a href="#">Smartphone</a></li>
    </ul>
            </div>
            <button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
  <div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
</div>
            -->

   
    </body>
</html>
