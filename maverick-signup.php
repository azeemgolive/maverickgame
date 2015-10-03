<?php
session_start();
include("dbconnection.php");
if(isset($_POST['submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
    $name=  mysql_real_escape_string($_POST['name']);
    $gender=  mysql_real_escape_string($_POST['gender']);
    $email=  mysql_real_escape_string($_POST['email']);
    $phone_number=  mysql_real_escape_string($_POST['phone_number']);
    if($_POST['location']=='other')
     {
        $location  = mysql_real_escape_string($_POST['otherlocation']);   
     }else
     {
         $location  = mysql_real_escape_string($_POST['location']);    
     }       
    $password=  mysql_real_escape_string(md5($_POST['password']));
    $user_name  =  mysql_real_escape_string($_POST['user_name']);
    $android_app='web_user';
    $month_name = mysql_real_escape_string($_POST['month_name']);
    $day_name = mysql_real_escape_string($_POST['day_name']);
    $year_name = mysql_real_escape_string($_POST['year_name']);    
    $birth_date=$year_name."-".$month_name."-".$day_name;
    $birth_date=  date("Y-m-d",strtotime($birth_date));
    $verificationcode=generateCode(1);
    $activation=md5($email.time());  
    $user_register=  getUserByEmail($email);     
    $user=  mysql_fetch_array($user_register);
    registerNewUser($name,$email,$user_name,$password,$gender,$birth_date,$location,$phone_number,$activation,$verificationcode,$android_app);    
    $last_users=getLastRegisterUser();
    $last_user=  mysql_fetch_array($last_users);
    $registration_points=50;
    createUserGameCoins($last_user['id'],$registration_points);    
    $base_url="http://www.maverickgame.com/activation.php?code=".$activation;
    $subject="Registration successful, please activate email at Maverick Game";
    $from = "info@maverickgame.com";
    $email_server="info@maverickgame.com"; 
    $to = $email;
    $mail_body="Dear $name,<br/><br/>You have embarked on a journey where your role will change along with the game you choose to play. From here onwards this portal is your abode and you are destined to achieve greatness. Greatness bigger than what you had fathomed this is your true calling. <br/> <br/> You are new here but remember you are the chosen one. Competition will be ruthless and the going will get difficult. You may win some and you may lose some. Your ranking is down low and reaching top will be difficult. It may take time for you to master the game but remember that greatness is achieved by perseverance and not just through talent.<br/><br/>So proceed to your first game and make your way to the top of leaderboard. Riches and glory await you, Chosen One.<br/><br/><a href=".$base_url.">.$base_url.'</a>' <br/><br/><br/></br>Regards,<br/><br/>Team Maverick Game";    
    $body = wordwrap($mail_body,2000);
    //$body_user = wordwrap($mail_body_user,70);
    $headers = "MIME-Version: 1.0" . "\r\n";
	    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
  	    $headers .= "From: " . $from ."\r\n";
            $headers .= 'Bcc:raheelaslam@golive.com.pk ,amohsin@golive.com.pk,info@maverickgame.com' . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";   
    //------------------------Thanks You Email-------------------------------------------------------------------        
    mail($to,$subject,$mail_body,$headers);      
    //mail($email_server,$subject,$mail_body,$headers);
    header("location:game-register-message");
    }    
    		
	}

?>

<!DOCTYPE HTML>
<html>
        <head>
        
        <title>Maverick Game | Sign Up</title>
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
                $("#signUpForm").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength:3
                        },
                        email: {
                            required: true,   
                            email: true
                        },
                        user_name: {
                            required: true,   
                            minlength:3
                        },
                        password: {
                            required: true
                        },
                        confirm_password: {
                            required: true,
                            equalTo: "#password"
                        },
                        phone_number: {
                            required: true,
                            digits:true,
                            minlength:11
                        },
                        agree: "required"
                    },
                    messages: {
                        email: {
                            required: "Please enter email address",                           
                            email: "Email address must be in the format of name@domain.com"
                        },
                        name: {
                            required: "Please enter your name",                           
                            minlength: "Name must be atleast 3 letter"
                        },
                        user_name: {
                            required: "Please enter user name",
                            minlength: "user name must be atleast 3 letter"
                        },
                        password: {
                            required: "Please enter a password"
                        },
                        confirm_password: {
                            required: "Please enter confirm password",
                            equalTo: "Password does not match"
                        },
                        phone_number: {
                            required: "Please enter your mobile number",
                            digits: "Mobile number must be in the format of 03212828275",
                            minlength: "Mobile number must only 11 digits"
                        },
                        agree: "Please accept our policy",
                        
                    }
                });
                $("#password").focus(function() {
                    var password = $("#password").val();
                    var email = $("#email_check").val();
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
        <div class="leader-wrap" style="min-height:500px;">
        <div class="col-md-12">
                  <h2 style="width:100%;">JOIN <span>MAVERICK GAME</span></h2>
<p class="white">Already have an account? <a href="maverick-game-user-login">Login</a></p>
          <?php
    if(isset($_REQUEST['register']))
    {
    ?>
          <div class="error"><strong>This Email ID already exist in our system, please use a different ID for new Signup</strong> </div>
          <?php
    }
    ?>
          <form  action="" method="post" id="signUpForm" name="signUpForm">
                    <div class="contact-frm nopad">
                    <h3 class="white">Create an account </h3>
                    
                    <div class="row">
                <div class="col-md-6">
                          <div class="row">
                          <div class="col-md-4"><label>Name *</label></div>
                          <div class="col-md-8"><input class="form-control" type="text" id="name" name="name"/></div>
                          </div>
                      </div>
                <div class="col-md-6">
                <div class="row">
                          <div class="col-md-4"><label for="email">Email *</label></div>
                          <div class="col-md-8"><input class="form-control" type="text" name="email" id="email" autocomplete="off"></div>
                          </div>
                        <span id="result_email"></span> </div>
            </div>	
            		<div class="row">
                <div class="col-md-6">
                <div class="row">
                          <div class="col-md-4"><label for="username">Username *</label></div>
                          <div class="col-md-8"><input class="form-control" type="text" name="user_name" id="user_name" autocomplete="off"></div>
                          </div>
                        <span id="result_user"></span> </div>
                <div class="col-md-6">
                <div class="row">
                          <div class="col-md-4"><label>Phone Number *</label></div>
                          <div class="col-md-8"><input class="form-control" type="text" name="phone_number" id="phone_number" autocomplete="off"/></div>
                          </div>
                        <span id="result_phone_number"></span> </div>
            </div>
                    <div class="row">
                <div class="col-md-6">
                <div class="row">
                          <div class="col-md-4"><label>Password *</label></div>
                          <div class="col-md-8"><input class="form-control" type="password" id="password" name="password"/></div>
                  </div>
                      </div>
                <div class="col-md-6">
                <div class="row">
                          <div class="col-md-4"><label>Confirm Password *</label></div>
                          <div class="col-md-8"><input class="form-control" type="password" id="confirm_password" name="confirm_password"/></div>
                  </div>
                 </div>
            </div>
                    
                    <div class="row">
                <div class="col-md-6">
                <div class="row">
                          <div class="col-md-4"><label>Gender *</label></div>
                          
                          <div class="col-md-8 nopad-right"><select class="form-control" name="gender" id="gender" style="width:94.5%;">
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                  </div>
                  </div>
                      </div>
                <div class="col-md-6">
                <div class="row">
                          <div class="col-md-4"><label>Birthday *</label></div>
                          
                    <div class="col-md-8 nopad-right">
                    <select class="form-control" class="month" name="month_name" id="month_name" style="float:left; width:29%;">
                              <option value="january">JAN</option>
                              <option value="february">FEB</option>
                              <option value="march">MARCH</option>
                              <option value="april">APRIL</option>
                              <option value="may">MAY</option>
                              <option value="june">JUNE</option>
                              <option value="july">JULY</option>
                              <option value="august">AUGUEST</option>
                              <option value="september">SEPTMBER</option>
                              <option value="october">OCTOBER</option>
                              <option value="novmber">NOVEMBER</option>
                              <option value="december">DECEMBER</option>
                            </select>
                    <select class="day form-control" name="day_name" id="day_name" style="float:left; width:29%; margin-right:3.5%; margin-left:3.5%;">
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                            </select>
                    <select class="year form-control" name="year_name" id="year_name" style="float:left; width:29%;">
                              <option value="1925">1925</option>
                              <option value="1926">1926</option>
                              <option value="1927">1927</option>
                              <option value="1928">1928</option>
                              <option value="1929">1929</option>
                              <option value="1930">1930</option>
                              <option value="1931">1931</option>
                              <option value="1932">1932</option>
                              <option value="1933">1933</option>
                              <option value="1934">1934</option>
                              <option value="1935">1935</option>
                              <option value="1936">1936</option>
                              <option value="1937">1937</option>
                              <option value="1938">1938</option>
                              <option value="1939">1939</option>
                              <option value="1940">1940</option>
                              <option value="1941">1941</option>
                              <option value="1942">1942</option>
                              <option value="1943">1943</option>
                              <option value="1944">1944</option>
                              <option value="1945">1945</option>
                              <option value="1946">1946</option>
                              <option value="1947">1947</option>
                              <option value="1948">1948</option>
                              <option value="1949">1949</option>
                              <option value="1950">1950</option>
                              <option value="1951">1951</option>
                              <option value="1952">1952</option>
                              <option value="1953">1953</option>
                              <option value="1954">1954</option>
                              <option value="1955">1955</option>
                              <option value="1956">1956</option>
                              <option value="1957">1957</option>
                              <option value="1958">1958</option>
                              <option value="1959">1959</option>
                              <option value="1960">1960</option>
                              <option value="1961">1961</option>
                              <option value="1962">1962</option>
                              <option value="1963">1963</option>
                              <option value="1964">1964</option>
                              <option value="1965">1965</option>
                              <option value="1966">1966</option>
                              <option value="1967">1967</option>
                              <option value="1968">1968</option>
                              <option value="1969">1969</option>
                              <option value="1970">1970</option>
                              <option value="1971">1971</option>
                              <option value="1972">1972</option>
                              <option value="1973">1973</option>
                              <option value="1974">1974</option>
                              <option value="1975">1975</option>
                              <option value="1976">1976</option>
                              <option value="1977">1977</option>
                              <option value="1978">1978</option>
                              <option value="1979">1979</option>
                              <option value="1980">1980</option>
                              <option value="1981">1981</option>
                              <option value="1982">1982</option>
                              <option value="1983">1983</option>
                              <option value="1984">1984</option>
                              <option value="1985">1985</option>
                              <option value="1986">1986</option>
                              <option value="1987">1987</option>
                              <option value="1988">1988</option>
                              <option value="1989">1989</option>
                              <option value="1990">1990</option>
                              <option value="1991">1991</option>
                              <option value="1992">1992</option>
                              <option value="1993">1993</option>
                              <option value="1994">1994</option>
                              <option value="1995">1995</option>
                              <option value="1996">1996</option>
                              <option value="1997">1997</option>
                              <option value="1998">1998</option>
                              <option value="1999">1999</option>
                              <option value="2000">2000</option>
                              <option value="2001">2001</option>
                              <option value="2002">2002</option>
                              <option value="2003">2003</option>
                              <option value="2004">2004</option>
                              <option value="2006">2006</option>
                              <option value="2006">2006</option>
                              <option value="2007">2007</option>
                              <option value="2008">2008</option>
                              <option value="2009">2009</option>
                              <option value="2010">2010</option>
                              <option value="2011">2011</option>
                              <option value="2012">2012</option>
                              <option value="2013">2013</option>
                              <option value="2014">2014</option>
                              <option value="2015">2015</option>
                            </select>
                            </div><div>
                            </div>
                  </div>
                      </div>
            	</div>
                    <div class="row">
                <div class="col-md-6">
                          <div class="row">
                          <div class="col-md-4"><label>Location *</label></div>
                       
                          <div class="col-md-8 nopad-right"><select class="form-control" name="location" id="location" onchange="return checkLocation()" style="width:95%;">
                    <option value="">Select your location</option>
                    <option value="Abbotabad">Abbotabad</option>
                    <option value="Arifwala">Arifwala</option>
                    <option value="Badin">Badin</option>
                    <option value="Bahawalnagar">Bahawalnagar</option>
                    <option value="Karachi" selected="selected">Karachi</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Larkana">Larkana</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Multan">Multan</option>
                    <option value="Hasilpur">Hasilpur</option>
                    <option value="Mirpur Khas">Mirpur Khas</option>
                    <option value="Ahmadpur East">Ahmadpur East</option>
                    <option value="Montgomery">Montgomery</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Moro">Moro</option>
                    <option value="Attock City">Attock City</option>
                    <option value="Jacobabad">Jacobabad</option>
                    <option value="Jalalpur">Jalalpur</option>
                    <option value="Muridke">Muridke</option>
                    <option value="Jaranwala"> Jaranwala</option>
                    <option value="Muzaffarabad">Muzaffarabad</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                    <option value="Jhang Sadr">Jhang Sadr</option>
                    <option value="Muzaffargarh">Muzaffargarh</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                    <option value="Jhelum">Jhelum</option>
                    <option value="Narowal">Narowal</option>
                    <option value="Bhai Pheru">Bhai Pheru</option>
                    <option value="Kamalia">Kamalia</option>
                    <option value="Nawabshah">Nawabshah</option>
                    <option value="Bhakkar">Bhakkar</option>
                    <option value="Kambar">Kambar</option>
                    <option value="Nowshera Cantonment">Nowshera Cantonment</option>
                    <option value="Bhalwal">Bhalwal</option>
                    <option value="Kamoke">Kamoke</option>
                    <option value="Okara">Okara</option>
                    <option value="Bhimbar">Bhimbar</option>
                    <option value="Kandhkot">Kandhkot</option>
                    <option value="Pakpattan">Pakpattan</option>
                    <option value="Burewala">Burewala</option>
                    <option value="Pano Aqil">Pano Aqil</option>
                    <option value="Chakwal">Chakwal</option>
                    <option value="Kasur">Kasur</option>
                    <option value="Pattoki">Pattoki</option>
                    <option value="Chaman">Chaman</option>
                    <option value="Khairpur">Khairpur</option>
                    <option value="Peshawar">Peshawar</option>
                    <option value="Chichawatni">Chichawatni</option>
                    <option value="Khanpur">Khanpur</option>
                    <option value="Quetta">Quetta</option>
                    <option value="Chiniot">Chiniot</option>
                    <option value="Kharian">Kharian</option>
                    <option value="Rawalpindi">Rawalpindi</option>
                    <option value="Chishtian">Chishtian</option>
                    <option value="Khushab">Khushab</option>
                    <option value="Sadiqabad">Sadiqabad</option>
                    <option value="Chuhar Kana">Chuhar Kana</option>
                    <option value="Kohat">Kohat</option>
                    <option value="Sargodha">Sargodha</option>
                    <option value="Charsadda">Charsadda</option>
                    <option value="Kohror Pakka">Kohror Pakka</option>
                    <option value="Shahdadkot">Shahdadkot</option>
                    <option value="Dadu">Dadu</option>
                    <option value="Kot Addu">Kot Addu</option>
                    <option value="Sheikhu Pura">Sheikhu Pura</option>
                    <option value="Daska">Daska</option>
                    <option value="Kot Malik">Kot Malik</option>
                    <option value="Shikarpur">Shikarpur</option>
                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                    <option value="Kotli">Kotli</option>
                    <option value="Shorko">Shorko</option>
                    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                    <option value="Kotri">Kotri</option>
                    <option value="Sialkot">Sialkot</option>
                    <option value="Dipalpur">Dipalpur</option>
                    <option value="Sukkur">Sukkur</option>
                    <option value="Faisalabad">Faisalabad</option>
                    <option value="Swabi">Swabi</option>
                    <option value="Gilgit">Gilgit</option>
                    <option value="Leiah">Leiah</option>
                    <option value="Tando Adam">Tando Adam</option>
                    <option value="Gojra">Gojra</option>
                    <option value="Lodhran">Lodhran</option>
                    <option value="Tando Allahyar">Tando Allahyar</option>
                    <option value="Gujar Khan">Gujar Khan</option>
                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                    <option value="Gujranwala">Gujranwala</option>
                    <option value="Mardan">Mardan</option>
                    <option value="Toba Tek Singh">Toba Tek Singh</option>
                    <option value="Gujrat">Gujrat</option>
                    <option value="Mian Channu">Mian Channu</option>
                    <option value="Turbat">Turbat</option>
                    <option value="Hafizabad">Hafizabad</option>
                    <option value="Mianwali">Mianwali</option>
                    <option value="Vehari">Vehari</option>
                    <option value="Harunabad">Harunabad</option>
                    <option value="Mingora">Mingora</option>
                    <option value="Wazirabad">Wazirabad</option>
                    <option value="other">Other</option>
                  </select></div>
                          <br>
                          <div id="other" style="display: none;">
                    <input type="text" name="otherlocation" class="form-control"/>
                  </div>
                          </div>
                      </div>
            </div>

                <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table" align="center">
                <?php if(isset($msg)){?>
            <tr>
              <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
            </tr>
                    <?php } ?>
                    <tr>
                <td> <div class="row">
                <div class="col-md-3"><label class="white">Validation code:</label><br>
                          <img style="margin:5px 0 0" src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'></div>
                          <div class="col-md-6"><label for='message'>Enter the code above here :</label>
                          
                          <input id="captcha_code" class="form-control" style="width:150px;" name="captcha_code" type="text">
                         
                          <label>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</label></div>
                          
                          
                          <div class="clearfix"></div>
                          <div class="col-md-12"><div class="">
                                  <input id="agree" name="agree" type="checkbox"> <label for='message'>
I have read and agree to the <a href="terms-conditions">Terms &amp; Conditions</a></label></div></div>
<div class="clearfix"></div>
<div class="col-md-12 text-center"><input type="submit" value="Submit" class="button large game" name="submit" /></div>
          </div>
          </td>
          </tr>
          </table>
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
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script> 
<script type='text/javascript'>
    function checkLocation()
    {
        var location=document.getElementById('location').value;      
        if(location=='other')
        {
            document.getElementById('other').style.display="block";
        }
    }
    </script>
</body>
</html>