<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<div class="container">
  <h2>Add Notice</h2>
  <form action="upload_notice.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="notice">Notice's File:</label>
      <input type="file"  placeholder="Choose File" name="fileToUpload" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
    <div class="form-group">
    	<label for="short">Notice Content:</label>
    <textarea  rows="5" id="comment" name="content" placeholder="Notice Content" required="required" style="width: 100%; margin: 5px 0px; padding:2px 0px;"></textarea>
    </div>
  <button type="submit" class="btn btn-primary btn-block btn-large" name="upload">Submit</button>
  </form>
</div>
<?php
include('includes/footer.php');
?>