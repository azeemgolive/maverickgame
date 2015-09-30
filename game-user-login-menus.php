<section class="top-header animated">
	<div class="container">
        	<div class="row">
        	<div class="col-sm-2 col-md-2 col-xs-12 animate-heading">
            	<ul class="top-left-btn wow bounceInLeft ">
                	<li class="first last"><a href="javascript:;">Know More</a></li>
              </ul>
                
            </div>
            
            <div class="top-right-side wow bounceInRight">
           	<div class="col-sm-3 col-md-5 col-xs-12 animate-heading">
				<div class="top-search">
                	<div class="form-group has-feedback">  
                            <form method="post" action="../maverick-game-search-result.php">             
                                <input type="text" class="form-control" placeholder="Maverick Games" name="search">
                            
                           
                           <input name="" type="submit" value="submit" class="search-btn"> 
                           
                        
                        </form>
             	   </div>
                </div>
            </div>
<?php
if(isset($_SESSION['user_loged_id']))
{    
?>
<div class="col-sm-4 col-md-2 animate-heading">
<span class="user-login-name">
<?php 
if(isset($_SESSION['loged_user_image']))
{
?>    
    <img src="../user_images/<?php echo $_SESSION['loged_user_image']; ?>" height="" width=""/>
<?php
}else
{
?>
    <img src="../user_images/pro_03.png" height="" width=""/>
<?php
}
?>
<div class="user-name">
<?php
if(isset($_SESSION['loged_user_name']))echo $_SESSION['loged_user_name'];
?>
</div>
<ul class="user-logout"><li><a href="../maverick-user-profile">Settings</a></li><li><a class="first" href="../logout.php">Log out</a></li>
      </ul>
</span>
    </div>
<?php
}    
    else
{
?>
<div class="col-sm-4 col-md-2 col-xs-6 animate-heading">
            	<ul class="top-login-btn">
                	
                	<li class="first" id="popup_window"><a href="../maverick-game-user-login">Login</a></li>
                    <li class="last" id="popup_window"><a href="../maverick-game-user-register">Sign Up</a></li>
                </ul>
</div>
<?php
}
?>

                <div class="col-sm-3 col-md-3 col-xs-6 animate-heading">
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
            include("../topnavigation.php");
            ?>
        </div>
    </div>
</section>



    