<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Earn Points | Maverick Game</title>
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
<div class="leader-area">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-9">
        <div class="leader-wrap">
        <h2>How to Earn Points </h2>
        <div class="clearfix"></div>
        <br/>
        <div class="row">

          <div class="col-md-4" align="center">
          <img class="img-responsive" src="assets/images/play-game.png">
          <p class="white">Earn 5 points for every day that you play on Kabam.com.* <br/>You can even earn bonus points! </p>
          </div>
          
          <div class="col-md-4" align="center">
          <img class="img-responsive" src="assets/images/login-bonus.png">
          <p class="white">Earn 50 bonus points for playing 7 days in a row! </p>
          </div>

          <div class="col-md-4" align="center">
          <img class="img-responsive" src="assets/images/surprise-bonuses.png">
          <p class="white">You never know when you'll get an extra bonus just for playing. Make sure to play every day and you could be the lucky winner! </p>
          </div>

          </div>

          <div class="currency-wrap"  align="center">
          <div class="row">
      
          
          <div class="col-md-12" align="center">
          
          <img src="assets/images/game-currency.png" class="img-responsive">

          <h3 class="heading4">Purchase In-Game Currency!</h3>
           

<p class="white">Earn 10 points for every $1 (US Dollar) you spend on a purchase of in-game currency at mavericgame.com. We'll even give you DOUBLE POINTS on your first purchase as a Rewards Program member and any purchase over $49.00!</p> 
          </div>
          </div>
          
          </div>
          
          
            <div class="row" align="center">
            <div class="col-lg-12">
            <p class="white">Don't waste time. Keep earning points to redeem for valuable in-game currency! </p>
            <a href="javascript:;" class="button large game" style="float:none;">PLAY NOW</a>
            <br/><br/>
            </div>
            </div>
          
          
          
        </div>
      </div>
      <div class="col-md-3">
        <?php
include("points-navigation.php");?>
        <a target="_blank" href="http://thedigitaltraining.com/"><img width="308" height="229" alt="Left Banner" src="assets/images/left-ads.jpg" class="img-responsive"></a> </div>
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