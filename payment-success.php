<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
 $session_id= $_SESSION['user_loged_id']; 
}else
{
    header("location:maverick-game-user-login");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Maverick Game Payment Success</title>
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
  <div class="col-md-1 col-sm-1"></div>
    <div class="col-md-9 col-sm-9">
      <div class="leader-wrap" style="min-height:200px;">
      
          
       <div class="col-md-12">
        <h2>Thank You</h2>
        <h3 class="white text-center">
            <?php
            $session_id= $_SESSION['user_loged_id']; 
            $user_coins=getLogedUserCoins($session_id);
            $user_coin=  mysql_fetch_array($user_coins);
            if($user_coin['fortomo_coins']>0)
            {
            ?>            
            You have successfully purchase Coins, Proceed to games and win rewards points through your games score,<br>
			Best of Luck
           <?php
            }else
            {
           ?>
             You have successfully purchase Coins, Proceed to games and win rewards points through your games score,<br>
			Best of Luck
         <?php   
            }
           ?>
        
        </h3>
      </div>      
      </div>
    </div>

  </div>
  </div>
</div>
<?php
$cuid=$_SESSION['user_loged_id'];
if($user_coin['fortomo_coins']>0)
{
$query="update user_game_coins set fortomo_coins=0 where user_id=$cuid";
mysql_query($query) or die(mysql_error());
}
include("footer-toparea.php");
?>
<?php
include("footer.php");
?>
</body>
</html>