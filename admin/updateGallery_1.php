<?php
session_start();
$target_dir = "../img/970x647_gallery/";
$timeStamp=time();
$target_file = $target_dir .$timeStamp. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["update"])) {
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
  $title=$_POST['alt'];
  $id=$_POST['id'];
    include('dbcon.php');
      if($img_src==null){
    $query="UPDATE gallery_img SET img_alt='$title' WHERE img_id=$id";
      }
      else{
        $query="UPDATE gallery_img SET img_src='$img_src', img_alt='$title' WHERE img_id=$id";
         }

          $result = mysqli_query($con,$query);
  if($result==1){
        header('location:viewGallery.php?fin_res_ref=sucess');
    }
   echo "Error updating record: " . mysqli_error($con);

?>