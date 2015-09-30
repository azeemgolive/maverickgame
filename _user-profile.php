<?php
session_start();
require 'setup.php';
include("dbconnection.php");
include("googlelogin.php");
$session_id=$_SESSION['user_loged_id'];
$path = "user_images/";
?>
    <?php       
	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST['submit']))
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats) && $size<(1024*1024))
						{
							$actual_image_name = time().substr($txt, 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								        mysql_query("UPDATE glogin_users SET photo='$actual_image_name' WHERE id='$session_id'");
                                                                        unset($_SESSION['loged_user_image']);
$users=  getUserById($session_id);
$user=  mysql_fetch_array($users);
$_SESSION['loged_user_image']=$user['photo'];
									$image="<h1>Please drag on the image</h1><img src='user_images/".$actual_image_name."' id=\"photo\" style='max-width:500px' >";
									
								}
							else
								echo "failed";
						}
					else
						echo "Invalid file formats..!";					
				}
			else
				echo "Please select image..!";
		}
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Maverick Game</title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/imgareaselect-default.css" />
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script-->
<script type="text/javascript" src="scripts/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.imgareaselect.pack.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script type="text/javascript">
function getSizes(im,obj)
	{
		var x_axis = obj.x1;
		var x2_axis = obj.x2;
		var y_axis = obj.y1;
		var y2_axis = obj.y2;
		var thumb_width = obj.width;
		var thumb_height = obj.height;
		if(thumb_width > 0)
			{
				if(confirm("Do you want to save image..!"))
					{
						$.ajax({
							type:"GET",
							url:"ajax_image.php?t=ajax&img="+$("#image_name").val()+"&w="+thumb_width+"&h="+thumb_height+"&x1="+x_axis+"&y1="+y_axis,
							cache:false,
							success:function(rsponse)
								{
								 $("#cropimage").hide();
								    $("#thumbs").html("");
									$("#thumbs").html("<img src='user_images/"+rsponse+"' />");
								}
						});
					}
			}
		else
			alert("Please select portion..!");
	}

$(document).ready(function () {
    $('img#photo').imgAreaSelect({
        aspectRatio: '1:1',
        onSelectEnd: getSizes
    });
});
</script>
 
   

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
     <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 8]>
<script type="text/javascript" src="/assets/js/html5.js"></script>
<html lang="en" class="ie ie8">
<![endif]-->


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
     <div class="login-wrap">
     
     <h2 class="">ACCOUNT SETTINGS</h2>
<?php
$user_detail=getUserById($_SESSION['user_loged_id']);
$user=  mysql_fetch_array($user_detail);        
?>

<?php
if(isset($_REQUEST['change']))
{
?>
     <div class="success">Your password has successfully changed,Please Logout and Login with your new password. </div>   
<?php
}
?>
<?php
if(isset($_REQUEST['msg']))
{
?>
     <div class="error1">Your old password does not match please enter correct old password. </div>   
<?php
}
?>
<?php
if(isset($_REQUEST['profile']))
{
?>
   <div class="success">Your profile has been update successfully. </div>   
<?php
}
?>
   <?php
if(isset($_REQUEST['user']))
{
?>
   <div class="error1">User Name already exit please enter different user name. </div>   
<?php
}
?>
    <?php
if(isset($_REQUEST['upload']))
{
?>
   <div class="success">Your image has been uploaded successfuly. </div>   
<?php
}
?>   
   
