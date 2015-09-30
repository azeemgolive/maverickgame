<?php
session_start();
include("dbconnection.php");
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
<div class="leader-area">
<div class="container">
    <div class="row">
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-md-10 col-sm-9">
    <div class="leader-wrap">
    <h2>leaderboard</h2>
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-3">
    <a href="#" class="tophd">HIGH SCORE <br>leaderboard</a>
    </div>
    <div class="col-md-3">
    <a href="#" class="tophd">Point<br>leaderboard</a>
    </div>
    </div>
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
        <div class="clearfix"></div>
        <div class="highscore">
        <div class="row">
        <?php
            if(isset($_SESSION['user_loged_id']))
            {
         ?>
            
        <div class="bdr-bot-red">
        <div class="col-md-1 nopad-right">
          <img src="assets/images/img-highscorer.jpg" width="39" height="39" alt=""> </div>
          <div class="col-md-3 nopad-left">
          <h4 class="hcname">RAHEEL ASLAM</h4>
          </div>
          <div class="col-md-4">
          <h4 class="hcrank">RANK: <span>4</span></h4>
          </div>
          <div class="col-md-4">
          <h4 class="hcscore">SCORE: <span>20152</span></h4>
          </div>
          </div>
            <?php
            }
            ?>            
          <div class="bdr-bot-red" style="margin:0 0 5px;"></div>
        </div>
        </div>
         <div id="game_leader_board">
         <table class="highscore_table table table-striped">
         <thead>
         <tr>
         <th>Rank</th>
         <th>Player</th>
         <th>Score</th>
         </tr>
         </thead>
         <tbody>
      <?php
           $i=0;
           $active="activeplayer";
           $sore_games=getDistinctGameScoreUser();
           if($sore_games>0)
            {
            while($score_game=  mysql_fetch_array($sore_games))
            {
              $i++;      
              $user_scores=countGameScoreByUserId($score_game['user_id']);
              $score_user=  mysql_fetch_array($user_scores);
              $user_info=  getUserById($score_game['user_id']);
              $info_user=  mysql_fetch_array($user_info);              
            ?>   
        <tr <?php if(isset($_SESSION['user_loged_id'])==$score_game['user_id']){?>
                  
                  class="<?php echo $active;?>" <?php }?>>
         <td><p><?php echo $i; ?></p></td>
         <td><img width="34" height="34" alt="" src="user_images/<?php echo $info_user['photo'];?>"> <p class="left"><?php 
   echo $info_user['user_name'];
    ?></p></td>
         <td><p><?php echo $score_user['game_score']; ?></p></td>
         </tr>  
         <?php
          }
        }
       ?>
         </tbody>
         </table> 
         
            
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