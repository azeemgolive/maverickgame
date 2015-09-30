<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Rewards Store | Maverick Game </title>
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

<div class="rewards-area">
	<div class="container">
    <div class="row">
    <div class="col-md-1 col-sm-1"></div>
     <div class="col-md-9 col-sm-9">
      <div class="rewards-wrap">
      <div class="col-md-12">
      <h2 class="text-uppercase">Welcome</h2>
      <p class="white text-center">You Are The Chosen One and that's why you are reading this. Maverick Game is your home now, sleep, breath, eat with this portal. Games that we are developing are especially designed for you , we were following you since you were a kid and we know your fantasies, your dreams, your passion. We want you to protect them and play them every single day in your life. </p>
      <div class="col-md-12">
        <img src="assets/images/ban-rewards.png" alt="" width="585" height="222" class="center-block">        
      </div>
        <div class="clearfix"></div>
        <h2 class="text-uppercase">Rewards</h2>
        <div class="row"><div class="col-md-12">
        <ul class="rewards-list">
        <!-- Large modal -->
        
        <?php
        $rewards=  getAllRewardList();
        if($rewards>0)
        {
            while($rewad=  mysql_fetch_array($rewards))
            {
        ?>        
        <li data-toggle="modal" data-target="#demo-modal-3<?php echo $rewad['reward_id']; ?>"><span><img src="rewards_stores/<?php echo $rewad['reward_image']; ?>" width="144" height="144" alt="">
        <p><?php echo $rewad['reward_name']; ?><br><span><?php echo $rewad['reward_points']; ?> Points</span></p>
            </span>
        </li>
        <form class="modal multi-step" id="demo-modal-3<?php echo $rewad['reward_id']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title step-1" data-step="1"><?php echo $rewad['reward_name']; ?> <img src="rewards_stores/<?php echo $rewad['reward_image']; ?>" width="50" height="50" alt="" style="float:right;margin-top: -12px;"></h4>
                <h4 class="modal-title step-2" data-step="2"><?php echo $rewad['reward_name']; ?> <img src="rewards_stores/<?php echo $rewad['reward_image']; ?>" width="50" height="50" alt="" style="float:right;margin-top: -12px;"></h4>
                <h4 class="modal-title step-3" data-step="3"><?php echo $rewad['reward_name']; ?> <img src="rewards_stores/<?php echo $rewad['reward_image']; ?>" width="50" height="50" alt="" style="float:right;margin-top: -12px;"></h4>
                <h4 class="modal-title step-4" data-step="4"><?php echo $rewad['reward_name']; ?> <img src="rewards_stores/<?php echo $rewad['reward_image']; ?>" width="50" height="50" alt="" style="float:right;margin-top: -12px;"></h4>
                
            </div>
            <div class="modal-body step-1" data-step="1">
                
        <h4 class="modal-title" id="gridSystemModalLabel"><?php echo $rewad['reward_name']; ?></h4>
        <p><?php echo $rewad['reward_points']; ?> Points</p>
            </div>
            
            <div class="modal-body step-3" data-step="3">
                <?php
            if(isset($_SESSION['user_loged_id']))
            {
            $user_points=  countUserRedemRewardPoints($_SESSION['user_loged_id']);
            $user_point=  mysql_fetch_array($user_points);
            if($user_point['total_points']>$rewad['reward_points'])
            {
            ?>       
            <p><?php echo $rewad['reward_points']; ?> Points will be deducted from your avaliable point. </p>
            <?php
            }else
            {
            ?>
           <p><?php echo $rewad['reward_points']; ?> Insufficient Points play more. </p>
           <?php
          }
          }
        ?>
            </div>            
            <div class="modal-body step-4" data-step="4">
                <p>Thanks You
            <br>
            Your request is submited our Team will contact you in 48 hours
        </p>
            </div>
            
            <div class="modal-footer">
            <span style="float:left;">Point Required:<?php echo $rewad['reward_points']; ?></span>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
				<?php 
        if(isset($_SESSION['user_loged_id']))
        {
       ?>
       <button type="button" class="btn btn-primary step step-1" data-step="1" onClick="sendEvent('#demo-modal-3<?php echo $rewad['reward_id']; ?>', 3)">OK</button>
       <?php   
        }else {
            ?>
        <a href="maverick-game-user-login"><button type="button" class="btn btn-primary step step-1" data-step="1" onClick="sendEvent('#demo-modal-3<?php echo $rewad['reward_id']; ?>', window.location.reload())">OK</button></a>
       <?php
        }
        ?>
        <?php
        if(isset($_SESSION['user_loged_id']))
        {
            $user_points=  countUserRedemRewardPoints($_SESSION['user_loged_id']);
            $user_point=  mysql_fetch_array($user_points);
            if($user_point['total_points']>$rewad['reward_points'])
            {
            ?>     
                <button type="button" class="btn btn-primary step step-3" data-step="3" onClick="redeemPoints(<?php echo $_SESSION['user_loged_id'] ?>,<?php echo $rewad['reward_id'];  ?>),sendEvent('#demo-modal-3<?php echo $rewad['reward_id']; ?>', 4)">Confirm</button>
            <?php
            }else
            {
           ?>    
            <a href="maverick-game-rewards-store"><button type="button" class="btn btn-primary step step-3" data-step="3" onClick="sendEvent('#demo-modal-3<?php echo $rewad['reward_id']; ?>', window.location.reload()), window.location.reload()">OK</button></a>
          <?php       
            }
        }
            ?>                
                <button type="button" class="btn btn-success step step-4" data-step="4" onClick="sendEvent('#demo-modal-3<?php echo $rewad['reward_id']; ?>', 4), window.location.reload()" data-dismiss="modal">Ok</button>
            
            </div>
        </div>
    </div>
</form>

   
 <?php                
            }            
        }
        ?>
        </ul>
        </div></div>
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
<script src="assets/js/multi-step-modal.js"></script>
<script>
sendEvent = function(sel, step) {
    $(sel).trigger('next.m.' + step);
}
</script>
<script>
function redeemPoints(user_id,reward_id)
{
   var user_id = user_id;
   var reward_id  = reward_id;   
   jQuery.ajax({
   	  type: "POST",
    	  url: "redeemuserreward.php",
    	  data: "user_id="+user_id+"&reward_id="+reward_id,  
        });
}
</script>
</body>
</html>