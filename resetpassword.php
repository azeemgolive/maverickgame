<?php
if(isset($_REQUEST['email']))
{
include("dbconnection.php");
$email=$_REQUEST['email'];
$passkey=$_REQUEST['passkey'];
$result=getUserByEmail($email);
$user=mysql_fetch_array($result);
}else
{
    header("location:index.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Maverick Game|Reset Password</title>
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

<div class="featured-area">
    <div class="container">
    <div class="row">
     <div class="col-md-10 col-sm-9">
      <div class="inner-cnt"> 
             <h2>Forgot <span>Password</span></h2>
             <?php
                if (isset($_REQUEST['reset'])) {
                    ?>    
                    <p class="success" align="center">Your Password has been changed Please Login with Your New Password</p>
                    <?php
                }
                ?>
             <div style="width:500px; margin:0 auto;">
             <form action="resetmaverickpassword.php" method="post" id="userLogin" name="userLogin">
                 <input type="hidden" name="userId" value="<?php echo $user['id']; ?>" />
                                <input type="hidden" name="email" value="<?php echo $user['email']; ?>" />
                                <input type="hidden" name="passkey" value="<?php echo $passkey; ?>" />
             <div class="contact-frm">
              <p> 
                  <div class="leftBox">
                  <div class="row">
                  <div class="col-lg-12">
                  <label>New Password</label>
                  <input type="password" plzceholder="Enter your new password" value="" name="password" id="password"/>
                  </div>
                  </div>
                  </div>
              
              
              <div class="leftBox">
                  <div class="row">
                  <div class="col-lg-12">
                  <label>Confirm Password</label>
                  <input type="password" plzceholder="Enter your confirm password" value="" name="confirm_password" id="confirm_password"/>
                  </div>
                  </div>
                  </div>
             </p>
             <p>
             <div class="leftBox">
                 </div>
              </p>
             <input type="submit" value="Submit" class="submit" name="submit" style="color:#fff; margin:20px 73px 0 0; " /> 
           
             </div> 
                 
           </form>
   </div>
   
   <br/><br/><br/><br/><br/>
            
        </div>
     </div>
      <?php 
            include("rightadds.php");
            ?>
    </div>
    
    
    	<?php 
include("featured-games.php");
?>
    </div>
</div>

<?php
include("footer.php");
?>



<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
            $().ready(function() {
                $("#userLogin").validate({
                    rules: {
                        password: {
                            required: true
                        },
                        confirm_password: {
                            required: true,
                            equalTo: "#password"
                        }
                    },
                    messages: {                        
                        password: {
                            required: "Please enter a password"
                        },
                        confirm_password: {
                            required: "Please enter confirm password",
                            equalTo: "Please enter the same password as above"
                        }
                        
                    }
                });
                $("#password").focus(function() {
                    var password = $("#password").val();
                    var email = $("#email").val();
                    if(password && email && !this.value) {
                        this.value = password + "." + email;
                    }
                });
            });
        </script>
        <style>
.error {
	color: #FF0000;
	font-size: 11px;
	font-weight: normal;
	padding-left: 29px;
}
.error1 {
	color: #FF0000;
	font-size: 14px;
	font-weight: bold;
	padding-left: 29px;
}
</style>



</body>
</html>