<?php
include 'db.php';
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
    $code=mysqli_real_escape_string($connection,$_GET['code']);
    $c=mysqli_query($connection,"SELECT id FROM glogin_users WHERE activation='$code'");
    if(mysqli_num_rows($c) > 0){
    $count=mysqli_query($connection,"SELECT id FROM glogin_users WHERE activation='$code' and isActive='no'");
    if(mysqli_num_rows($count) == 1)
    {
    mysqli_query($connection,"UPDATE glogin_users SET isActive='yes' WHERE activation='$code'");  
    }    
     header("location:thank-you.php");
}
}else
{
    header("location:thank-you.php");
}
?>