<?php
session_start();
    include("dbconnection.php");
    $email=  clean($_REQUEST['user_email']);
    $password=  clean(md5($_REQUEST['user_password']));
    $result=  Userlogin($email,$password);  
    $row=mysql_fetch_array($result);        
            $loginuser = $row['email'];
            $loginpassword = $row['password'];
            $fullname = $row['name']; 
            $userId = $row['id'];
            $user_image = $row['photo'];  
            $login_user_name=$row['user_name'];
        if(($loginuser==$email and $loginpassword==$password))
          {
	    $_SESSION['loged_name']=$fullname;       
            $_SESSION['loged_email']=$loginuser;
            $_SESSION['loged_password']=$loginpassword;
            $_SESSION['loged_fullname']=$fullname;
            $_SESSION['user_loged_id']=$userId;
            $_SESSION['loged_user_image']=$user_image;
            $_SESSION['loged_user_name']=$login_user_name;            
            header("location:login-message");       
          }
          else if(($login_user_name==$email and $loginpassword==$password)) 
          {
            $_SESSION['loged_name']=$fullname;
            $_SESSION['loged_email']=$loginuser;            
            $_SESSION['loged_fullname']=$fullname;
            $_SESSION['user_loged_id']=$userId;
            $_SESSION['loged_user_image']=$user_image;
            $_SESSION['loged_user_name']=$login_user_name;
            header("location:login-message");           
          }
         else
          {
            header("location:error.php?msg");
          }    


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

