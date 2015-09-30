<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Dicussion Forum | Maverick Game</title>
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

<div class="featured-area">
	<div class="container">
    <div class="row">
     <div class="col-md-9 col-sm-9">
      <div class="inner-cnt"> 
  <h2 class="forumhd">Welcome to <span>Game Discussion</span></h2>
  <br/>
  <table class="table-wdth table-responsive table-bordered table-condensed table-forum">
  <tbody><tr>
    <td style="background:#c70000; width:46%;" class=""><span class="tableformyelo">FORUM</span></td>
    <td style="background:#c70000; width:54%;" class="text-center"><span class="tableform">LATEST POST</span></td>
    
  </tr>
</tbody></table>
   <h1 class="forum-hd1">Gaming Forums</h1>
   
   <table class="table-responsive table-bordered table-condensed table-detail">
  <tbody>
    <tr>
      <td align="center"><img width="50" height="50" src="assets/images/forum/joystick.png"></td>
      <td class="width30"><div class="main-topic"><a href="forum-thread.php">General Gaming</a> <br/><span class="smalltext">Anything to do with video games on any platforms.</span></div></td>
      <td class="width54"><span class="tabletd"> are you a multiplayer gamer?<br>
        by <span class="red">Azeem Akram Solangi</span> <br>
        18-07-15 </span></td>
      
    </tr>
    
    <tr>
      <td align="center"><img width="50" height="50" src="assets/images/forum/podcast.png"></td>
      <td class="width30"><div class="main-topic"><a href="javascript:;">MaverickGame.com Podcast</a> <br/><span class="smalltext">Suggestions and discussion about the weekly podcast.</span></div></td>
      <td class="width54"><span class="tabletd"> are you a multiplayer gamer?<br>
        by <span class="red">Azeem Akram Solangi</span> <br>
        18-07-15 </span></td>
     
    </tr>
    
    <tr>
      <td align="center"><img width="50" height="50" src="assets/images/forum/video.png"></td>
      <td class="width30"><div class="main-topic"><a href="javascript:;">MaverickGame.com Videos</a> <br/><span class="smalltext">Suggestions and discussion about the weekly podcast.</span></div></td>
      <td class="width54"><span class="tabletd"> are you a multiplayer gamer?<br>
        by <span class="red">Azeem Akram Solangi</span> <br>
        18-07-15 </span></td>
      
    </tr>
    
    <tr>
      <td align="center"><img width="50" height="50" src="assets/images/forum/trophy.png"></td>
      <td class="width30"><div class="main-topic"><a href="javascript:;">Online Tournaments &amp; Competitions</a> <br/><span class="smalltext">Suggestions and discussion about the weekly podcast.</span></div></td>
      <td class="width54"><span class="tabletd"> are you a multiplayer gamer?<br>
        by <span class="red">Azeem Akram Solangi</span> <br>
        18-07-15 </span></td>
      
    </tr>
    
    <tr>
      <td align="center"><img width="50" height="50" src="assets/images/forum/article.png"></td>
      <td class="width30"><div class="main-topic"><a href="javascript:;">Article Comments</a> <br/><span class="smalltext">Suggestions and discussion about the weekly podcast.</span></div></td>
      <td class="width54"><span class="tabletd"> are you a multiplayer gamer?<br>
        by <span class="red">Azeem Akram Solangi</span> <br>
        18-07-15 </span></td>
      
    </tr>
    
    
    
    
  </tbody>
</table>

  

</div>
     </div>
     
      <div class="col-md-3">
     
  <?php
include("recent-discussion.php");
?>
     
     


     <a target="_blank" href="http://thedigitaltraining.com/"><img width="308" height="229" alt="Left Banner" src="assets/images/left-ads.jpg" class="img-responsive"></a>
     
     
     </div>
     
     
     
     
    </div>
    
    
    	
    </div>
</div>

<div class="clearfix"></div>
<br/><br/><br/>

<?php
include("footer.php");
?>






</body>
</html>