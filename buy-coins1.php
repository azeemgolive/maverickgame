<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Purchase Coins | Maverick Game</title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
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
<div class="featured-area">
<div class="container">
  <div class="row">
    <div class="col-md-7 col-sm-9">
      <div class="inner-cnt" style="padding:0px;">
        <h3 class="heading1">Select Your Favourite Package</h3>
        
        
        
       <?php 
       $game_packages=  getMaverickGamePackages();
       if($game_packages>0)
       {
           while($game_package=  mysql_fetch_array($game_packages))
           {
      ?>
        <div class="col-lg-4">
          <div class="packages">
            <div class="coin-wrap">
              <div class="coin"> <?php echo $game_package['package_price']; ?> <br/>
                <span>coins</span> </div>
              <div class="rupees"> <?php echo $game_package['package_coins']; ?> <br/>
                <span>r.s.</span> </div>
                <img class="img-responsive" src="game_packages/<?php echo $game_package['package_image']; ?>" alt="" >
            </div>
              <form method="post" action="game-package-payment">
                  <input type="hidden" name="package_id" id="package_id" value="<?php echo $game_package['package_id']; ?>">
                  <input type="hidden" name="package_name" id="package_name" value="<?php echo $game_package['package_name']; ?>">
                  <input type="hidden" name="package_price" id="package_price" value="<?php echo $game_package['package_price']; ?>">
                  <input type="hidden" name="package_coins"  id="package_coins" value="<?php echo $game_package['package_coins']; ?>"> 
				<input type="hidden" name="package_description"  id="package_description" value="<?php echo $game_package['package_description']; ?>"> 						  
                  <input type="image" src="assets/images/buy-now.jpg" name="submit" value="Buy Now" class="img-responsive btn-buy-coins">
            </form>
              <p> <?php echo $game_package['package_description']; ?></p>
          </div>
        </div>
      <?php  
           }
       }
       ?>        
      </div>
    </div>
    <div class="col-md-3">
      <div class="inner-cnt nopad">
        <h3 class="heading2">How to get a Packages</h3>
        <div class="grey-bg"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. <br/>
          <br/>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'. <br/>
          <br/>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum . </div>
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