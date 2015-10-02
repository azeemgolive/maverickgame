<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Maverick Games | Maverick Game</title>
<meta content="maverick game, about us, about maaverick games" name="keywords" />
<meta content="About Maverick Games- Home to online action, adventure, educational and role playing games!"  name="description" />

<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-hover-effect.js"></script>
<script src="assets/js/script.js"></script>

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
<style>
/* Portolio Hover */
.da-thumbs li ,
.da-thumbs li  img {
	display: block;
	position: relative;
}
.da-thumbs li  {
	overflow: hidden;
}
.da-thumbs li  article {
	position: absolute;
	background-image:url(images/image_hover.png);
	background-repeat:repeat;
	width: 100%;
	height: 100%;
}
.da-thumbs li  article.da-animate {
	-webkit-transition: all 0.2s ease;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
/* Initial state classes: */
.da-slideFromTop {
	left: 0px;
	top: -100%;
}
.da-slideFromBottom {
	left: 0px;
	top: 100%;
}
.da-slideFromLeft {
	top: 0px; 
	left: -100%;
}
.da-slideFromRight {
	top: 0px;
	left: 100%;
}
/* Final state classes: */
.da-slideTop {
	top: 0px;
}
.da-slideLeft {
	left: 0px;
}
.da-thumbs li  article a {
	color:#fff;
	padding:20px;
	display:block;
}

.da-thumbs {
text-align:center;
}

.da-thumbs li  article h3{
color:#fff;
padding-top:30px;
}

.da-thumbs li  article em{
margin-bottom:10px;
color:#fff;
display:block;
}

.da-thumbs li  article span{
display:inline-block;
}

span.link_post{
display:block;
width:35px;
height:35px;
background-color:#DF6232;
border-radius:50px;
cursor:pointer;
background-image:url(images/link_post_icon.png);
background-repeat:no-repeat;
background-position:center;
margin-right:10px;
}

span.zoom{
overflow:hidden;
display:block;
width:35px;
height:35px;
background-color:#DF6232;
border-radius:50px;
cursor:pointer;
background-image:url(images/zoom_icon.png);
background-repeat:no-repeat;
background-position:center;
margin-left:10px;
}

.portfolio_2col article h3{
padding-top:70px !important;
}

/* Image Grid */
.image_grid {
	float:left;
	overflow:hidden;
	width:700px;
	position:relative;

}

.image_grid li{
	float: left;
	line-height: 17px;
	color: #686f74;
	list-style:none;
	overflow:hidden;
	margin-bottom:23px;
	margin-right:23px;
	text-align:center;
}

</style>
<script type="text/javascript">
//Image Hover
jQuery(document).ready(function(){
jQuery(function() {
	jQuery('ul.da-thumbs > li').hoverdir();
});
});
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
    <div class="col-md-1"></div>
     <div class="col-md-10">
     <div style="min-height:200px;" class="leader-wrap"> 
  <h2>Maverick Games</h2>
  
  <div class="row">
         
  <div class="col-md-3">
<div class="border-line">
  <img width="200" src="silverhat_games/game_image/dothedive.png" class="img-responsive" alt="">
</div>
  <div class="clearfix"></div>
  <h3>Do The Dive</h3>
  <p>Skydiving would be so much fun in a calm and nice weather. Imagine, its like flying in the... 
    <a href="maverick-game-do-the-dive">MORE</a></p>
  </div>
    
  <div class="col-md-3">
<div class="border-line">
  <img width="200" src="silverhat_games/game_image/furiousred.png" class="img-responsive" alt="">
</div>
  <div class="clearfix"></div>
  <h3>Furious Red</h3>
  <p>Either diving, racing or drifting, doesn’t matter what you call it but they are the adrenaline rushing deviations... 
    <a href="maverick-game-furious-red">MORE</a></p>
  </div>
    
  <div class="col-md-3">
<div class="border-line">
  <img width="200" src="silverhat_games/game_image/master-cook.png" class="img-responsive" alt="">
</div>
  <div class="clearfix"></div>
  <h3>Master cook</h3>
  <p>Girls love cooking as it provides you with the most delicious and amazing meals plus improves the skills... 
    <a href="maverick-game-master-cook">MORE</a></p>
  </div>
    
  <div class="col-md-3">
<div class="border-line">
  <img width="200" src="silverhat_games/game_image/wordster.png" class="img-responsive" alt="">
</div>
  <div class="clearfix"></div>
  <h3>Wordster</h3>
  <p>Wordster is a word builder game which are popular for helping kids recognize words. In searching for words,... 
    <a href="maverick-game-word-ster">MORE</a></p>
  </div>
    <div class="clearfix"></div><br>

  <div class="col-md-3">
<div class="border-line">
  <img width="200" src="silverhat_games/game_image/dragondraft.png" class="img-responsive" alt="">
</div>
  <div class="clearfix"></div>
  <h3>Dragon Draft</h3>
  <p>Did you know the draft game has a history that spans thousands of years? There has been many... 
    <a href="maverick-game-dragon-draft">MORE</a></p>
  </div>
   
  
  
  

  
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