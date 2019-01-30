<?php
$target_dir = "../Document_notice/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
&& $FileType != "gif" && $FileType != "pdf" && $FileType != "xps") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         $notice_link=$target_file;
    }}
    $id=$_POST['id'];
    $content=$_POST['content'];
    include('dbcon.php');
      if($notice_link==null){
    $query="UPDATE notice SET notice_content='$content' WHERE notice_id=$id";
      }
      else{
        $query="UPDATE notice SET notice_content='$content',notice_link='$notice_link' WHERE notice_id=$id";
         }

          $result = mysqli_query($con,$query);
  if($result==1){
        header('location:viewNotice.php?fin_res_ref=sucess');
    }
   echo "Error updating record: " . mysqli_error($con);

?>