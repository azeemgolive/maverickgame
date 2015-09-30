<?php
include("dbconnection.php");
if(isset($_GET['game_id']) && isset($_GET['user_id']) && (isset($_GET['game_score'])))
{
$game_id=$_GET['game_id'];
$user_id=$_GET['user_id'];
$game_score=$_GET['game_score'];
$createdAt=  date("Y-m-d H:i:s");
   $updatedAt=  date("Y-m-d H:i:s");
$result= mysql_query("insert into game_scores(game_id,user_id,game_score,createdAt,updateAt,isgarbeg) values($game_id,$user_id,$game_score,'$createdAt','$updatedAt','yes')"); 
   if($result)
   {
       header('Content-type: application/json');
       echo json_encode("Your score added Successfully");
    }
    else
    {
      echo json_encode("Your score not Added");
    }
} 
?>