<?php
session_start();
  include("dbconnection.php");
  $sender = $_GET['sender'];//phone num.
  $amount = $_GET['amount'];//credit
  $cuid = $_GET['cuid'];//resource i.e. user
  if(preg_match("/completed/i", $_GET['status'])) {
  $result        =  getUserGameCoins($cuid);
  $user_coins    =  mysql_fetch_array($result);
  if($user_coins['total_coins']>0){
  $total_coins   =  $user_coins['total_coins']+$amount;
  $updatedAt= date("Y-m-d");   
  $query="update user_game_coins set total_coins=$total_coins where user_id=$cuid";
  mysql_query($query) or die(mysql_error());
  }else
  {
  $total_coins   =  $user_coins['total_coins']+$amount;
  $updatedAt= date("Y-m-d");   
  createUserGameCoins($cuid,$total_coins); 
  }
  } 
  
?>