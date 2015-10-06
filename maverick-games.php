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
<link rel="stylesheet" type="text/css" href="assets/css/fdw-demo.css" media="all" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-hover-effect.js"></script>
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
.da-thumbs li  img { 
border:5px solid #900;
}
.da-thumbs li  {
	overflow: hidden;
}
.da-thumbs li  article {
	position: absolute;
	background-image:url(assets/images/image_hover.png);
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
padding-top:25px;
font-style:oblique;
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
background-color:#A40101;
border-radius:50px;
cursor:pointer;
background-image:url(assets/images/link_post_icon.png);
background-repeat:no-repeat;
background-position:center;
margin-right:10px;
}

span.zoom{
overflow:hidden;
display:block;
width:35px;
height:35px;
background-color:#A40101;
border-radius:50px;
cursor:pointer;
background-image:url(assets/images/zoom_icon.png);
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
  <div class="freshdesignweb">     
<!-- Portfolio 4 Column start -->
    <div class="image_grid portfolio_4col">
    <ul id="list" class="portfolio_list da-thumbs">
    <?php
      $maverickgames=  getAllMaverickGames();
      if($maverickgames>0)
      {
          while($maverickgame=  mysql_fetch_array($maverickgames)){
     ?>
        
        
        <li style="min-height:140px">
            <img width="200" src="silverhat_games/game_image/<?php echo $maverickgame['game_image']; ?>" class="img-responsive" alt="">
            <article class="da-animate da-slideFromRight" style="display: block;">
                <h3><?php echo $maverickgame['game_name']; ?></h3>
                <em></em>
                <span class="link_post"><a href="maverick-game-<?php echo $maverickgame['game_seo']; ?>"></a></span>
                <?php
                if(isset($_SESSION['user_loged_id']))
                {
                ?>
                <span class="zoom"><a href="<?php echo $maverickgame['game_file']; ?>"></a></span>
             <?php
                }else
                {
                ?>
                <span class="zoom"><a href="maverick-game-user-login"></a></span>
                <?php
                }
                ?>
            </article>
            <div class="clearfix"></div>
            <h3><?php echo $maverickgame['game_name']; ?></h3>
        </li>
        
    <?php    
          }
      }
    ?>
        
        
    
        
        
        
        
        
        
        
        

    </ul>
    </div>
    <!-- Portfolio 4 Column End -->
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