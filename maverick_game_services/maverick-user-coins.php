<?php
session_start();
header("Content-Type: application/json");
include("../dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
	$user_id=$_SESSION['user_loged_id'];
	$result=getUserGameCoins($user_id);
        $game_coins=  mysql_fetch_array($result);
        if($game_coins['total_coins']>0)
        {
	$user_data=array(
        'user_id'=>$user_id,
        'total_coins'=>$game_coins['total_coins'],
        'status'=>'1' 
      );
    echo json_encode($user_data);
        }  else {
          $user_data=array(
        'user_id'=>$user_id,
        'total_coins'=>0,
        'status'=>'1' 
        );
         echo json_encode($user_data);  
      }        
}else
{
	$user_data=array(
        'status'=>'0',
        'err'=>'user not login'    
      );
  echo json_encode($user_data);    
}
?>