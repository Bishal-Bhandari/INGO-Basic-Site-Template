<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
include('dbcon.php');
                      $getid=$_GET['edit_notice_ref'];
                      $query = "SELECT *FROM notice where notice_id='$getid'";
                      $result = mysqli_query($con, $query);
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $id=$row['notice_id'];
                                $content=$row['notice_content'];
                                $link=$row['notice_link'];


                        	 echo"<div class='container'>";
							  echo"<h2>Edit Notice</h2>";
							  echo"<form action='updateNotice_1.php' method='POST' enctype='multipart/form-data'>";
							  echo"<div class='form-group'>";
							      echo"<label for='id'>Notice ID: $id</label>";
							  echo "<input type='hidden' value='$id' name='id'>";
							      echo"</div>";
							    echo"<div class='form-group'>";
							      echo"<label for='image'>File Name:</label>";
							      echo"<input type='file'  placeholder='Choose File' name='fileToUpload' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							    	echo"<label for='content'>Notice Content:</label>";
							    echo"<textarea  rows='5'  name='content' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>$content</textarea>";
							    echo"</div>";
							  echo"<button type='submit' class='btn btn-primary btn-block btn-large' name='update'>Update</button>";
							  echo"</form>";
							echo"</div>";
                        ?>

<?php
include('includes/footer.php');
?>