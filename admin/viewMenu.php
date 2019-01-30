<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
echo"<div class='container-fluid'>";
echo"<h4>All Menu Name</h4>";
               echo"<div class='row'>";
               
                  include('dbcon.php');


                                $query = "SELECT *FROM navbar";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['id'];
                                $name=$row['menu_name'];
                                $link=$row['menu_link'];


                echo"<div class='col-md-6'>";
                echo"<div class='row' style=' margin-left: 2px;'>";
	  		 echo"<h5 style='margin-right:5px;'>Menu Name:</h5>";
	  		 	echo"$name";
	  		 echo"</div>";
	  		 echo"<div class='row' style=' margin-left: 2px;'>";
	  		 echo"<h5 style='margin-right:5px;'>Menu Link:</h5>";
	  		 	echo"$link";
	  		 echo"</div>";
               //echo"<div class='row'>";
                 echo"<div class='col-md-12' style='padding:1px 2px;'>";
            echo"<a href='updateMenu.php?edit_menu_ref=$id' class='btn btn-info' role='button' style='width:100%;'>Edit</a>";
        echo"</div>";
        
        echo"<div class='col-md-12' style='padding:1px 2px;margin-bottom:2px;'>";
            echo"<a href='deleteMenu.php?delete_menu_ref=$id' class='btn btn-info' onclick='myFunction($id); return false;'  role='button'  style='width:100%;'>Delete</a>";
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
    window.location.href = "deleteMenu.php?delete_menu_ref="+id;
  } else {
    window.location.href = "viewMenu.php";
  }
}
</script>