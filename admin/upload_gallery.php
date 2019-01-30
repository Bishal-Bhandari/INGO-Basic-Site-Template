<?php
session_start();
$target_dir = "../img/970x647_gallery/";
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
         $img_src=$target_file;
          //$blog_img=$_FILES["fileToUpload"]["name"];
    }
}
?>
    <?php

  if (isset($_POST['altName'])){

  include('dbcon.php');
 // removes backslashes
    // $blog_img= stripcslashes($_REQUEST['blog_img']);  
    // $blog_img = mysqli_real_escape_string($link,$blog_img);
    $altName= stripcslashes($_REQUEST['altName']);
    $altName = mysqli_real_escape_string($con,$altName);
    //$blog_img=$_SESSION['blog_img'];
    $query="INSERT INTO gallery_img (img_src,img_alt) VALUES ('$img_src','$altName')";
   $result = mysqli_query($con,$query) or die(mysql_error());

   header('location:viewGallery.php');
   
    
    }
?> 