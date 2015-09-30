<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Discussion Forum | Maverick Game</title>
<meta content="discussion forum, maverick game, discussion community, community for online gaming, forum for online games, discussion forum for online game players" name="keywords"  />
<meta content="Post your discussion topics about Maverick Game here. Answer queries and discuss hot gaming topics on our online discussion community." name="description"/>

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
     <div class="col-md-9 col-sm-9">
      <div class="leader-wrap"  style="min-height:400px;"> 
  <h3 class="white">Welcome to <span>Game Discussion</span></h3>
  <br/>
 
   
   
   <table class="table-responsive table-bordered table-condensed table-detail">
   <thead>
<tr>
    <th colspan="2"><span class="tableformyelo">FORUM</span></th>
    <th colspan="2"><span class="tableform">LATEST POST</span></th>
    
  </tr>
</thead>
  <tbody>
  <tr>
  <td class="nopad" colspan="4"><h1 class="forum-hd1 white">Gaming Forums</h1></td>
  </tr>
   <?php
   $game_forums=getDiscussionForum();
   if($game_forums>0)
   {
       while($game_forum=  mysql_fetch_array($game_forums))
       {
   ?>
      <tr>
      <td align="center"><img width="50" height="50" src="assets/images/forum/<?php echo $game_forum['discussion_simlies']; ?>"></td>
      <td class="width30"><div class="main-topic"><a href="game-forum-thread-<?php echo $game_forum['discussion_forum_seo']; ?>"><?php echo $game_forum['discussion_forum_title']; ?></a> <br/><span class="smalltext"><?php echo $game_forum['forum_description']; ?></span></div></td>
      <td class="width54"><span class="tabletd">
      <?php 
        $last_thread=getLastThreadBySubForum($game_forum['discussion_forum_id']); 
        $lastthread=  mysql_fetch_array($last_thread);
        ?>
            <a href="game-forum-thread-<?php echo $game_forum['discussion_forum_seo']; ?>"><?php echo $lastthread['thread_name'];  ?></a>
        <?php              
        if($lastthread['user_id']>0){
        $user_detail=  getUserById($lastthread['user_id']);
        $user=  mysql_fetch_array($user_detail);
         echo "<br> by ";
        ?>
        <span style='color: #688031'><?php echo $user['name']; ?></span>    
        <?php
        echo "<br>";
        echo date("d-m-y",strtotime($lastthread['createdAt']));       
        }
        ?> 
      
      </td>      
      </tr>
 <?php     
       }
   }
   ?>
         
  </tbody>
</table>



</div>

 
     
     </div>
<div class="col-md-3">       
  <?php
include("recent-discussion.php");
?>
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






</body>
</html>