<?php
$id=$_POST['id'];
    $name=$_POST['menu_name'];
     $link=$_POST['menu_link'];
    include('dbcon.php');
      if($notice_link==null){
        $query="UPDATE navbar SET menu_name='$name',menu_link='$link' WHERE id=$id";
        
          $result = mysqli_query($con,$query);
  if($result==1){
        header('location:viewMenu.php?fin_res_ref=sucess');
    }
   echo "Error updating record: " . mysqli_error($con);

?>