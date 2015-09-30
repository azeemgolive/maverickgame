<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>


<title>Maverick Game | Login</title>
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
<script src="assets/js/jquery-1.9.1.js"></script>

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

<div class="login-area">
    <div class="container">
    <div class="row">
    <div class="col-md-1 col-sm-1"></div>
     <div class="col-md-10 col-sm-9">
      <div class="login-wrap"> 
             <div class="row">
             <div class="col-md-1"></div>
             <div class="col-md-9"><br>
             <h2>LOG IN</h2>

             <?php
                if (isset($_REQUEST['reset'])) {
                    ?>    
                    <p class="success" align="center">Your Password has been changed Please Login with Your New Password</p>
                    <?php
                }
                ?>
             <form action="user_login.php" method="post" id="userLogin" name="userLogin">
             

                  <div class="loginbox">
                  <p>Already have an account? </p>
                  <div class="row">
                  <div class="col-lg-12">
                  <label>User name/Email</label>
                  <input type="text" class="form-control" placeholder="Email Address" value="" name="user_email" id="user_email"/>
                  </div>
                  <div class="clearfix"></div><br>
                  <div class="col-lg-12">
                  <label>Password</label> 
                 <input type="password" class="form-control" placeholder="Password" value="" id="password" name="user_password"/> 
                  </div>

             <div class="col-md-4"><input type="submit" value="Submit" name="" class="button large game" /> </div>
             <div class="col-md-8">
             <span class="forgetpass"><a href="maverick-forgotpassword" class="forget-popup">Forgot Password?</a></span></div>
             </div>
                  
            </div>  
           </form>
           </div>
           
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





</body>
</html>