<div id="tabs" class="account-tabs">
  <ul>
    <li><a href="#tabs-1">PERSONAL INFORMATION</a></li>
    <li><a href="#tabs-2">UPDATE PASSWORD</a></li>
    <!--li><a href="#tabs-3">CONNECT ACCOUNTS</a></li-->
    <li><a href="#tabs-4">Upload Image</a></li>
  </ul>
  <div style="clear:both;"></div>
  <div id="tabs-1">
  
  <div class="con-div">
    <h3>Personal Information</h3>
 <?php 
    if(!isset($_SESSION['loged_user_name']))
    {
    ?>
    <p>Please not username is necessary to play our games.Please enter your username in tab below.</p>
    <?php
    }
    ?>
 <?php
 if($user['isActive']=='no')
 {
 ?>
 <div class="verify-email-notification">
  <span class="message">
    <img alt="Alert icon" src="assets/images/alert_icon.png" class="account-img" >
    <span class="fail">Your account is not verified!</span>
  </span>
  <span class="sending-message">
    <span>Sending Email</span>
    <img alt="Spinner" src="https://kabam1-a.akamaihd.net/wwwkabam2/assets/mobile/spinner-e293dc021881fe838e8eaaf5461a28fd.gif">
  </span>
  <button class="button game send-email" type="button" style="display:none;">Resend Email</button>
  <div class="sent-message">Verification email has been sent. Please check your mailbox in a few moments. The verification email may also be in your spam folder.</div>
</div>
<?php
}
?>



<form action="update-user-profile.php" method="post" class="new_personal_info dialog" data-remote="true" id="settings_form"><div style="display:none"><input name="utf8" type="hidden" value="✓"><input name="_method" type="hidden" value="put"></div>
    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
    <div id="settings-general-error" class="login-error form-general-error">
      <fieldset class="settings-fieldset">
        <div id="personal_info_general"></div>
        <span class="show-error"></span>
      </fieldset>
    </div>

    <fieldset class="settings-fieldset">
  <label for="personal_info_username">USERNAME</label>
  <input id="personal_info_username" name="user_name" id="user_name" type="text" value="<?php if(isset($user['user_name'])) echo $user['user_name']; ?>">
  <span class="show-success"></span>
  <span class="show-error"></span>
</fieldset>
    <fieldset class="settings-fieldset">
  <label for="personal_info_email">EMAIL</label>
  <input id="personal_info_email" name="user_email" id="user_email" readonly="readonly" type="text" value="<?php if(isset($user['email'])) echo $user['email']; ?>">
  <span class="show-success"></span>
  <span class="show-error"></span>
  <?php 
  if($user['isActive']=='no')
  {
  ?>  
  <div class="status"><img alt="Alert icon" src="assets/images/alert_icon.png" class="account-img"><span class="fail">Unverified</span></div>
  <?php
  }  else {
  ?>
  <div class="status"><img alt="Alert icon" src="assets/images/alert_icon.png" class="account-img"><span class="fail">Verified</span></div>
  <?php
  }
  ?>
    </fieldset>
    <fieldset class="settings-fieldset">
  <label for="personal_info_first_name">FULL NAME</label>
  <input id="personal_info_first_name" name="name" id="name" type="text" value="<?php if(isset($user['name'])) echo $user['name']; ?>">
  <span class="show-success"></span
  ><span class="show-error"></span>
</fieldset>


    <fieldset class="settings-fieldset">
      <label for="personal_info_gender">GENDER</label>
      <select id="personal_info_gender" name="gender" id="gender"><option value="none">Select...</option>
          <option value="female" <?php if(isset($user['gender'])=='female'){?> selected="selected"<?php } ?>>Female</option>
<option <?php if(isset($user['gender'])=='male'){?> selected="selected"<?php } ?> value="male">Male</option></select>
    </fieldset>
    <input class="button large game" id="settings-submit" name="submit" type="submit" value="Save Personal Info">
</form>
    
    
    </div> 
  </div>
  
  <div id="tabs-2">
  
  <div class="con-div">
    <h3>Update Password</h3>
    <form action="update-user-password.php"  id="resetPasswordform" name="resetPasswordform" method="post" class="dialog">
        <input type="hidden" name="user_loged_id" value="<?php echo $user['id'];  ?>">
    <fieldset id="fieldset-old-password" style="display: block; ">
      <label for="reset-old-password">CURRENT PASSWORD</label>
      <input id="old_password" type="password" name="old_password"  tabindex="10">
      <div class="show-error"></div>
    </fieldset>
    
    <fieldset id="fieldset-new-password">
      <label for="reset-new-password">
        New Password
      </label>
      <input id="new_password" type="password" name="new_password" tabindex="20" class="kabam-form-error">
      <div class="show-error"></div>
    </fieldset>
    
    <fieldset id="fieldset-confirm-password">
      <label for="reset-confirm-password">
        CONFIRM PASSWORD
      </label>
      <input id="confirm_password" type="password" name="confirm_password" tabindex="30">
      <div class="show-error"></div>
    </fieldset>    
    <input class="button large game" id="reset-form-submit" name="updatepassword" tabindex="40" type="submit" value="Change Password">
