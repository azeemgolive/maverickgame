<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
    $user_id=$_SESSION['user_loged_id'];
    echo $user_id;
}
?>
<!DOCTYPE HTML>
<html>
  <head>
  
  <title>Leader Board - Check your Game Score | Maverick Game</title>
    <meta  content="leader board, maverick game, game score" name="keywords" />
  <meta content="Check you game score by entering our LeaderBoard at Maverick Game"  name="description" />
  
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
  <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs();
     $("#tabs").find("li.ui-state-active").removeClass('ui-state-active');
  $( "#tabs" ).tabs( "option", "active", 0);
  return false;

  });
  </script>
  <script type="text/javascript">



					

					 

	



</script>
  
  <script>
      function getGameScore(game_id)
      {
          var optionValue = game_id;
          var categoryval=1;
 	  jQuery.ajax({
   	  type: "GET",
    	  url: "getmaverickgamescore.php",
    	  data: "game_id="+optionValue+"&categoryval="+categoryval,
    	  success: function(response){
	  jQuery("#game_score").html(response);
  	   if(!optionValue)
  	   {
		jQuery("#game_score").hide(); 
                jQuery("#game_leader_board").show();                 
   	  }else
  	  {
		jQuery("#game_score").show();  
                jQuery("#game_leader_board").hide();  
          }
	}
        });	
      }
  </script>    
  

  <!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
     <script src="/assets/js/respond.min.js"></script>
<![endif]-->
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
    <div class="col-md-10 col-sm-9">
        <div id="tabs" class="score-tabs">
            <ul>
        <?php 
        $games_tabs=  getAllGames();
        if($games_tabs>0)
        {
            while($game_tab=  mysql_fetch_array($games_tabs))
            {
       
        ?>
          <li ><a href="#tabs-<?php echo $game_tab['game_id']; ?>" onclick="return getGameScore(<?php echo $game_tab['game_id']; ?>);" ><?php echo $game_tab['game_name'];?></a></li>          
        <?php 
            }
        }
        ?>    
          </ul>
        <div style="clear:both;"></div>
        <div id="game_score" style="display:none;"></div>   
         <div id="game_leader_board"> <img src="silverhat_games/game_leaderboards/banner-do-the-dive.jpg" alt="" class="score-banner">
            <div class="titles">
            <div class="row">
                <div class="col-lg-2 bor-right text-center">
                <h2>Rank</h2>
              </div>
                <div class="col-lg-6 bor-right">
                <h2>Player</h2>
              </div>
                <div class="col-lg-4 text-center">
                <h2>Score</h2>
              </div>
              </div>
          </div>
    <?php 
    $i=0;
    $game_id=1;
    $sore_games=getGameScoreByScoreId($game_id);
    if($sore_games>0)
    {
        while($score_game=  mysql_fetch_array($sore_games))
        {
            $i++;
            $games_scores_user=  getUserById($score_game['user_id']);
            $game_score_user=  mysql_fetch_array($games_scores_user);
            
    ?>
    <div class="score-row">
    <div class="row">
    <div class="col-lg-2 bor-right-red text-center">
    <h2>
    <?php 
       echo $i; 
    ?></h2>
    </div>
        <div class="col-lg-6 bor-right-red"> 
            <?php
            if(isset($game_score_user['photo'])!=""){
            
            ?>
            <img src="user_images/<?php echo $game_score_user['photo'];?>" alt="" width="34" height="34">
            <?php
            }else
            {
            ?>
            <img src="user_images/game-do-the-dive.jpg" alt="" width="34" height="34">
            <?php
            }
            ?>
    <h2>
   <?php 
   echo $game_score_user['user_name'];
    ?>
    </h2>
    </div>
    <div class="col-lg-4 text-center">
    <h2><?php echo $score_game['game_score']; ?></h2>
    </div>
    </div>
    </div>
    <?php
    }
  }
   
    ?>
</div>
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