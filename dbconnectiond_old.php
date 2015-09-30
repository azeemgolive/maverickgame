<?php
//------------------------Variable for Server name,Database,User name,Password--------------------------------
error_reporting(E_ALL ^ E_DEPRECATED);
//------------------------Variable for Server name,Database,User name,Password--------------------------------
    $adb ="maverick_silverhat";
    $db_server ="localhost";
    $db_user = "maverick_hatsil";
    $db_password = "2*5&{QJp=#Za";
 $link_db=mysql_connect($db_server,$db_user,$db_password);
 if(!$link_db) {
        die('Failed to connect to server: ' . mysql_error());
    }
 $db=mysql_select_db($adb,$link_db);    
    if(!$db) {
        die('Unable to select database:'.mysql_error());
    }

//-------------------------------------- code for activation-------------------------------    

function generateCode($characters) {
		/* list all possible characters, similar looking characters and vowels have been removed */
		$possible = '1234567890abcdfghjkmnpqrstvwxyz';
		$code = '';
		$i = 0;
		while ($i < $characters) { 
			$code .= substr($possible, mt_rand(0, strlen($possible)-1), 4);
			$i++;
		}
		return $code;
	}
        
      
//---------------------------------register new user-------------------------------------------------------------
 function  registerNewUser($email,$password,$birth_date,$activation,$verificationcode,$location)
 {
    $createdAt=  date("Y-m-d");
    $updatedAt=  date("Y-m-d");  
    $query="insert into glogin_users(email,password,registered,updatedAt,birth_date,activation,verificationcode,isActive,address) values('$email','$password','$createdAt','$updatedAt','$birth_date','$activation','$verificationcode','no','$location')";
    mysql_query($query) or die(mysql_error());
 }
 
 //---------------------------------register new user-------------------------------------------------------------
 function  loginUser($email,$password)
 {  
    $query="select id,name,email,user_name,password,mobile_number,gender,createdAt,updatedAt,activation,verificationcode,isActive,birth_date,address,photo from glogin_users where email='$email' or user_name='$email' and password='$password'";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;  
 }
 
 function updateUser($user_name,$email,$first_name,$gender)
 {
    $query="update glogin_users set user_name='$user_name', name='$first_name',gender='$gender' where email='$email'";
    mysql_query($query) or die(mysql_error());
 }
 //--------------------------------------get User By Email-----------------------------------------------------------
 function getUserByEmail($email)
 {
     $query="select user_id,name,email,user_name,password,mobile_number,gender,createdAt,updatedAt,activation,verificationcode,isActive,birth_date,address,photo from glogin_users where email='$email'";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;  
 }
 //----------------------------update password------------------------------------------------
 function updateUserPassword($email,$newpassword)
 {
    $query="update glogin_users set password='$newpassword' where email='$email'";
    mysql_query($query) or die(mysql_error());
 }
 //---------------------------check face book user-----------------------------------------------------
 function checkFaceBookUser($fuid,$ffname,$femail){
    	$check = mysql_query("select * from glogin_users where Fuid=$fuid");
	$check = mysql_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
	$query = "INSERT INTO glogin_users (Fuid,name,email) VALUES ('$fuid','$ffname','$femail')";
	mysql_query($query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE users SET glogin_users='$ffname', email='$femail' Fuid=$fuid where Fuid='$fuid'";
	mysql_query($query);
	}
}

//---------------------------get user web service---------------------------------------------------------
function getUserWebService($user_id)
{
    $query="select id,first_name,last_name,email,user_name,password,mobile_number,gender,createdAt,updatedAt,activation,verificationcode,isActive,birth_date,address,photo from glogin_users where id=$user_id";
    $result=  mysql_fetch_array($query) or die(mysql_error());
    $user=  mysql_fetch_array($result);
    $user_data=array(
        'user_id'=>$user['id'],
        'name'=>$user['name'],        
        'email'=>$user['email'],
        'gender'=> $user['gender']
            );
    return json_encode($user_data);    
}
//------------------------------login webservice-----------------------------------------------------------
function userLoginWebService($email,$password)
{
    $query="select id,name,email,user_name,password,mobile_number,gender,createdAt,updatedAt,activation,verificationcode,isActive,birth_date,address,photo from glogin_users where email='$email' or user_name='$email' and password='$password'";
    $result=  mysql_fetch_array($query) or die(mysql_error());
    $user=  mysql_fetch_array($result);
    $user_data=array(
        'user_id'=>$user['id'],
        'name'=>$user['name'],        
        'email'=>$user['email'],
        'gender'=> $user['gender']
            );
    return json_encode($user_data); 
}

//-----------------------get All Games-------------------------------------------------------------------
function getAllGames()
{
   $query="SELECT game_id, game_name, game_image, game_background_image, game_description, game_file, isActive, createdAt, updatedAt, isFeatured, game_seo, meta_tag_keywords, meta_tag_description FROM silverhat_games order by createdAt"; 
   $result=  mysql_query($query) or die(mysql_error());
   return $result;
}
//-----------------------get Game By Id----------------------------------------------------------------
function getGameById($game_id)
{
   $query="SELECT game_id, game_name, game_image, game_background_image, game_description, game_file, isActive, createdAt, updatedAt, isFeatured, game_seo, meta_tag_keywords, meta_tag_description FROM silverhat_games where game_id=$game_id"; 
   $result=  mysql_query($query) or die(mysql_error());
   return $result; 
}
    
?>