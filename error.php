<?php
session_start();
require 'setup.php';
include("dbconnection.php");
include("googlelogin.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Maverick Game Error</title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' /
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/wow.min.js"></script>

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
     <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 8]>
<script type="text/javascript" src="/assets/js/html5.js"></script>
<html lang="en" class="ie ie8">
<![endif]-->


</head>

<body class="home">

<!-- Start popup-->

<!-- Login form -->		
<?php
include("silverhat-login.php");
?><!-- End Login form -->	
<!-- signUp form -->   
 <?php
include("silverhat-signup.php");

?>
<!-- End signUp form -->
<div class="popup-overlay"></div>

<!-- End popup-->
<?php
            include("user-login-menus.php");
            ?>
<?php
include("sidebarlinks.php");
?>

<div class="featured-area">
	<div class="container">
    <div class="row">
     <div class="col-md-10 col-sm-9">
      <div class="inner-cnt"> 
  <h2>Error  <span></span></h2>
  <?php
  if(isset($_REQUEST['login']))
  {
  ?>
  <p>You are not login please login for playing game</p>
 <?php
  }
  ?>  
  <?php
  if(isset($_REQUEST['msg']))
  {
  ?>
  <p>Invalid User Name or Password</p>
 <?php
  }
  ?>
   
</div>
     </div>
      <?php 
      include("rightadds.php");
      ?>
    </div>
    
    
    	<?php 
include("featured-games.php");
?>
    </div>
</div>



<?php
include("footer.php");
?>






</body>
</html>