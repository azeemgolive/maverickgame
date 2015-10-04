<footer class="footer">
	<div class="container">
    	<div class="row">
            <div class="col-md-6 col-sm-6 animate-heading">
                <div class="f-box wow lightSpeedIn">
                     <ul class="ft-nav">
                        <li class="nopad-left"><a href="index.php">Home</a></li>
                         <li><a href="game-package-payment">Buy Coins</a></li>
                         <li><a href="leader-board">Game Score</a></li>
                         <li><a href="maverick-game-rewards-store">Rewards</a></li> 
                        <li><a href="about-us">About US</a></li> 
                        <li class="nobdr"><a href="contact-us">Contact US</a></li>  
                    </ul>
              </div>
              <div class="f-bottom">
            	<div class="col-md-4 col-sm-4 nopad-left">
                	<div class="logo wow zoomInDown">
                            <a href="index.php"><img src="assets/images/ft-logo.png" alt="Footer Logo"></a>
                </div>
                </div>
                <div class="col-md-8 col-sm-7 nopad-left">
                <ul class="social-icons	">
                            <li class="first"><a class="icon1" href="https://www.facebook.com/game.maverick" target="_blank"></a></li>
                   <li><a class="icon2" href="https://plus.google.com/b/108438942958324909410/108438942958324909410/about" target="_blank"></a></li>
                   <li><a class="icon3" href="https://twitter.com/GameMaverick" target="_blank"></a></li>
                   <li class="last"><a class="icon4" href="https://www.pinterest.com/maverickgame/" target="_blank"></a></li>
                </ul>
                	<p class="f-p">&copy; 2015 MAVERICK GAME. ALL RIGHTS RESERVED.
                    </p>
                </div>
                
            </div>
           </div>
            <div class="col-md-6 col-sm-6 animate-heading">
                <div class="col-md-4"><div class="f-box wow lightSpeedIn">
                    <h4>Games </h4>
                     <ul class="ft-nav2">
                         <?php                         
      $footergames=  getAllGames();
      if($footergames>0)
      {
          while ($footergame=  mysql_fetch_array($footergames))
          {              
      ?>               
          <li><a href="maverick-game-<?php echo $footergame['game_seo'];  ?>"><?php echo $footergame['game_name'];  ?></a></li>
     <?php
          }
      }
      ?>
                    </ul>
              </div></div>
              
              
           </div>
           <div class="clearfix"></div><br />
    </div>
    	
</div>
<?php if($seo==""){ ?> <a class="iconhome" href="index.php" style="display:none;"></a><?php } else {
	
	?> <a class="iconhome" href="index.php"></a> <?php  } ?>

<div class="floating-form-wrap" style="display: block; margin-right: -483px;">
	<div class="floating-form">
    	
<div class="form-container">
	<div class="formdv">
       <div class="col-md-12">
       <p>Welcome to Maverick Game<br />
       	<span>
Ever wished of buying Mercedes Benz or a Kool Laptop, Well you are in the right place!
Here you are rewarded purely on your performance in the game. Better you play more reward points you get. You can purchase real products as listed in our Rewards Store upon reaching to the desired level of points. You need coins to play game, for purchase of coins please go to <a href="game-package-payment">Buy Coins</a> section. 1 coin is for Rs.5, you can pay through your mobile phone balance, easypaisa or through Maverick Game Scratch cards.  You can view leaderboard of Game score and Points in <a href="leader-board" >Game Score</a> area.
We wish you the very best in game performance and earning reward points. Please note that our games might take upto 3-5 mins in loading. 
</span></p>
       </div>
	</div>
</div>  
    </div>
	<div class="form-handle">
    </div>
</div>

</footer>
<script>
$(document).ready(function(e) {
$('.form-handle').click( function(){
		if($('.floating-form-wrap').css('margin-right')=='-483px'){
			$('.floating-form-wrap').animate({'margin-right': '0px'})
			$('.cus-overlay').fadeIn(300);
		}
		else{
			$('.floating-form-wrap').animate({'margin-right': '-483px'})
			$('.cus-overlay').fadeOut(300);
		}
	})

    
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58113944-9', 'auto');
  ga('send', 'pageview');

</script>
