<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
     $user_payements=  getUserById($_SESSION['user_loged_id']);
     $user_payement=  mysql_fetch_array($user_payements);    
     $package_id=$_REQUEST['package_id'];
     $view="select * from maverick_packages where package_id=$package_id";
     $show=mysql_query($view);
     $row=mysql_fetch_array($show);
     if( date('d') == 31 || (date('m') == 1 && date('d') > 28)){
    $date = strtotime('last day of next month');
} else {
    $date = strtotime('+1 months');
}

}else
{
    header("location:maverick-game-user-login");
}
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
 <div class="clearfix"></div><br>
<p class="white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p><br>
<form action=" https://easypay.easypaisa.com.pk/easypay/Index.jsf " method="POST" target="_blank">
<input name="storeId" value="783" type="hidden" hidden = "true"/>
<div class="col-md-3"><h4 class="white nomargin">Number of Coins :  <?php echo $row['package_coins']; ?></h4></div>
<div class="clearfix"></div><br>
<div class="col-md-5"><div class="col-md-6 nopad-left"><p class="white nomargin">Amount You Pay :</p></div>
<div class="col-md-6"><input name="amount" class="form-control" value="<?php echo $row['package_price']; ?>.00" readonly /></div></div>
<div class="clearfix"></div><br>
<input name="orderRefNum" value="test" hidden="true"/>
<input type="hidden" value="<?php echo $_SESSION['user_loged_id']; ?>" name="user_id">
<input name="postBackURL" value="http://localhost/maverickgame/confirm-payment.php" hidden = "true">
<div class="col-md-3"><input type="submit" class="button large game" value="Proceed"></div>
</form>
  
  
  <div class="clearfix"></div>
   <br/><br/><br/><br/>
   
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