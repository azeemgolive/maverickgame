<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
 $session_id= $_SESSION['user_loged_id'];
 $seo=1;
$game_details=  getGameById($seo);
$game_detail=  mysql_fetch_array($game_details);
}else
{
    header("location:maverick-game-user-login");
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
 function getUserGameScore(user_id,game_id)
      {
         
          var game_id=game_id
          var user_id=user_id;
 	  jQuery.ajax({
   	  type: "GET",
    	  url: "getusergamescore.php",
    	  data: "user_id="+user_id+"&game_id="+game_id,
    	  success: function(response){
	  jQuery("#game_score").html(response);
  	   if(!game_id)
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
<div class="leader-area">
<div class="container">
    <div class="row">
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-md-9 col-sm-9">
    
    <div class="leader-wrap">
    <div class="col-md-12">
    <h2>User Games Score</h2>
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
        <div id="tabs" class="score-tabs">
            <ul>
        <?php 
        $games_tabs=  getAllGames();
        if($games_tabs>0)
        {
            while($game_tab=  mysql_fetch_array($games_tabs))
            {       
        ?>
                <li ><a onclick="return getUserGameScore(<?php echo $session_id; ?>,<?php echo $game_tab['game_id']; ?>)"><?php echo $game_tab['game_name'];?></a></li>          
        <?php 
            }
        }
        ?>    
          </ul>
            
            
        <div id="game_leader_board">
        <div class="clearfix"></div>
        <div class="highscore">
        <div class="row">
        <div class="col-md-12">
        <h3><?php echo $game_detail['game_name']; ?></h3>
        </div>           
          <div class="bdr-bot-red" style="margin:0 0 5px;"></div>
        </div>
        </div>
         <div id="game_leader_board">
         <table class="highscore_table table-nonfluid table table-striped">
         <thead>
         <tr>
         <th>Date</th>
         <th>Score</th>
         </tr>
         </thead>
         <tbody>             
    <?php    
    $sore_games=getGameScoreByUserId($session_id,$game_detail['game_id']);
    if($sore_games>0)
    {
        while($score_game=  mysql_fetch_array($sore_games))
        {      
    ?>             
         <tr>
             <td><p>
             <?php
             echo date("d-m-Y",  strtotime($score_game['createdAt']));
             ?>
                 </p></td>
         <td><p><?php echo $score_game['user_game_score']; ?></p></td>
         </tr>
         
         
          <?php
    }
  }
   
    ?>
         </tbody>
         </table> 
         
            
</div>
        </div>
            <div id="game_score" style="display:none;"></div>   
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