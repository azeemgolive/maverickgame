<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
     $user_payements=  getUserById($_SESSION['user_loged_id']);
     $user_payement=  mysql_fetch_array($user_payements);      
}else
{
    header("location:maverick-game-user-login");
}
?>
<?php if(isset($_REQUEST['amount'])) echo $_REQUEST['amount']; ?>
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
 <div class="clearfix"></div><br>

<p class="white">Note : Kindly press the confirm button to proceed the confirm your request</p>
<form action="http://202.69.8.50:9080/easypay/Confirm.jsf" method="POST" target="_blank">
<input name="auth_token" value="<?php if(isset($_REQUEST['auth_token'])) echo $_REQUEST['auth_token']; ?>" hidden = "true"/>
<input name="postBackURL" value="http://www.maverickgame.com/new-version/payment-success" hidden = "true"/>
<input value="confirm" class="large button game" type ="submit" name= "pay"/>
</form>
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