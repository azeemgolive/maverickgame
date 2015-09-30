<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Payment Account | Maverick Game</title>
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
<script src="assets/js/jquery-ui.js"></script>
 <script>
  $(function() {
    $( "#tabs" ).tabs();
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
<?php include("user-login-menus.php");  ?>
<?php
include("sidebarlinks.php");
?>

<div class="featured-area">
	<div class="container">
    <div class="row">
     <div class="col-md-10 col-sm-9">
      <div class="inner-cnt nopad"> 
      <h3 class="heading1">My Account</h3>
 	<div class="form-tabs">
    <?php if(isset($_REQUEST['action'])) { if($_REQUEST['action'] == 'Payment Select'){ ?>  

  <ul>
    <li class="ui-state-active"><a href="#tabs-1">Account Information</a></li>
    <li><a href="javascript:;">Account Summary</a></li>
    <li><a href="javascript:;">Message</a></li>
    <li><a href="javascript:;">Connect Us</a></li>
  </ul>
  <div class="clearfix"></div>
  <div id="tabs-1">
  <div class="bill-form">
  <h2>Billing Information</h2>
  <form action="" method="post" class="payment-form">
  <table width="100%" border="0">
  <tr>
    <td><label>First Name:</label></td>
    <td><input name="fname" type="text"></td>
  </tr>
  <tr>
    <td><label>Last Name:</label></td>
    <td><input name="lname" type="text"></td>
  </tr>
  
  <tr>
    <td><label>Street and Number:</label></td>
    <td><input name="street_no" type="text"></td>
  </tr>
 
  <tr>
    <td><label>Post or ZIP code:</label></td>
    <td><input name="zip_no" type="text"></td>
  </tr>
  <tr>
    <td><label>City/Town:</label></td>
    <td><input name="city" type="text"></td>
  </tr>
  <tr>
    <td><label>Country:</label></td>
    <td>
    <select name="country"> 
  <option value="AF">Afghanistan</option>
	<option value="AX">�land Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antarctica</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Island</option>
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">C�te d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Cura�ao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JE">Jersey</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">R�union</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barth�lemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
</select>
    </td>
  </tr>
  <tr>
    <td><label>State and Province:</label></td>
    <td>
     <select name="state"> 
  <option value="CA" >Sindh</option>
  <option value="CO" >Punjab</option>
  <option value="CN" >Balcohistan</option>
</select>
    </td>
  </tr>
   <tr>
    <td><label>Email:</label></td>
    <td><input name="email" type="text"></td>
  </tr>
  <tr>
    <td><label>Phone:</label></td>
    <td><input name="phone_no" type="text"></td>
  </tr>
  
  <tr>
    <td></td>
    <td>
    <input name="Next" type="submit" value="Next" class="btn-next">
    <input name="Cancel" type="button" value="Cancel" class="btn-cancel">
	<input name="action" value="step1" type="hidden">
	<input name="payment_method_cat" value="<?php echo $_POST['payment_method_cat']; ?>" type="hidden">
    </td>
  </tr>
</table>
</form>
  
  </div>
  </div>
  
  <?php } } ?>
<?php if(isset($_REQUEST['action'])) { if($_REQUEST['action'] == 'step1'){ ?>  
 <ul>
    <li><a href="javascript:;">Account Information</a></li>
    <li class="ui-state-active"><a href="#tabs-1">Account Summary</a></li>
    <li><a href="javascript:;">Message</a></li>
    <li><a href="javascript:;">Connect Us</a></li>
  </ul>
  <div class="clearfix"></div>
   <div id="tabs-2">
  <div class="bill-form">
  <h2>Card/Transfer Payment</h2>
  <br/><br/>
  <h4 class="heading3">Bill Information</h4>
  <form action="" method="post" class="payment-form">
  <table width="100%" border="0" class="form-info">
  <tr>
    <td><label>First Name:</label></td>
    <td><span><?php echo $_POST['fname']; ?></span></td>
  </tr>
  <tr>
    <td><label>Last Name:</label></td>
    <td><span><?php echo $_POST['lname']; ?></span></td>
  </tr>
  
  <tr>
    <td><label>Street and Number:</label></td>
    <td><span><?php echo $_POST['street_no']; ?></span></td>
  </tr>
 
  <tr>
    <td><label>Post or ZIP code:</label></td>
    <td><span><?php echo $_POST['zip_no']; ?></span></td>
  </tr>
  <tr>
    <td><label>City/Town:</label></td>
    <td><span><?php echo $_POST['city']; ?></span></td>
  </tr>
  <tr>
    <td><label>Country:</label></td>
    <td>
    <span><?php echo $_POST['country']; ?></span>
    </td>
  </tr>
  <tr>
    <td><label>State and Province:</label></td>
    <td>
     <span><?php echo $_POST['state']; ?></span>
    </td>
  </tr>
   <tr>
    <td><label>Email:</label></td>
    <td><span><?php echo $_POST['email']; ?></span></td>
  </tr>
  <tr>
    <td><label>Phone:</label></td>
    <td><span><?php echo $_POST['phone_no']; ?></span></td>
  </tr>
  
  
</table>

<table width="100%" border="0" >
<tr>
    <td></td>
    <td align="center">
    <input name="Back" type="button" value="Back" class="btn-cancel">
    <input name="Pay" type="submit" value="Pay" class="btn-next">
    <input type="hidden" name="fname" value="<?php echo $_POST['fname']; ?>">
    <input type="hidden" name="lname" value="<?php echo $_POST['lname']; ?>">
    <input type="hidden" name="street_no" value="<?php echo $_POST['street_no']; ?>">
    <input type="hidden" name="zip_no" value="<?php echo $_POST['zip_no']; ?>">
    <input type="hidden" name="city" value="<?php echo $_POST['city']; ?>">
    <input type="hidden" name="country" value="<?php echo $_POST['country']; ?>">
    <input type="hidden" name="state" value="<?php echo $_POST['state']; ?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
    <input type="hidden" name="phone_no" value="<?php echo $_POST['phone_no']; ?>">
    <input name="action" value="step2" type="hidden">
	<input name="payment_method_cat" value="<?php echo $_POST['payment_method_cat']; ?>" type="hidden">

    </td>
  </tr>
</table>
</form>
  
  </div>
  </div>

    <?php } } ?>
  
  <?php if(isset($_REQUEST['action'])) { if($_REQUEST['action'] == 'step2'){ ?>  

  <ul>
    <li><a href="javascript:;">Account Information</a></li>
    <li><a href="javascript:;">Account Summary</a></li>
    <li class="ui-state-active"><a href="#tabs-1">Message</a></li>
    <li><a href="javascript:;">Connect Us</a></li>
  </ul>
  <div class="clearfix"></div>
  <div id="tabs-3">
  <div class="bill-form">
  <h2>Payment Details</h2>

   <form action="" method="post" class="payment-form">
  <table width="100%" border="0">
  <tr>
    <td><label>Card No:</label></td>
    <td><input name="" type="text"></td>
  </tr>
  
  <tr>
    <td><label>Expire Date:</label></td>
    <td>
    <select name="selectionField" style="width:47%; float:left;"> 
  <option value="AF">Afghanistan</option>
	<option value="AX">�land Islands</option>
	
</select>

 <select name="selectionField" style="width:47%; float:left; margin-left:20px;"> 
  <option value="AF">Afghanistan</option>
	<option value="AX">�land Islands</option>
	
</select>


    </td>
  </tr>
  
   <tr>
    <td><label>Security Code:</label></td>
    <td><input name="" type="text">
    </td>
  </tr>
  
  
  <tr>
    <td></td>
    <td>
    <input name="Continue" type="button" value="Continue" class="btn-next">
    <input name="Cancel" type="button" value="Cancel" class="btn-cancel">
    </td>
  </tr>
</table>
</form>
  
  </div>
  </div>
    <?php } } ?>
  
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






</body>
</html>