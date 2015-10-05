<?php 
$link="$_SERVER[REQUEST_URI]";
$links=explode("/",$link);
if(count($links)==2)
{
    $seo=$links[1];
}  else {
    $seo=$links[2];
}
?>
<section class="header">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-2 col-md-2">
            	<div class="logo">
                    <a href="index.php"><img class="img-responsive" src="assets/images/maverick-logo.png" alt="Logo" height="116" width="196"></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
            	<div class="head-banner">
                    <img class="img-responsive" src="assets/images/digital-training.jpg" alt="Header Banner" height="102" width="693">
                </div>
            </div>
            <div class="col-lg-3 col-md-2">
            <div class="main-menu dt-menu ">
                <nav role="navigation" class="navbar navbar-inverse">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle collapsed" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collection of nav links, forms, and other content for toggling -->
                <div id="navbarCollapse" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li <?php if($seo=="index.php"){ ?> class="active" <?php }?>><a href="index.php">Home</a></li>
                        <li <?php if($seo=="maverick-games"){ ?> class="active" <?php }?>><a  href="maverick-games">Games</a></li>
                         <li <?php if($seo=="leader-board"){ ?>class="active" <?php }?>><a  href="leader-board">Game Score</a></li>   
                         <li <?php if($seo=="game-package-payment"){ ?>class="active" <?php }?>><a  href="game-package-payment">Buy Coins</a></li>     
                          <li <?php if($seo=="game-dicussion-forums"){ ?> class="active" <?php }?>><a  href="game-dicussion-forums">Game Forum</a></li>
                          
                           <li <?php if($seo=="about-us"){ ?> class="active" <?php }?>><a  href="about-us">About US</a></li>
                           
                    </ul>
                </div>
                </nav>
			</div>
  		 </div>
        </div>
    </div>
</section>