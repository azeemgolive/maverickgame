<meta name="viewport" content="width=1300">
<section class="top-header animated">
	<div class="container">
        	<div class="row">
        	<div class="col-sm-2 col-md-2 col-xs-12 animate-heading">
            	<ul class="top-left-btn wow bounceInLeft ">
                	<li class="first last"><a href="javascript:;">Know More </a></li>
              </ul>
                
            </div>
            
            <div class="top-right-side wow bounceInRight">
           	<div class="col-sm-3 col-md-4 col-xs-12 animate-heading nopad">

            <div class="top-search">
                	<div class="form-group has-feedback">  
                            <form method="post" action="game-search-result.php">             
                                <input type="text" class="form-control" placeholder="Maverick Games" name="search">
                            
                           
                           <input name="" type="submit" value="submit" class="search-btn"> 
                           
                        
                        </form>
             	   </div>
                </div>
            
	
            </div>
            
            
            
<?php
if(isset($_SESSION['user_loged_id']))
{    
    $user_profile_pics=  getUserById($_SESSION['user_loged_id']);
    $user_profile_pic=  mysql_fetch_array($user_profile_pics);
?>
<div class="col-md-4">
<?php 
$user_coins=getCoinsByUserId($_SESSION['user_loged_id']);
$user_coins=getCoinsByUserId($_SESSION['user_loged_id']);
    $user_coin=  mysql_fetch_array($user_coins);
    if($user_coin['total_coins']>0)
    {    
        ?>
?>
<div class="col-sm-6 col-md-5 col-xs-5 nopad">
            <div class="coins">
            <p><?php echo $user_coin['total_coins']; ?></p>
              <img src="assets/images/btn_coins.png" width="97" height="30" alt="" /> </div></div>
<?php
    }else
    {
 ?>
<div class="col-sm-6 col-md-5 col-xs-5 nopad">
            <div class="coins">
            <p>0</p>
              <img src="assets/images/btn_coins.png" width="97" height="30" alt="" /> </div></div>
<?php
    }
    ?>
<div class="col-sm-4 col-md-6 animate-heading">
<span class="user-login-name">
<?php 
if($_SESSION['loged_user_image']=="")
{
    if($user_profile_pic['gender']=="male")
    {
?>  
    <img src="user_images/male.jpg" height="" width=""/>    
    <?php
    }
    if($user_profile_pic['gender']=="female")
    {
    ?>
    <img src="user_images/female.jpg" height="" width=""/>    
    <?php
    }
    ?>
    
    
<?php
}else
{
?>
    <img src="user_images/<?php echo $user_profile_pic['photo']; ?>" height="" width=""/>
<?php
}
?>
<div class="user-name">
<?php
if(isset($_SESSION['loged_user_name']))echo $_SESSION['loged_user_name'];
?>
</div>
<ul class="user-logout"><li><a href="maverick-user-profile">Settings</a></li><li><a class="first" href="logout.php">Log out</a></li>
      </ul>
</span>
    </div>
    </div>
<?php
} 
    else
{
?>
<div class="col-sm-4 col-md-4 col-xs-6 animate-heading">
            	<ul class="top-login-btn">
                	
                	<li class="first" id="popup_window"><a href="maverick-game-user-login">Login</a></li>
                    <li class="last" id="popup_window"><a href="maverick-game-user-register">Sign Up</a></li>
                </ul>
</div>
<?php
}
?>              
<div class="col-sm-3 col-md-2 col-xs-6 animate-heading">
            	<ul class="social-icons	">
                	<li class="first"><a class="icon1" href="https://www.facebook.com/game.maverick" target="_blank"></a></li>
                   <li><a class="icon2" href="https://plus.google.com/b/108438942958324909410/108438942958324909410/about" target="_blank"></a></li>
                   <li><a class="icon3" href="https://twitter.com/GameMaverick" target="_blank"></a></li>
                   <li class="last"><a class="icon4" href="https://www.pinterest.com/maverickgame/" target="_blank"></a></li>
                </ul>
            
            </div>
            </div>
            <div class="clearfix"></div>
            <?php 
            include("topnavigation.php");
            ?>
        </div>
        
        <div class="rewards">
        <a href="maverick-game-rewards-store"><img src="assets/images/maveric-rewards.png" height="" width=""/></a>
        </div>
    </div>
</section>
<div class="newweb">
<div class="row">
<div class="col-md-12">
<p class="white text-center"><strong>We are working on New Website</strong></p>
</div>
</div>
</div>

    