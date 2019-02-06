<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
echo"<div class='container'>";
echo"<h4>All the Blog Post</h4>";
include('dbcon.php');


                                $query = "SELECT *FROM blog_post ORDER BY blog_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['blog_id'];
                                $img=$row['blog_img'];
                                $title=$row['blog_title'];
                                $writer=$row['blog_writer'];
                                $short_post=$row['blog_short_des'];
                                $long=$row['blog_long_des'];




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
	  		 echo"<h5 style='margin-right:5px;'>Writer:</h5>";
	  		 	echo"$writer";
	  		 echo"</div>";
	  		 echo"<div class='row'>";
	  		 echo"<h5 style='margin-right:5px;'>Short Description:</h5>";
	  		 	echo"$short_post";
	  		 echo"</div>";
	  echo"</div>";
			  echo"<div class='col-md-6' style='padding:1px 2px;'>";
			  		echo"<a href='updateBlog.php?edit_post_ref=$id' class='btn btn-info'  role='button' style='width:100%;'>Edit</a>";
			  echo"</div>";
			  echo"<div class='col-md-6' style='padding:1px 2px;'>";
			  		echo"<a href='deleteBlog.php?delete_post_ref=$id' class='btn btn-info' onclick='myFunction($id); return false;' role='button' style='width:100%;'>Delete</a>";
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
    window.location.href = "deleteBlog.php?delete_post_ref="+id;
  } else {
    window.location.href = "viewBlog.php";
  }
}
</script>