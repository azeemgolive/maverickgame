<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>About Us | Maverick Game</title>
<meta content="maverick game, about us, about maaverick games" name="keywords" />
<meta content="About Maverick Games- Home to online action, adventure, educational and role playing games!"  name="description" />

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
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58113944-9', 'auto');
  ga('send', 'pageview');

</script>

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

<div class="about-area">
	<div class="container">
    <div class="row">
    <div class="col-md-1 col-sm-1"></div>
     <div class="col-md-10">
     <div class="about-wrap">
      <div class="col-md-11">
            <h2>About Us</h2>
      <p>You Are The Chosen One and that's why you are reading this. Maverick Game is your home now, sleep, breath, eat with this portal. Games that we are developing are especially designed for you , we were following you since you were a kid and we know your fantasies, your dreams, your passion. We want you to protect them and play them every single day in your life.
<br/><br/>
You will find your new family here, gamers like you, who take competition seriously. You know you are good but you want to be better - you want to be invincible. But the path to glory will not be an easy one, you will have to practice and work for it because others are eyeing what is rightfully yours. So pick up yourself, gear up for speed and be ready to go aggressive on following your passion. Turn your aspiration into your inspiration and stick with it till you achieve it, for you may never know what lies beyond the glorious light at the end of the tunnel.
<br/><br/>
You may choose to become a Super Car Racer tearing down the race track, prefer to play as a suicidal daredevil free falling from a plane towards rocky plains or a cook at at the next top Resturant, you might be a hero slaying demons in the dark, you might be one of those demons itself! Whatever you choose, you are the choosen one and maverick games is youre home now.</p>
      
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