</form>
    
    </div>
      
      
      
    </div>
    
    <div id="tabs-3" style="display:none;">
  
  <div class="con-div">
    <h3>Connect Accounts</h3>
    <section id="connected-template">
  <div class="not-connected">

    <h5>Connect your account and play your Devils Thired from Facebook here on devilsthired.com. You'll pick up right where you left off before, same alliance, same everything!</h5>

    <div id="connect-facebook-button" class="button large facebook show-not-connected">CONNECT WITH FACEBOOK</div>

    <div id="connect-facebook-error-container" class="form-error-container" style="">
      <div id="connect-facebook-error" class="form-error show-error"></div>
    </div>

    <div id="facebook-connected" class="show-connected" style="display:none;">
      <span>YOU ARE FACEBOOK CONNECTED</span>
    </div>
    <fieldset id="fieldset-connected" class="">
      <span class="show-error form-error form-error-container"></span>
    </fieldset>
  </div>

  <hr>

  <div class="gplus_box not-connected">
    <h5 class="show-not-connected">Continue playing your Google+ Devils Thired on  devilsthired.com by connecting your Google+ account to your Devils Thired account. If you haven't yet connected your Google account, click the "G+ Google" button below.</h5>
    <h5 class="show-connected">If you no longer wish to connect your Kabam.com games with your Google+ Devils Thired, click the "G+ Disconnect" button below.</h5>

    <div id="connect-googleplus-button" class="show-not-connected button large google">CONNECT WITH GOOGLE</div>
    <div id="disconnect-googleplus-button" class="show-connected button large google" style="display:none;">DISCONNECT</div>

    <fieldset id="fieldset-connected-googleplus" class="">
      <span class="show-error form-error form-error-container"></span>
    </fieldset>
  </div>
</section>
    </div>
    </div>
  
  <div id="tabs-4">
  
  <div class="con-div">
<div style="margin:0 auto; width:600px">
<?php if(isset($image)) echo $image; ?>
<div id="thumbs" style="padding:5px; width:600px"></div>
<div style="width:600px">

<form id="cropimage" method="post" enctype="multipart/form-data">
	Upload your image <input type="file" name="photoimg" id="photoimg" />
	<input type="hidden" name="image_name" id="image_name" value="<?php if(isset($actual_image_name)) echo($actual_image_name)?>" />
	<input type="submit" name="submit" value="Submit" />
</form>

</div>
</div>
    </div>
    </div>
</div>
      
     
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

<script src="assets/js/jquery.validate.js" type="text/javascript"></script>	
       
                <script type="text/javascript">
            $().ready(function() {
                $("#resetPasswordform").validate({
                    rules: {   
                        old_password: {
                            required: true
                        },
                        new_password: {
                            required: true
                        },
                        confirm_password: {
                            required: true,
                            equalTo: "#new_password"
                        }
                    },
                    messages: {                       
                        old_password: {
                            required: "Please enter your old password"
                        },
                        new_password: {
                            required: "Please enter your new password"
                        },
                        confirm_password: {
                            required: "Please enter confirm password",
                            equalTo: "Please enter the same password as above"
                        }
                        
                    }
                });
                $("#old_password").focus(function() {
                    var old_password = $("#old_password").val();
                    var new_password = $("#new_password").val();
                    if(old_password && new_password && !this.value) {
                        this.value = old_password + "." + new_password;
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