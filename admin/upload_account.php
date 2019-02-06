<?php

  if (isset($_POST['email'])){

  include('dbcon.php');
 // removes backslashes
    // $blog_img= stripcslashes($_REQUEST['blog_img']);  
    // $blog_img = mysqli_real_escape_string($link,$blog_img);
    $email= stripcslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password= stripcslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

    $query="INSERT INTO admin_login (admin_email,admin_password) VALUES ('$email','$password')";
   $result = mysqli_query($con,$query) or die(mysql_error());

   header('location:viewAccount.php');
   
    
    }
?> 