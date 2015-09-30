<?php
session_start();
require 'setup.php';
include("dbconnection.php");
include("googlelogin.php");
?>

<!DOCTYPE HTML>
<html>
<head>


<title>Maverick Game | Contact Us</title>
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
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>	
 <script type="text/javascript" src="js/usernamevalid.js"></script>      
                <script type="text/javascript">
            $().ready(function() {
                $("#contactForm").validate({
                    rules: {
                        email: {
                            required: true,   
                            email: true
                        },
                        name: {
                            required: true                            
                        },
                        message: {
                            required: true
                        },
                        phone_number: {
                            required: true                       
                        }
                    },
                    messages: {
                        email: {
                            required: "Please enter email address",                           
                            email: "Email address must be in the format of name@domain.com"
                        },
                        name: {
                            required: "Please enter your name",
                        },
                        message: {
                            required: "Please enter your message"
                        },
                        phone_number: {
                            required: "Please enter your contact number"                          
                        }
                        
                    }
                });
                $("#email").focus(function() {
                    var name = $("#name").val();
                    var email = $("#email").val();
                    if(name && email && !this.value) {
                        this.value = name + "." + email;
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
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
     <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 8]>
<script type="text/javascript" src="/assets/js/html5.js"></script>
<html lang="en" class="ie ie8">
<![endif]-->
<meta name="google-site-verification" content="ywXjYOYCEEAo7oFbxaG3VU1x2uA4yI9q1PHhRNGTtxY" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58113944-9', 'auto');
  ga('send', 'pageview');

</script>

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
     <div class="col-md-9 col-sm-9">
      <div class="leader-wrap contactForm" style="min-height:500px;"> 
  <h2>Contact  <span>Us</span></h2>
   <?php
                if (isset($_REQUEST['thanks'])) {
                    ?>    
                   <p class="mrg-lft-100"> Thank you for contacting us. Our team will get back to you very soon</p>
                    <?php
                }
                ?>   
 <div class="row">
 
 <div class="col-md-6">
   <form class="contact-frm" method="post" action="docontactus.php" name="contactForm" id="contactForm">
       <input class="form-control" type="text" placeholder="Enter your name"  name="name" id="name"/>
       <input class="form-control" type="text" placeholder="Enter your email"  name="email" id="email"/>
       <input class="form-control" type="text" placeholder="Enter your contact number"  name="phone_number" id="phone_number"/>
       <textarea class="form-control" rows="10" name="message" id="message" placeholder="Enter your message"></textarea>
   <input type="submit" value="Send" class="button large game" /> 
   </form>
   </div>
   
   <div class="col-md-6">
   
   <div class="contact-info">
   <br>
<br>
<br>

<p class="white"> Address : <br />
Office Address: 2nd Floor, Building # 129C, <br />
9th Commercial Street,Defence Phase IV, Karachi.<br />
Phone : +92 3322136181 / +92 3458505713<br />
Email : info@maverickgame.com </p>
<ul class="social-icons	top-line">
               <li class="first"><a class="icon1" href="https://www.facebook.com/game.maverick" target="_blank"></a></li>
                   <li><a class="icon2" href="https://plus.google.com/b/108438942958324909410/108438942958324909410/about" target="_blank"></a></li>
                   <li><a class="icon3" href="javascript:;" target="_blank"></a></li>
                   <li class="last"><a class="icon4" href="https://www.pinterest.com/maverickgame/" target="_blank"></a></li>
                </ul>
 
   </div>
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