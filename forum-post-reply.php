<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
 $link="$_SERVER[REQUEST_URI]";
$links=explode("/",$link);
if(count($links)==2)
{
    $seo1=$links[1];
    $seo=substr($seo1, 23);
}  else {
    $seo1=$links[2];
    $seo=substr($seo1, 23);
}

}else if(isset($_SESSION['FBID']))
{
$link="$_SERVER[REQUEST_URI]";
$links=explode("/",$link);
if(count($links)==2)
{
    $seo1=$links[1];
    $seo=substr($seo1, 23);
}  else {
    $seo1=$links[2];
    $seo=substr($seo1, 23);
}
}
else {
    header("location:maverick-game-user-login");
}
?>
<!DOCTYPE HTML>
<html>
<head>

<title><?php echo $seo; ?> thread quick reply | Maverick Game </title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
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
<?php
$seo=substr($seo, 23);
 $thread= getThreadBySeo($seo);
 $threads=  mysql_fetch_array($thread);
 $thread_sub_forum=  getSubForumByThreads($threads['discussion_forum_id']);
 $sub_forum_thread=  mysql_fetch_array($thread_sub_forum);
 $subforum=getSubForumBySeo($seo);
  $subforums=  mysql_fetch_array($subforum);
  $sub_forum_id=$subforums['discussion_forum_id'];
 ?>  
<div class="leader-area">
	<div class="container">
    <div class="row">
     <div class="col-md-9 col-sm-9">
      <div class="leader-wrap" style="min-height:500px;"> 
  <h2>Discussion Fourm</span></h2>
  <br/>  
  <div class="breadcrum">
    <a href="maverick-game-dicussion-forum" style="color:#FFFFFF;">Game Discussion Forum </a> > <a href="game-forum-thread-<?php echo $sub_forum_thread['discussion_forum_seo']; ?>" style="color:#FFFFFF;"><?php echo $sub_forum_thread['discussion_forum_title']; ?></a> > <a href="game-forum-post-<?php echo $threads['thread_seo']; ?>" style="color:#FFFFFF;"><?php echo $threads['thread_name']; ?></a>
</div>
   <div class="col-md-12 postdtl">
            <div class="col-md-12 postdtl3 QUICK1">
              <h3 style="" class="posth3">Quick Reply to Thread </h3>
            </div>            
             <div class="col-md-12">
             <form method="post" class="thread" action="dopostquickreplythread.php">
            <input type="hidden" name="thread_id" value="<?php echo $threads['thread_id']; ?>">
       <input type="hidden" name="discussion_forum_id" value="<?php echo $threads['discussion_forum_id']; ?>">
 <input type="hidden" name="thread_seo" value="<?php echo $threads['thread_seo']; ?>">
  <input class="form-control" type="text" name="thread_name" id="thread_name" placeholder="Title" style="background:#f0efeb; margin-top:5px;"/>

      <textarea rows="15" cols="50" name="thread_message" class="form-control" placeholder="WRITE HERE" style="background:#f0efeb; margin-top:5px;"></textarea>
 
          <input type="submit" name="submit" value="Post" class="btn-post"> <a href="game-forum-post-<?php echo $threads['thread_seo']; ?>" class="btn-reply">Back</a>
             </form>
             </div>
          </div>

  

</div>
     </div>
     
      <div class="col-md-3">
     
  <?php
include("recent-discussion.php");
?>
     
     


     <a target="_blank" href="http://thedigitaltraining.com/"><img width="308" height="229" alt="Left Banner" src="assets/images/left-ads.jpg" class="img-responsive"></a>
     
     
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