<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Rewards | Maverick Game </title>
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

 <meta name="google-site-verification" content="ywXjYOYCEEAo7oFbxaG3VU1x2uA4yI9q1PHhRNGTtxY" />
</head>

<body class="home">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=481352955356475";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Start popup-->

<!-- Login form -->		

<!-- End signUp form -->
<div class="popup-overlay"></div>

<!-- End popup-->
<?php
            include("user-login-menus.php");
            ?>
<?php
include("sidebarlinks.php");
?>

<div class="rewards-area">
	<div class="container">
    <div class="row">
    <div class="col-md-1 col-sm-1"></div>
     <div class="col-md-9 col-sm-9">
      <div class="rewards-wrap" style="min-height:500px;"> 
  <h2>Overview</h2>
     
<?php
include("points-navigation.php");?>
  <h3 class="heading4">Earn Rewards By Playing Games:</h3>
  
  <p class="white"> Maverick Rewards are real products that you can earn by playing Maverick Games and earning points on your game score. </p>

  <p class="white">It's a three step process <strong>Play</strong> <strong>Earn</strong> <strong>Redeem</strong> based purely on your performance. </p>

  <p class="white">Better you please more rewards you get. For more information please contact us at <strong>info@maverickgame.com</strong>  </p>
  <br/><br/><br/>

<div class="row">
<div class="col-md-4" align="center">
<a href="index.php"><img src="assets/images/play.png" class="img-responsive"></a>
<p class="line-height white"> </p>
</div>

<div class="col-md-4" align="center">
<a href="earn-rewards-points"><img src="assets/images/earn.png" class="img-responsive"></a>
<p class="line-height white"></p>
</div>

<div class="col-md-4" align="center">
<a href="redeem-rewards-points"><img src="assets/images/redeem.png" class="img-responsive"></a>
<p class="line-height white"></p>
</div>

</div>
  

</div>
     </div>
     
     

    </div>

    </div>
</div>

<div class="clearfix"></div>
<?php
include("footer-toparea.php");
?>

<?php
include("footer.php");
?>






</body>
</html>