
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin Dashboard</span>
          </a>
        </li>

        <?php
        $sess = $_SESSION['admin_email'];
        if($sess == 'info@shaikshikchetana.org.np'){
        echo"<li class='nav-item dropdown'>";
          echo"<a class='nav-link dropdown-toggle' href='#'' id='pagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
            echo"<i class='fas fa-fw fa-folder'></i>";
            echo"<span>Account Setting</span>";
          echo"</a>";
          echo"<div class='dropdown-menu' aria-labelledby='pagesDropdown'>";
            echo"<h6 class='dropdown-header'>Account Screens:</h6>";
            echo"<a class='dropdown-item' href='addAccount.php'>Add Account</a>";
            echo"<a class='dropdown-item' href='viewAccount.php'>View and Edit Account</a>";
          echo"</div>";
        echo"</li>";
      }
        ?>

         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Articles</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Article Screens:</h6>
            <a class="dropdown-item" href="addArticle.php">Add Article</a>
            <a class="dropdown-item" href="viewArticle.php">View and Edit Article</a>
          </div>
        </li>

         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gallery</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Menu Screens:</h6>
            <a class="dropdown-item" href="addGallery.php">Add Gallery</a>
            <a class="dropdown-item" href="viewGallery.php">View and Edit Gallery</a>
          </div>
        </li>

         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Blog</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Menu Screens:</h6>
            <a class="dropdown-item" href="addBlog.php">Add Blog</a>
            <a class="dropdown-item" href="viewBlog.php">View and Edit Blog</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Notice</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Notice Screens:</h6>
            <a class="dropdown-item" href="addNotice.php">Add Notice</a>
            <a class="dropdown-item" href="viewNotice.php">View and Edit Notice</a>
          </div>
        </li>

      </ul>

      <div id="content-wrapper">