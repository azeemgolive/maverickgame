<div class="newgames">
	<div class="container">
                <div class="row">
        	<div class="col-md-10 col-sm-9">
            
            	<h2>New Games</h2>

<div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <?php
                        $newgames =  getAllGames();
                        if($newgames>0)
                        {
                            while($newgame =  mysql_fetch_array($newgames))
                            {
                        ?>
                        
                        <li>
                        <div class="slidebox">
                        <a href="maverick-game-<?php echo $newgame['game_seo'];  ?>">
                        <img src="silverhat_games/game_slider/<?php echo $newgame['game_slider']; ?>" alt="">
                        <h4><?php echo $newgame['game_name'];   ?></h4>
                        <p><?php $mycontents = $newgame['game_description'];
        echo getWords($mycontents, 10)."..."; ?></p>
         </a>
                        </div>
                        </li>  
                       
                        <?php
                            }
                        }
                        ?>
                        
                        
                    </ul>
                </div>
<a href="#" class="jcarousel-control-prev"></a>
 <a href="#" class="jcarousel-control-next"></a>
</div>
        
            </div>
            </div>
            </div>
            </div>