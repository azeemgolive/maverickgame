<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Maverick Game Payments</title>
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
<script src="//fortumo.com/javascripts/fortumopay.js" type="text/javascript"></script>
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
      <div class="col-md-1"></div>
      <div class="col-md-9 col-sm-9">
        <div class="leader-wrap" style="min-height:300px;">
          <h2>Payment Method</h2>
          
          <p class="white">Coins are required to play Games and earn reward points. Choose the payment method that is most convenient to you. <br><strong>1 Coin is for Rs.5.</strong></p>
          <div class="clearfix"></div>
          <br>
          <?php
          if(isset($_SESSION['user_loged_id']))
          {
           ?>
          <div class="col-md-4" align="center"> <a id="fmp-button" href="#" rel="478545efd0303c4f7e0d662b26995304?&cuid=<?php echo  $_SESSION['user_loged_id']; ?>"><img src="assets/images/fortumo.jpg" class="img-responsive" alt="Mobile Payments by Fortumo" border="0" /> </a>
            <p class="fo24 white">Through mobile <br/>balance</p>
            <p class="white">Pay through Mobile Balance (Telenor Logo). Telenor customers can purchase coins by their mobile balance, click above.</p>
          </div>
          <?php
          }else
          {
              ?>
          <div class="col-md-4" align="center"> <a href="maverick-game-user-login" rel=""><img src="assets/images/fortumo.jpg" class="img-responsive" alt="Mobile Payments by Fortumo" border="0" /> </a>
            <p class="fo24 white">Through mobile <br/>balance</p>
            <p class="white">Pay through Mobile Balance. Telenor customers can purchase coins by their mobile balance, click above.</p>
          </div>
          <?php
          }
          ?>
          <div class="col-md-4" align="center">
			<a href="purchase-coins"><img src="assets/images/easypaisa.jpg" class="img-responsive" alt="" /></a>
            <p class="fo24 white">Through <br/>Debit/Credit Card</p>
            <p class="white">Pay easily via debit/credit card or pay through money transfer. Click above and follow simple instruction.
                <br>( Coming Soon) 
          </p>
          </div>
          <div class="col-md-4" align="center"><a href="scratch-card-payment"><img src="assets/images/scratch-card.jpg" class="img-responsive" alt="" /></a>
            <p class="fo24 white">Through Scratch <br/>Card</p>
            <p class="white"> Scratch cards are available only at selected outlets, click above to enter scratch card number.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include("footer-toparea.php");
?>
<?php
include("footer.php");
?>
</body>
</html>