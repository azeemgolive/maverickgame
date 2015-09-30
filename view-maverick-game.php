<?php
session_start();
include("dbconnection.php");
$link="$_SERVER[REQUEST_URI]";
$links=explode("/",$link);
if(count($links)==2)
{
    $seo=$links[1];
}  else {
    $seo=$links[2];
}
$seo=substr($seo, 14);
$game_details=getGameBySeo($seo);
$game_detail=  mysql_fetch_array($game_details);
?>

<!DOCTYPE HTML>
<html>
<head>

<title><?php echo $game_detail['game_seo_title']; ?></title>
<meta content="<?php echo $game_detail['meta_tag_keywords']; ?>"  name="keywords" />
<meta content="<?php echo $game_detail['meta_tag_description']; ?>" name="description"  />

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

<body class="game">
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
 <?php 
include("caution.php");
?>
<div class="featured-area">
	<div class="container">
    <div class="row">
     <div class="col-md-10 col-sm-9">
      <div class="gaming-pic"> 
  <img src="silverhat_games/game_instrustion_image/<?php echo $game_detail['game_instrustion_image'];?>" alt="gaming" height="520" width="1011">
  
  <div class="game-start">
  
  <?php
  if(isset($_SESSION['user_loged_id']))
  {
  ?>
  <a href="<?php echo $game_detail['game_file'];?>" onClick="ga('send', 'event', '<?php echo $game_detail["game_name"];  ?>', 'Play <?php echo $game_detail["game_name"];  ?>');">PLAY NOW</a>
 <?php
  }else
 {
  ?> 
  <a class="button large game" href="maverick-game-user-login"> LOGIN</a>
  <a class="button large game" href="maverick-game-user-register"> SIGN UP</a>
<?php
 }
 ?>
  
  </div>
  
  
</div>

     </div>
      <?php 
            include("rightadds.php");
            ?>
    </div>
    
    
    	<div class="row">
        	<div class="col-md-12 col-sm-12">
                
               <div class="row"> 
                <div class="col-md-9 col-sm-9 col-xs-12"> 
                  <div class="drk-box"><h2> <?php echo $game_detail['game_name']; ?><span></span></h2>
                     <p><?php echo $game_detail['game_description']; ?>
</p>
                     </div>
                     <div class="three-box">
                      
                    
                    
                        <h2>Maverick  <span>Games</span></h2>
                        
                        <?php 
                        $maverick_games=  getAllViewGames();
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

<?php 
include("footer.php");

?>






</body>
</html>