<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
echo"<div class='container'>";
echo"<h4>All Notice</h4>";
include('dbcon.php');


                                $query = "SELECT *FROM notice ORDER BY notice_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['notice_id'];
                                $content=$row['notice_content'];
                                $link=$row['notice_link'];



	echo"<div class='row' style='margin-bottom: 25px;'>";
	  // echo"<div class='col-md-4' style='background-color: #e8e2e2; padding:0px;'>";
	  // 		 echo"<img src='$link' alt='Artical Image' style='width:100%;height:auto;' >";
	  // echo"</div>";	
	  echo"<div class='col-md-8' style='background-color: #e8e2e2; padding-left:25px;'>";
	  		 echo"<div class='row'>";
	  		 echo"<h5 style='margin-right:5px;'>Notice:</h5>";
	  		 	echo"$content";
	  		 echo"</div>";
	  echo"</div>";
			  echo"<div class='col-md-6' style='padding:1px 2px;'>";
			  		echo"<a href='updateNotice.php?edit_notice_ref=$id' class='btn btn-info' role='button' style='width:100%;'>Edit</a>";
			  echo"</div>";
			  echo"<div class='col-md-6' style='padding:1px 2px;'>";
			  		echo"<a href='deleteNotice.php?delete_notice_ref=$id' class='btn btn-info' onclick='myFunction($id); return false;' role='button' style='width:100%;'>Delete</a>";
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
    window.location.href = "deleteNotice.php?delete_notice_ref="+id;
  } else {
    window.location.href = "viewNotice.php";
  }
}
</script>