<?php
include('includes/header.php');
include('includes/navbar_top.php');
include('includes/menu_bar_side.php');
?>
<div class="container">
  <h2>Add Article</h2>
  <form action="upload_blog.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file"  placeholder="Choose Image" name="fileToUpload" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text"  placeholder="Blog Title" name="title" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
    <div class="form-group">
      <label for="writer">Auther Name:</label>
      <input type="writer"  placeholder="Auther Name" name="writer" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
    <div class="form-group">
      <label for="short">Blog Short Description:</label>
      <input type="text"  placeholder="Blog Short Description minimum 100 Letters." name="short" style="width: 100%; margin: 5px 0px; padding:2px 0px;">
    </div>
    <div class="form-group">
    	<label for="short">Blog Full Description:</label>
    <textarea  rows="5" id="comment" name="long" placeholder="Blog Full Description" required="required" style="width: 100%; margin: 5px 0px; padding:2px 0px;"></textarea>
    </div>
  <button type="submit" class="btn btn-primary btn-block btn-large" name="upload">Submit</button>
  </form>
</div>
<?php
include('includes/footer.php');
?>