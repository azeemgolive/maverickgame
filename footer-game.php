<footer class="footer">
	<div class="container">
    	<div class="row">
            <div class="col-md-3 col-sm-3 animate-heading">
                <div class="f-box wow lightSpeedIn">
                    <h4><strong>Maverick Game</strong> </h4>
                     <ul>
                        <li><a href="../index.php">Home</a></li>
                         <li><a href="../purchase-coins">Buy Coins</a></li>
                         <li><a href="../leader-board">Game Score</a></li>
                        <li><a href="../about-us">About US</a></li>  
                    </ul>
              </div>
           </div>
            <div class="col-md-3 col-sm-3 animate-heading">
                <div class="f-box wow lightSpeedIn">
                    <h4><strong>Maverick Games</strong> </h4>
                     <ul>
                         <?php                         
      $footergames=  getAllGames();
      if($footergames>0)
      {
          while ($footergame=  mysql_fetch_array($footergames))
          {              
      ?>               
          <li><a href="../maverick-game-<?php echo $footergame['game_seo'];  ?>"><?php echo $footergame['game_name'];  ?></a></li>
     <?php
          }
      }
      ?>
                    </ul>
              </div>
           </div>
    </div>
    	<div class="row">
    		<div class="f-bottom">
            	<div class="col-md-2 col-sm-2">
                	<div class="logo wow zoomInDown">
                            <a href="index.php"><img src="../assets/images/maverick-logo.png" alt="Footer Logo"></a>
                </div>
                </div>
                <div class="col-md-8 col-sm-7">
                	<p class="f-p">&copy; 2015 MAVERICK GAME. ALL RIGHTS RESERVED.
                    </p>
                </div>
                <div class="col-md-2 col-sm-3">
                	<ul class="social-icons	">
                            <li class="first"><a class="icon1" href="https://www.facebook.com/game.maverick" target="_blank"></a></li>
                   <li><a class="icon2" href="https://plus.google.com/b/108438942958324909410/108438942958324909410/about" target="_blank"></a></li>
                   <li><a class="icon3" href="https://twitter.com/GameMaverick" target="_blank"></a></li>
                   <li class="last"><a class="icon4" href="https://www.pinterest.com/maverickgame/" target="_blank"></a></li>
                </ul>
                </div>
            </div>
        </div>
</div>




</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58113944-9', 'auto');
  ga('send', 'pageview');

</script>
