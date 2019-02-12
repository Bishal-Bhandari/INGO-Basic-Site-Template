<?php
if(isset($_GET['delete_notice_ref'])){
      include('dbcon.php');
      $id=$_GET['delete_notice_ref'];
      $query = "DELETE FROM notice where notice_id='$id'";
      $result = mysqli_query($con, $query);     
     if($result==1){
      // header('location:viewBlog.php?res_fin=deleted');
       echo"<script>window.location = 'viewNotice.php';</script>";
     }
      else{
        //header('location:viewBlog.php?m=fail');
        echo"<script>window.location = 'viewNotice.php';</script>";
      }
  }
?>
<?php