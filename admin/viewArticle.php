<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
echo"<div class='container'>";
echo"<h4>All the Article Post</h4>";
include('dbcon.php');


                                $query = "SELECT *FROM articles ORDER BY article_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['article_id'];
                                $img=$row['article_img'];
                                $title=$row['article_title'];
                                $short_post=$row['article_short'];
                                $long=$row['article_body'];




  echo"<div class='row' style='margin-bottom: 25px;'>";
    echo"<div class='col-md-4' style='background-color: #e8e2e2; padding:0px;'>";
         echo"<img src='$img' alt='Artical Image' style='width:100%;height:auto;' >";
    echo"</div>"; 
    echo"<div class='col-md-8' style='background-color: #e8e2e2; padding-left:25px;'>";
         echo"<div class='row'>";
         echo"<h5 style='margin-right:5px;'>Title:</h5>";
          echo"$title";
         echo"</div>";
         echo"<div class='row'>";
         echo"<h5 style='margin-right:5px;'>Short Description:</h5>";
          echo"$short_post";
         echo"</div>";
         echo"<div class='row'>";
         echo"<h5 style='margin-right:5px;'>Long Description:</h5>";
          echo"$long";
         echo"</div>";
    echo"</div>";
        echo"<div class='col-md-6' style='padding:1px 2px;'>";
            echo"<a href='updateArticle.php?edit_post_ref=$id' class='btn btn-info'  role='button' style='width:100%;'>Edit</a>";
        echo"</div>";
        echo"<div class='col-md-6' style='padding:1px 2px;'>";
            echo"<a href='deleteArticle.php?delete_post_ref=$id' class='btn btn-info' onclick='myFunction($id); return false;' role='button' style='width:100%;'>Delete</a>";
        echo"</div>";
  echo"</div> ";}
  echo"<hr>";   
echo"</div>";
?>
<?php
include('includes/footer.php');
?>
<script type="text/javascript">
  function myFunction(id) {
  var r = confirm("Are you sure you want to delete?");
  if (r == true) {
    window.location.href = "deleteArticle.php?delete_post_ref="+id;
  } else {
    window.location.href = "viewArticle.php";
  }
}
</script>