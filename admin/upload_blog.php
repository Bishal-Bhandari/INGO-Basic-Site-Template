<?php
session_start();
$target_dir = "../img/970x647_blog/";
$timeStamp=time();
$target_file = $target_dir .$timeStamp. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         $blog_img=$target_file;
          //$blog_img=$_FILES["fileToUpload"]["name"];
    }
}
?>
    <?php

  if (isset($_POST['title'])){

  include('dbcon.php');
 // removes backslashes
    // $blog_img= stripcslashes($_REQUEST['blog_img']);  
    // $blog_img = mysqli_real_escape_string($link,$blog_img);
    $blog_title= stripcslashes($_REQUEST['title']);
    $blog_title = mysqli_real_escape_string($con,$blog_title);
    $blog_writer= stripcslashes($_REQUEST['writer']);
    $blog_writer = mysqli_real_escape_string($con,$blog_writer);
    $blog_short_des= stripcslashes($_REQUEST['short']);
    $blog_short_des = mysqli_real_escape_string($con,$blog_short_des);
    $blog_long_des= stripcslashes($_REQUEST['long']);
    $blog_long_des = mysqli_real_escape_string($con,$blog_long_des);
echo "this is ";
    //$blog_img=$_SESSION['blog_img'];
    $query="INSERT INTO blog_post (blog_img,blog_title,blog_writer,blog_short_des,blog_long_des) VALUES ('$blog_img','$blog_title','$blog_writer','$blog_short_des','$blog_long_des')";
   $result = mysqli_query($con,$query) or die(mysql_error());

   header('location:viewBlog.php');
   
    
    }
?> 