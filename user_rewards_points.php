<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
 $session_id= $_SESSION['user_loged_id'];
 $user_detail=getUserById($_SESSION['user_loged_id']);
 $user=  mysql_fetch_array($user_detail);  
 $user_points=countUserPointsByUserId($_SESSION['user_loged_id']);
 $user_point=  mysql_fetch_array($user_points);
}else
{
    header("location:maverick-game-user-login");
}
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Maverick Game | Points</title>
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
<div class="leader-area">
  <div class="container">
    <div class="row">
    <div class="col-md-1 col-sm-1"></div>
      <div class="col-md-9 col-sm-9">
      <div class="leader-wrap" style="min-height:450px;">
     <h2 class="">Points</h2>
     <?php
include("points-navigation.php");?>
        <div class="row">
      <div class="col-md-9">
          <h3 class="text-uppercase white">My Points Account Balance </h3>
          <p class="white"> Points add up fast so be sure to check your balance! When you've earned enough, you can redeem them for valuable in-game currency on mavericgame.com.*</p>
          <p class="white">Want to earn even faster? Head to our Earn Points Page to see how! </p>
          
          </div>
          
          <div class="col-md-3">
          <div class="points" style="margin:10px 0 0;">
         <p class="white"> Points
          <span> <?php echo $user_point['total_points']; ?></span></p>
          
          </div>
          <div class="point-date">Updated <?php echo date("d-m-Y",  strtotime($user_point['updatedAt'])); ?> </div>
          </div>
          
          <div class="col-md-12">
          <table class="table-points table-striped table-responsive table-bordered table-forum">
          <thead>
			<tr>
                <th><span class="tableformyelo">Date </span></th>
                <th><span class="tableform">Activity </span></th>
                <th><span class="tableform">Points Earned </span></th>
                <th><span class="tableform">Redeem Points</span></th>
              </tr>
			</thead>
            <tbody>
              <?php
             $user_points_ac=getUserPointsByUserId($session_id);
             if($user_points_ac>0)
             {
                 while($points_user=  mysql_fetch_array($user_points_ac)){
             
             ?>
                <tr>
                    <td><?php echo date("d-m-y",  strtotime($points_user['createdAt'])); ?></td>
                <td>Played game 
                <?php
                 $game_info=  getGameById($points_user['game_id']);
                 $game=  mysql_fetch_array($game_info);
                 echo $game['game_name'];
                ?>
                </td>
                 <td><?php echo $points_user['total_points']; ?></td>
                <td>0</td>
              </tr>  
            <?php      
                 }
             }
             ?>
             
              <?php
              $user_redeem_points=getUserRedeemPointByUserId($session_id);
              if($user_redeem_points>0)
              {
                  while($user_redeem_point=  mysql_fetch_array($user_redeem_points))
                  {
             ?>         
           <tr>
             <td><?php echo date("d-m-y",  strtotime($user_redeem_point['utilize_points_date'])); ?></td>
                <td>Redeem Award
                <?php
                 echo $user_redeem_point['reward_name'];
                ?>
                </td>
                 <td>0</td>
                <td><?php echo $user_redeem_point['utilize_points']; ?></td>
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
</div>
<div class="clearfix"></div>

<?php
include("footer-toparea.php");
?>
<?php
include("footer.php");
?>
</body>
</html>