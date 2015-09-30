<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Maverick Game Redeem Points</title>
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
        <div class="leader-wrap" style="min-height:450px;">
        <h2>Redeem Points</h2>
  
           <div class="col-md-9">
          <p class="white">Select your game from the list below* then choose the package you’d like to add. Once your in-game currency shows up in your game account, use it to wreak havoc on your enemies. </p>
          <p class="white">Not enough points just yet? Don’t worry, your points add up quickly, so be sure to check your balance often to see when it’s time for you to redeem! </p></div>
          <div class="col-md-3">
          <div style="margin:10px 0 0;" class="points">
         <p class="white"> Points
          <span>235</span></p>
          
          </div>
          <div class="point-date">Total updated 8/10/15 </div>
          </div>

          
          <div class="col-md-12">
          <table class="table-points table-striped table-responsive table-bordered table-forum">
          <thead>
			<tr>
                <th><span class="tableformyelo">Date </span></th>
                <th><span class="tableform">Activity </span></th>
                <th><span class="tableform">Debit/Credit</span></th>
              </tr>
			</thead>
            <tbody>
              <tr>
                <td>Date</td>
                <td>Activity</td>
                <td>Debit/Credit</td>
              </tr>
              <tr>
                <td>Date</td>
                <td>Activity</td>
                <td>Debit/Credit</td>
              </tr>
            </tbody>
          </table>

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