<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Purchase Coins | Maverick Game</title>
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
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
            $().ready(function() {
                $("#sctrachcardform").validate({
                    rules: {
                        scratch_card_number: {
                            required: true,
                            minlength:12,
                            digits:true
                        }
                    },
                    messages: {
                        scratch_card_number: {
                            required: "Please enter card number",
                             minlength: "card number must be 12 letter",
                             digits: "Card  number must be in the format of 032128282755",
                        }
                    }
                });
                $("#scratch_card_number").focus(function() {
                    var scratch_card_number = $("#scratch_card_number").val();
                    if(scratch_card_number && !this.value) {
                        this.value = scratch_card_number;
                    }
                });
            });
        </script>
        <style>
.error {
	color: #FF0000;
	font-size: 15px;
	font-weight: normal;
	padding-left: 5px;
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
  <div class="col-md-1 col-sm-1"></div>
    <div class="col-md-9 col-sm-9">
      <div class="leader-wrap" style="min-height:475px;">
      <div class="col-md-12">
        <h2>Maverick Packages</h2>
        <h3 class="heading4">How to get a Packages</h3>
        <p class="white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
        <div class="clearfix"></div><br>
		<div class="col-md-2"></div>
                <?php
                if(isset($_REQUEST['err']))
                {
                ?>
                <div class="error">You have enter invalid card number</div>                
                <?php
                }
                ?>
                <?php
                if(isset($_REQUEST['coins']))
                {
                ?>
                <div class="">You have successfully purchase <?php echo $_REQUEST['coins']; ?> Coins</div>                
                <?php
                }
                ?>                
        <div class="col-md-8">
          <form action="scratchcardverify.php" method="post" id="sctrachcardform" name="sctrachcardform">
                  <div class="row">
                  <div class="col-md-12">
                  <label>Scratch Card Number :</label>
                  <input type="text" class="form-control" placeholder="Enter Scratch Card Number" value="" name="scratch_card_number" id="scratch_card_number"/>
                  </div>
                  <div class="clearfix"></div>                 
             <div class="col-md-12"><input type="submit" value="Submit" name="" class="button large game" /> </div>
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