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
     <div class="col-md-9 col-sm-9">
      <div class="rewards-wrap" style="min-height:500px;"> 
  <h2>Overview</h2>
  
  <h3 class="heading4">Earn Points Just For Playing!</h3>
  
  <p class="white"> Maverick Rewards is a rewards program that allows you to earn points by playing your favorite games on maverickgame.com.* Dominate the competition by earning Kabam points and redeeming them for in-game currency!</p>

  <p class="white">Have feedback? We'd love to hear it so that we can continue to develop new features that you'll enjoy.</p>

  <p class="white">Participation is as easy as 1-2-3! </p>
  <br/><br/><br/>

<div class="row">
<div class="col-md-4" align="center">
<a href="javascript:;"><img src="assets/images/play.png" class="img-responsive"></a>
<p class="line-height white">Build cities rich with resources, train troops and take up arms with allies to conquer new territories. </p>
</div>

<div class="col-md-4" align="center">
<a href="earn-points.php"><img src="assets/images/earn.png" class="img-responsive"></a>
<p class="line-height white">Play every day and watch the points stack up. Want to earn bonus points? See our Earn Points page for more information! </p>
</div>

<div class="col-md-4" align="center">
<a href="redeem-points.php"><img src="assets/images/redeem.png" class="img-responsive"></a>
<p class="line-height white">Redeem your points for valuable in-game currency, then wreak havoc on your enemies! </p>
</div>

</div>
  

</div>
     </div>
     
      <div class="col-md-3">
     
<?php
include("points-navigation.php");?>

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