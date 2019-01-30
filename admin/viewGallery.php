<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
echo"<div class='container-fluid'>";
               echo"<div class='row'>";
               
                  include('dbcon.php');


                                $query = "SELECT *FROM gallery_img ORDER BY img_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <12 ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['img_id'];
                                $src=$row['img_src'];
                                $alt=$row['img_alt'];


                echo"<div class='col-md-6'>";
                echo"<a href='$src' class='fresco' data-fresco-group='example' ><img src='$src' alt='$alt' style='height:293px;width:100%;' title='$alt'></a>";
               //echo"<div class='row'>";
                 echo"<div class='col-md-12' style='padding:1px 2px;'>";
            echo"<a href='updateGallery.php?edit_gallery_ref=$id' class='btn btn-info' role='button' style='width:100%;'>Edit</a>";
        echo"</div>";
        
        echo"<div class='col-md-12' style='padding:1px 2px;margin-bottom:2px;'>";
            echo"<a href='deleteGallery.php?delete_gallery_ref=$id' class='btn btn-info' onclick='myFunction($id); return false;'  role='button' style='width:100%;'>Delete</a>";
        echo"</div>";
        // echo"</div>";
                echo"</div>"; 
              }
            echo"</div>";
    echo"</div>";
    ?>
<?php
include('includes/footer.php');
?>
<script type="text/javascript">
  function myFunction(id) {
  var r = confirm("Are you sure you want to delete?");
  if (r == true) {
    window.location.href = "deleteGallery.php?delete_gallery_ref="+id;
  } else {
    window.location.href = "viewGallery.php";
  }
}
</script>