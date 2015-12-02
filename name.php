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

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-override.css" >
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">   
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<title>Restaurant</title> 
</head> 
<body> 
<?php       require 'header.php';?>  

<?php
//require_once  'database.php' ;
// $obj1 = new ConnectDb();
//         $con = $obj1->getConnection();
$name = null;
if(isset($_GET['id'])){
  $id = (int)$_GET['id'];

  $name = $DB_con->query("select * from restaurants where id = {$id}")->fetch(PDO::FETCH_ASSOC);
  
}

?>


     </br>    
   <h1 align="center"><?php echo $name['title'];?></h1>
<div class="container">    
 <div class="row">    
      <div class="col-md-3col-sm-4 col-xs-6"> 
          <img class="img-responsive" src="<?php echo $name['img1']; ?>" /></div>  
         <div class="col-md-3 col-sm-4 col-xs-6">
 <img class="img-responsive" src="<?php echo $name['img2']; ?>"/></div>
<div class="col-md-3 col-sm-4 col-xs-6">
<img class="img-responsive" src="<?php echo $name['img3']; ?>" /></div>  
       <div class="col-md-3 col-sm-4 col-xs-6">
       <img class="img-responsive" src="<?php echo $name['img4']; ?>" /></div>
</div> 
</div>
</br>

        <div id="googleMap" style="width:286px; height:235px;"></div>
<h5><b><?php echo $name['address'];;
?></b></br>
</br>

<form class="form-horizontal">
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">Write Review</label>
    <div class="col-sm-8">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="write review"></br>
      <button type="submit" class="btn btn-danger">Submit</button>
    </div>
  </div>
  </form>
</h5>
<!--      <div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://www.virginia.org/uploadedImages/virginiaorg/Images/OrgImages/H/HamptonConventionVisitorBureau/Grandview_Nature_Preserve.jpg?width=300&height=200&scale=upscalecanvas" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" /></div>
    	<div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://www.virginia.org/uploadedImages/virginiaorg/Images/OrgImages/H/HamptonConventionVisitorBureau/Grandview_Nature_Preserve.jpg?width=300&height=200&scale=upscalecanvas" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" /></div>
	    <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" /></div>
    </div >
</div>
 -->
 <!-- 
<?php  if($name): ?>
<div class="name">This is <?php echo $name['title']; ?></div>
<div class="restaurant-rating">Rating: x/5</div>
<div class="restaurant-rate"> <?php echo $name['id']; ?>
	Rate this restaurant:<div class="rating">

<?php foreach(range(1, 5) as $rating): ?>
	<a href="rate.php?name=<?php echo $name['title']; ?>&rating=<?php echo $rating;?>"><span>☆</span></a>

<?php endforeach; ?>
</div>	</div>	
</div>
<?php endif; ?>
  --> <?php
      require 'footer.php';
  ?>
<script>

var myCenter=new google.maps.LatLng(<?php echo $name['latitude']; ?>,<?php echo $name['longitude']; ?>);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);


  var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>