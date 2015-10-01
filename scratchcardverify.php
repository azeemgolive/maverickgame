<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION['user_loged_id']))
{
  $scratch_card_number = mysql_real_escape_string($_REQUEST['scratch_card_number']);
  $scratch_cards=getScratchCardByNumber($scratch_card_number);
  $scratch_card=  mysql_fetch_array($scratch_cards);
  if($scratch_card['card_id']>0)
  {
      $card_id=$scratch_card['card_id'];
      $scratch_card_coins = $scratch_card['number_of_coins'];
      $session_id    = $_SESSION['user_loged_id'];
      $result        =  getUserGameCoins($session_id);
      $user_coins    =  mysql_fetch_array($result);     
      $total_coins   = $user_coins['total_coins']+$scratch_card['number_of_coins'];
      $query="update user_game_coins set total_coins=$total_coins where user_id=$session_id";
      mysql_query($query) or die(mysql_error());
      $queryq="update maverick_game_card set isused='yes' where card_id=$card_id";
      mysql_query($queryq) or die(mysql_error());
      $_SESSION['coins']=$scratch_card_coins;
      header("location:thanks-scratchcard-payment");      
  }else
  {
      header("location:scratch-card-payment?err");
  }
  
  
}else
{
    header("location:maverick-game-user-login");
}