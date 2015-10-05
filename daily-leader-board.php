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
    <div class="col-md-9 col-sm-9">
    <div class="leader-wrap">
    <div class="col-md-12">
    <h2>leaderboard</h2>
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <!--<div class="col-md-4"><a href="maverick-leader-board" class="tophd">All Games<br> Leaderboard</a></div>-->
    <div class="col-md-6">
    
    <!--<a href="highest-leader-board" class="tophd right">HIGH SCORE <br>leaderboard</a>-->
     <a href="game-leader-board-1" class="tophd right">HIGH SCORE <br>leaderboard</a>
    </div>
    <div class="col-md-6">
    <a href="game-point-leader-board" class="tophd left">Point<br>leaderboard</a>
    </div>
    </div>
    </div>
        <div class="score-tabs">
        <div class="col-md-2"></div>
            <div class="col-md-8"><ul class="gamepoint">
        	<li><a href="game-point-leader-board">All Time </a></li>
            <li><a href="game-point-weekly-leader-board">This Week</a></li>
            <li><a href="game-point-daily-leader-board">Today </a></li>
          </ul></div>
        <div class="clearfix"></div>
        <div class="highscore">
        <div class="row">
        <div class="col-md-12">
        <h3>Today Leaderboard</h3>
        </div>
            <?php
            if(isset($_SESSION['user_loged_id']))
            {
                $user_information= getUserById($_SESSION['user_loged_id']);                               
                $u_info= mysql_fetch_array($user_information);
                $current_user=countDailyUserDailyPointByUserId($_SESSION['user_loged_id']);
                if($current_user>0)
                {
                    $user_current_score=  mysql_fetch_array($current_user);
                }       
                 $utilize=countUtilizeUserPointByUserId($_SESSION['user_loged_id']);
                 $utilize_point=  mysql_fetch_array($utilize);
         ?>
            <?php
            if($user_current_score['user_id']>0)
            {
            ?>
        <div class="bdr-bot-red">
        <div class="col-md-1 nopad-right">
          <img src="user_images/<?php echo $u_info['photo'];  ?>" width="39" height="39" alt=""> </div>
          <div class="col-md-3 nopad-left">
          <h4 class="hcname"><?php echo $u_info['user_name'];  ?></h4>
          </div>
          <div class="col-md-2">
          <h4 class="hcrank">RANK: <span><?php 
          $user_rank=geDailyPointsUserRank($_SESSION['user_loged_id']);
          echo $user_rank;
          ?></span></h4>
          </div>
          <div class="col-md-3">
          <h4 class="hcscore">POINTS: <span><?php echo $user_current_score['over_all_points']; ?></span></h4>
          </div>
          <div class="col-md-3 nopad">
          <h4 class="hcscore">REDEEM: <span><?php echo $utilize_point['utilize_points']; ?></span></h4>
          </div>
          </div>
            <?php
            }
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
         <th>Points</th>
         </tr>
         </thead>
         <tbody>
             <?php
           $i=0;      
           $active="";
           $current_date=date("Y-m-d");
           $sore_games=getDailyPointsLeaderBoard();
           if($sore_games>0)
            {
            while($score_game=  mysql_fetch_array($sore_games))
            { 
              $i++;    
            ?>   
         <?php
         if(isset($_SESSION['user_loged_id']))
         {
             $user_id=$_SESSION['user_loged_id'];
             if($score_game['user_id']==$user_id)
             {
                $active="activeplayer";
             }  else {
                 $active="";
             }
         }
         ?>
         <tr class="<?php echo $active; ?>">
         <td><p><?php echo $i; ?></p></td>
         <td><img width="34" height="34" alt="" src="user_images/<?php echo $score_game['user_image'];?>"> <p class="left"><?php 
          echo $score_game['user_name'];
          ?></p></td>
         <td><p><?php echo $score_game['total_points']; ?></p></td>
         </tr>         
         <?php
          }
        }
       ?>
         </tbody>
         </table> 
         
            
</div>
      </div>
      </div></div>
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