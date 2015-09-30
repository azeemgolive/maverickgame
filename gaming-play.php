<?php
session_start();
require 'setup.php';
include("dbconnection.php");
include("googlelogin.php");
?>

<!DOCTYPE HTML>
<html>
<head>

<title>Maverick Game</title>
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
<script type="text/javascript" src="assets/js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript">
$(window).load(function(){
	$('.fancybox').fancybox();
});	
	</script>

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
     <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 8]>
<script type="text/javascript" src="/assets/js/html5.js"></script>
<html lang="en" class="ie ie8">
<![endif]-->


</head>

<body class="game">

<!-- Start popup-->

<!-- Login form -->		
<?php
include("silverhat-login.php");
?><!-- End Login form -->	
<!-- signUp form -->    
<?php
include("silverhat-signup.php");

?><!-- End signUp form -->
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
     <div class="col-md-10 col-sm-9">
      <div class="row">
   
   
   <div class="col-lg-3">
   <div class="gallery-thum">
   <a class="fancybox" href="assets/images/gallery/do-the-dive.jpg" data-fancybox-group="gallery"><img src="assets/images/gallery/thumb/do-the-dive.jpg" alt="" /></a>
   </div>
   </div>
   
   <div class="col-lg-3">
   <div class="gallery-thum">
   <a class="fancybox" href="assets/images/gallery/furious-red.jpg" data-fancybox-group="gallery"><img src="assets/images/gallery/thumb/furious-red.jpg" alt="" /></a>
   </div>
   </div>
   
   <div class="col-lg-3">
   <div class="gallery-thum">
   <a class="fancybox" href="assets/images/gallery/mastercook.jpg" data-fancybox-group="gallery"><img src="assets/images/gallery/thumb/mastercook.jpg" alt="" /></a>
   </div>
   </div>
   
   <div class="col-lg-3">
   <div class="gallery-thum">
   <a class="fancybox" href="assets/images/gallery/wordster.jpg" data-fancybox-group="gallery"><img src="assets/images/gallery/thumb/wordster.jpg" alt="" /></a>
   </div>
   </div>
   
   
   
   
   
   
</div>
     </div>
      <?php 
            include("rightadds.php");
            ?>
    </div>
    
    <div class="container">
    
    	<div class="row">
        	<div class="col-md-12 col-sm-12">
                
               <div class="row"> 
                <div class="col-md-9 col-sm-9 col-xs-12"> 
                   <!--<div class="drk-box"><h2> <span></span></h2>
                     <p>
<a class="box-btn" href="javascript:;"></a></p>
                     </div> -->
                     <div class="three-box">
                      
                    
                    
                        <h2>Maverick  <span>Games</span></h2>
                        
                        <?php 
                        $maverick_games=  getAllGames();
                        if($maverick_games>0)
                        {
                            while($maverick_game=  mysql_fetch_array($maverick_games))
                            {
                        ?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<div class="box wow zoomInUp">
                             <div class="border-line">
                                <img src="silverhat_games/game_image/<?php echo $maverick_game['game_image'];?>" class="img-responsive" alt="Box Image" height="125" width="221">
                                </div>
                                
                              
                            </div>
                        </div>
                        <?php
                        }
                        }
                        ?>
                        
                        
                        
                        
                    </div>
                 </div>
                 <div class="col-md-3 col-sm-3 col-xs-12">
                     <div class="fb-page" data-href="https://www.facebook.com/game.maverick" data-width="386" data-height="341" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/game.maverick"><a href="https://www.facebook.com/game.maverick">Maverick Game</a></blockquote></div></div>
                        	
                                                         </div>
            	</div>
                
                    
                </div>
                
            </div>
            </div>
        </div>
    </div>
</div>

<?php 
include("footer.php");

?>






</body>
</html>