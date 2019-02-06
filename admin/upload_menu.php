<?php

  if (isset($_POST['menu'])){

  include('dbcon.php');
 // removes backslashes
    // $blog_img= stripcslashes($_REQUEST['blog_img']);  
    // $blog_img = mysqli_real_escape_string($link,$blog_img);
    $menu= stripcslashes($_REQUEST['menu']);
    $menu = mysqli_real_escape_string($con,$menu);
    $link= stripcslashes($_REQUEST['link']);
    $link = mysqli_real_escape_string($con,$link);

    $query="INSERT INTO navbar (menu_name,menu_link) VALUES ('$menu','$link')";
   $result = mysqli_query($con,$query) or die(mysql_error());

   header('location:viewMenu.php');
   
    
    }
?> 