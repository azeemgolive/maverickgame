<?php
error_reporting(E_ALL ^ E_DEPRECATED);
//------------------------Variable for Server name,Database,User name,Password--------------------------------
    $adb ="maverick_silverhat";   // database name
    $db_server ="localhost";  // host name
    $db_user = "root"; //user name
    $db_password = ""; //password
 $link_db=mysql_connect($db_server,$db_user,$db_password);
 if(!$link_db) {
        die('Failed to connect to server: ' . mysql_error());
    }
 $db=mysql_select_db($adb,$link_db);    
    if(!$db) {
        die('Unable to select database:'.mysql_error());
    }
    
//-------------------------------sql injection and remove space and slashes---------------------------------------
function clean($str){
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}
  
//--------------------------------Admin login--------------------------------------------------------------------
function adminLogin($email,$password)
{
    $query="select user_id,email,password,fullname,secretequestion,secreteanswer,verificationcode,createdAt,updateAt,userRole,isactive,description from maverick_admin where email='$email' and password='$password'";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//--------------------maverick game rewards list----------------------------------------------------
function getAllMaverickRewards()
{
    $query="select reward_id,reward_name,reward_points,createdAt from maverick_game_reward order by reward_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//------------------------ add new maverick game reward-------------------------------------------
function addNewMaverickReward($reward_name,$reward_price,$reward_description,$reward_image)
{
    $createdAt=date("Y-m-d");
    $updatedAt=date("Y-m-d");
    $query="insert into maverick_game_reward (reward_name,reward_points,createdAt,updatedAt,reward_description,reward_status,reward_image) values ('$reward_name',$reward_price,'$createdAt','$updatedAt','$reward_description','yes','$reward_image')";
    mysql_query($query) or die(mysql_error());
}
//-----------------------get reward by id---------------------------------------------------------
function getRewardById($reward_id)
{
    $query="select reward_id,reward_name,reward_points,reward_description,reward_image from maverick_game_reward where reward_id=$reward_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//-------------------------update rewards--------------------------------------------------------
function updateRewardStore($reward_id,$reward_name,$reward_price,$reward_description,$reward_image)
{
    $updatedAt=date("Y-m-d");
    $query="update maverick_game_reward set reward_name='$reward_name', reward_points='$reward_price',reward_description='$reward_description',updatedAt='$updatedAt',reward_image='$reward_image' where reward_id=$reward_id";
    mysql_query($query) or die(mysql_error());
}
//----------------------delete rewards---------------------------------------------------------
function deleteRewards($reward_id)
{
    $query="delete from maverick_game_reward where reward_id=$reward_id";
    mysql_query($query) or die(mysql_error());
}
//-----------------------------get All Maverick Games---------------------------------------------------------
function getAllMaverickGames()
{
  $query="SELECT game_id, game_name, game_price, game_point_ratio FROM silverhat_games order by game_id";  
  $result=  mysql_query($query) or die(mysql_error());
  return $result; 
}
//---------------------------add new game------------------------------------------------------------
function addNewGame($game_name,$game_price,$game_points,$game_filename,$game_seo_title,$game_description,$meta_tag_description,$meta_tag_keywords,$game_image,$game_slider_image,$game_home_image,$game_background_image,$game_instrustion_image,$game_seo)
{
    $createdAt=date("Y-m-d");
    $updatedAt=date("Y-m-d");
    $query="insert into silverhat_games (game_name,game_home_image,game_background_image,game_description,game_price,game_point_ratio,game_file,isActive,createdAt,updatedAt,isFeatured,game_seo,game_seo_title,meta_tag_keywords,meta_tag_description,game_image,game_instrustion_image,game_slider) values('$game_name','$game_home_image','$game_background_image','$game_description',$game_price,$game_points,'$game_filename','yes','$createdAt','$updatedAt','yes','$game_seo','$game_seo_title','$meta_tag_keywords','$meta_tag_description','$game_image','$game_instrustion_image','$game_slider_image')";
    mysql_query($query) or die(mysql_error());
}
//-----------------------get game by id-----------------------------------------------------
function getGameById($game_id)
{
  $query="SELECT game_id, game_name,game_home_image,game_background_image,game_description,game_price,game_point_ratio,game_file,isActive,createdAt,updatedAt,isFeatured,game_seo,game_seo_title,meta_tag_keywords,meta_tag_description,game_image,game_instrustion_image,game_slider FROM silverhat_games where game_id=$game_id";  
  $result=  mysql_query($query) or die(mysql_error());
  return $result;  
}
//-------------------------update game-------------------------------------------------------
function updateGame($game_id,$game_name,$game_price,$game_points,$game_filename,$game_seo_title,$game_description,$meta_tag_description,$meta_tag_keywords,$game_image,$game_slider_image,$game_home_image,$game_background_image,$game_instrustion_image,$game_seo)
{
   $updatedAt=date("Y-m-d"); 
   $query="update silverhat_games set game_name='$game_name',game_home_image='$game_home_image',game_background_image='$game_background_image',game_description='$game_description',game_price=$game_price,game_point_ratio=$game_points,game_file='$game_filename',updatedAt='$updatedAt',game_seo='$game_seo',game_seo_title='$game_seo_title',meta_tag_keywords='$meta_tag_keywords',meta_tag_description='$meta_tag_description',game_image='$game_image',game_instrustion_image='$game_instrustion_image',game_slider='$game_slider_image' where game_id=$game_id";
    mysql_query($query) or die(mysql_error());
}
//------------------------------delete game--------------------------------------------------
function deleteGame($game_id)
{
    $query="delete from silverhat_games where game_id=$game_id";
    mysql_query($query) or die(mysql_error());
}

//--------------------maverick game Users List----------------------------------------------------
function getAllUserList()
{
    $query="select id,name,email,registered from glogin_users order by id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
?>