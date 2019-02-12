<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<?php
include('dbcon.php');
                      $getid=$_GET['edit_menu_ref'];
                      $query = "SELECT *FROM navbar where id='$getid'";
                      $result = mysqli_query($con, $query);
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $id=$row['id'];
                                $name=$row['menu_name'];
                                $link=$row['menu_link'];


                        	 echo"<div class='container'>";
							  echo"<h2>Edit Menu</h2>";
							  echo"<form action='updateMenu_1.php' method='POST' enctype='multipart/form-data'>";
							  echo"<div class='form-group'>";
							      echo"<label for='id'>Notice ID: $id</label>";
							  echo "<input type='hidden' value='$id' name='id'>";
							      echo"</div>";
							   echo"<div class='form-group'>";
							     echo" <label for='name'>Menu Name</label>";
							      echo"<input type='text' name='name' value='$name' style='width: 100%; margin: 5px 0px; padding:2px 0px;>";
							    echo"</div>";
							    echo"<div class='form-group'>";
							     echo" <label for='link'>Menu Link</label>";
							      echo"<input type='text' name='link' value='$link' style='width: 100%; margin: 5px 0px; padding:2px 0px;'>";
							    echo"</div>";
							  echo"<button type='submit' class='btn btn-primary btn-block btn-large' name='update'>Update</button>";
							  echo"</form>";
							echo"</div>";
                        ?>
<?php
include('includes/footer.php');
?>