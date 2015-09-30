<?php
function getWords($text, $limit)
{
$array = explode(" ", $text, $limit+1);
if (count($array) > $limit)
{
unset($array[$limit]);
}
return implode(" ", $array);
}
?>
<section class="slider wow bounceInDown ">
	<div class="main-container">
    	<div id="lofslidecontent45" class="lof-slidecontent" style="width:1342px; height:465px;">
<div class="preload"><div></div></div>
 <!-- MAIN CONTENT --> 
 <div class="lof-main-outer" style="width:1342px; height:465px;">
  <ul class="lof-main-wapper">
  <?php 
      $slidergames=  getAllGames();
      if($slidergames>0)
      {
          while ($slidergame=  mysql_fetch_array($slidergames))
          {              
      ?> 
  <li>
 	<img class="slider_img" src="silverhat_games/game_background_image/<?php echo $slidergame['game_background_image']; ?>" title="" height="497" width="1342">           
        <?php
        if(isset($_SESSION['user_loged_id']))
        {
        ?>
        <a href="<?php echo $slidergame['game_file'];  ?>" class="box-btn" onClick="ga('send', 'event', '<?php echo $slidergame["game_name"];  ?>', 'Play <?php echo $slidergame["game_name"];  ?>');"><img src="assets/images/btn_playnow.png" width="300" height="50" alt="" /></a> 
      <?php
        }
       else
        {
        ?>
        <a href="maverick-game-<?php echo $slidergame['game_seo'];  ?>" class="box-btn"><img src="assets/images/btn_playnow.png" width="300" height="50" alt="" /></a>    
        <?php
        }
        ?>
    
     
       </li>	  
	   <?php
      }
      }
       ?>
  </ul>
  </div>
  <!-- END MAIN CONTENT --> 
    <!-- NAVIGATOR -->
<div class="lof-navigator-wapper">
<div class="lof-next" href="" onclick="return false">Next</div>
  <div class="lof-navigator-outer">
  		<ul class="lof-navigator">
            
 <?php
 $count = 0;
 $featuredgames=getFeaturedGames(); 
 if($featuredgames>0)
 {
     while($featuregame=  mysql_fetch_array($featuredgames))
     {
         
      if($featuregame['game_id']){
 ?>
 <li class="<?php echo (++$count % 2) ? "orange" : "blue"; ?>">
            	<div>
     <img src="silverhat_games/game_home_image/<?php echo $featuregame['game_home_image']; ?>" />
     <h3> <?php echo ucwords($featuregame['game_name']); ?> </h3>
     <p><?php $mycontent = $featuregame['game_description'];
        echo getWords($mycontent, 16)."..."; ?></p> 
<!--<i><a href="maverick-game-<?php /*?><?php echo $featuregame['game_seo'];  ?><?php */?>">MORE</a></i>-->
                </div>    
            </li>
<?php
     }
 }
 }
 ?>    		
 </ul>
  </div>
  <div class="lof-previous" href="" onclick="return false">Previous</div>
  </div>
 </div>
 
 <?php 
include("caution.php");
?>
</section>