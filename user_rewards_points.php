<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
 $session_id= $_SESSION['user_loged_id'];
 $user_detail=getUserById($_SESSION['user_loged_id']);
 $user=  mysql_fetch_array($user_detail);  
 $user_points=countDailyUserDailyPointByUserId($_SESSION['user_loged_id']);
 $user_point=  mysql_fetch_array($user_points);
}else
{
    header("location:maverick-game-user-login");
}
?>
    
<!DOCTYPE HTML>
<html>
<head>

<title><?php echo $_SESSION['loged_fullname']; ?>'s Profile</title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--script src="assets/js/jquery.min.js" type="text/javascript"></script-->
<!--script type="text/javascript" src="scripts/jquery.min.js"></script-->
  <script type="text/javascript" src="scripts/jquery.imgareaselect.pack.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#tabs" ).tabs();
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

<div class="login-area">
	<div class="container">
    <div class="row">
    <div class="col-md-1 col-sm-1"></div>
     <div class="col-md-10 col-sm-10">
     <div class="leader-wrap" style="min-height:450px;">
     
     <h2 class="">ACCOUNT SETTINGS</h2>

   
<div class="account-tabs">
  <ul>
   <li><a href="maverick-user-profile">Personal Information</a></li>
    <li><a href="update-password">Update Password</a></li>
    <li><a href="user-games-point">User Points</a></li>
    <li><a href="user-game-score">User Score</a></li> 
    <li><a href="user-rewards">User Rewards</a></li>
    <li><a href="user-profile-picture.php">Upload Image</a></li>
  </ul>
<div style="clear:both;"></div>    
    <div id="tabs-3">
  
  <div class="con-div">
   <div class="row">
      <div class="col-md-9">
          <h3 class="text-uppercase">My Points Account Balance </h3>
          <p> Points add up fast so be sure to check your balance when you have played the game. You can redeem them for real rewards by going to rewards section</p>
          <p>Go to reward store and see how much more points do you need to reach to desired reward. </p>
          <p>If any queries please write to us at info@maverickgame.com </p>
          </div>
          
          <div class="col-md-3">
          <div class="points" style="margin:10px 0 0;">
         <p class="white"> Points
          <span>
              
             <?php echo $user_point['over_all_points']; ?></span></p>
          
          </div>
              <div class="point-date">Updated <?php echo date("d-m-Y",  strtotime($user_point['updatedAt'])); ?></div>
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
          
          
          <br/>
          <div class="col-md-4 text-center"><a href="index.php" class="button large game">Home</a></a></div>
          <div class="col-md-4 text-center"><a href="purchase-coins" class="button large game">PURCHASE COIN</a></div>
         <div class="col-md-4 text-center"> <a href="maverick-game-rewards-store" class="button large game">REWARDS</a></div>
          </div>
          </div>
          
          
    
    </div>
    </div>
  
  <div class="clearfix"></div>
  <br/>
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
<script>
        function momprofileedit()
        {          
            document.getElementById('update-profile').style.display="block";
            document.getElementById('edit-profile').style.display="none";
        }
        </script>
<script src="assets/js/jquery.validate.js" type="text/javascript"></script>	
       
                <script type="text/javascript">
            $().ready(function() {
                $("#resetPasswordform").validate({
                    rules: {   
                        old_password: {
                            required: true
                        },
                        new_password: {
                            required: true
                        },
                        confirm_password: {
                            required: true,
                            equalTo: "#new_password"
                        }
                    },
                    messages: {                       
                        old_password: {
                            required: "Please enter your old password"
                        },
                        new_password: {
                            required: "Please enter your new password"
                        },
                        confirm_password: {
                            required: "Please enter confirm password",
                            equalTo: "Please enter the same password as above"
                        }
                        
                    }
                });
                $("#old_password").focus(function() {
                    var old_password = $("#old_password").val();
                    var new_password = $("#new_password").val();
                    if(old_password && new_password && !this.value) {
                        this.value = old_password + "." + new_password;
                    }
                });
            });
        </script>
        <style>
       .error {
       color: #FF0000;
    font-size: 11px;
    font-weight: normal;
    padding-left: 29px;
       }
       
       .error1 {
       color: #FF0000;
    font-size: 14px;
    font-weight: bold;
    padding-left: 29px;
       }
       
        </style>

</body>
</html>