<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
include('dbcon.php');
                      $getid=$_GET['edit_post_ref'];
                      $query = "SELECT *FROM articles where article_id='$getid'";
                      $result = mysqli_query($con, $query);
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $id=$row['article_id'];
                        $img=$row['article_img'];
                        $title=$row['article_title'];
                        $short=$row['article_short'];
                        $long=$row['article_body'];


                        	 echo"<div class='container'>";
							  echo"<h2>Edit Article</h2>";
							  echo"<form action='updateArticle_1.php' method='POST' enctype='multipart/form-data'>";
							  echo"<div class='form-group'>";
							      echo"<label for='id'>Article ID: $id</label>";
							  echo "<input type='hidden' value='$id' name='id'>";
							      echo"</div>";
							    echo"<div class='form-group'>";
							      echo"<label for='image'>Image:</label>";
							      echo"<input type='file'  placeholder='Choose Image' name='fileToUpload' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							     echo" <label for='title'>Title</label>";
							      echo"<input type='text' name='title' value='$title' style='width: 100%; margin: 5px 0px; padding:2px 0px;>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							     echo" <label for='short'>Article Short Description:</label>";
							      echo"<textarea  rows='5'  name='short' value='$short' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>$short</textarea>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							    	echo"<label for='short'>Article Full Description:</label>";
							    echo"<textarea  rows='5'  name='long' value='$long' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>$long</textarea>";
							    echo"</div>";
							  echo"<button type='submit' class='btn btn-primary btn-block btn-large' name='update'>Update</button>";
							  echo"</form>";
							echo"</div>";
                        ?>

<?php
include('includes/footer.php');
?>