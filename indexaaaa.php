<?php
session_start();
include("dbconnection.php");
$max_scores=  getGameHightestScore();
$max_score = mysql_fetch_array($max_scores);
$game_users=getUserByMaxScore($max_score['game_score']);
$game_user=  mysql_fetch_array($game_users);
$user_id = $game_user['user_id'];
$current_date=date("Y-m-d");
$updateAt=strtotime($game_user['updateAt']);
$updatedAt=date("Y-m-d",$updateAt );
$d1 = new DateTime($current_date);
$d2 = new DateTime($updatedAt);
$interval = $d2->diff($d1);
$difference= $interval->format('%d');
if($interval->format('%d')>1)
{
    $game_point=getUserGameCoins($user_id);
    $user_points=  mysql_fetch_array($game_point);
   if($user_points['total_coins']>0)
   {
      if($user_points['heightest_score_coins']<1)
      {
       $heightest_score_point=100;          
      $total_points=$user_points['total_coins']+$heightest_score_point;
      updateUserCoins($user_id,$heightest_score_point,$total_points);
      }else {
      $heightest_score_point=100;        
      $total_points=$heightest_score_point;
      updateUserCoins($user_id,$heightest_score_point,$total_points);
      }
   }  else {      
      $heightest_score_point=100;
      $total_points=$heightest_score_point;  
      createUserHightScoreCoins($user_id,$heightest_score_point,$total_points);
   }
}
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Maverick Game - Play the Best Online Games Here for Free!</title>
<meta content="play games online, best online games, free online games, adventure games, action games, car racing gamees, educational games, role playing games, RPG games, games for pc, online browser games" name="keywords"  />
<meta content="The best free online games lie within Maverick Game! Play online action, adventure, RPG, racing and educational games for free at Maverick Game!" name="description"/>

<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' >
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/jcarousel.responsive.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
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

<?php 
include("homeslider.php");
?>
<div class="banarea"><div class="container">
<div class="ad-social-box">
                    <div class="row">
                        <div class="left">
                            <div class="left-banner wow zoomInUp">
                                <a href="http://thedigitaltraining.com/" target="_blank"><img class="img-responsive" src="assets/images/left-ads.jpg" alt="Left Banner" height="229" width="308"></a>
                            </div>
                        </div>
                       
                        	<div class="fb-box wow zoomInDown left">
                            <div class="fb-page" data-href="https://www.facebook.com/game.maverick" data-width="665" data-height="231" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/game.maverick"><a href="https://www.facebook.com/game.maverick">Maverick Game</a></blockquote></div></div>
                            </div>
                        
                        <div class="left">
                        <img src="assets/images/ban-getcoins.jpg" width="308" height="229" alt=""> </div>
                    </div>
                </div></div></div>
                <?php
                include("new-games-slider.php");
                ?>
                
<div class="featured-area">
	<div class="container">
    <div class="row">
    	<?php include("featured-games.php");?>
          <div class="col-md-2 col-sm-3">
          <div class="ban-home">
		  <?php 
            include("rightadds.php");
            ?></div>
            </div>
        </div>
  </div>
  </div>

<?php
include("footer.php");
?>

<script src="assets/js/jquery.jcarousel.min.js"></script>
<script src="assets/js/jcarousel.responsive.js"></script>
<script type="text/javascript" src="assets/js/mootools.svn.js"></script>
<script  type="text/javascript" src="assets/js/lofslidernews.mt11.js"></script>
<script type="text/javascript">
	var _lofmain =  $('lofslidecontent45');
	var _lofscmain = _lofmain.getElement('.lof-main-wapper');
	var _lofnavigator = _lofmain.getElement('.lof-navigator-outer .lof-navigator');
	var object = new LofFlashContent( _lofscmain, 
									  _lofnavigator,
									  _lofmain.getElement('.lof-navigator-outer'),
									  { fxObject:{ transition:Fx.Transitions.Quad.easeInOut,  duration:800},
									 	 interval:3000,
							 			 direction:'opacity' } );
	object.start( true, _lofmain.getElement('.preload') );

</script>

</body>
</html>