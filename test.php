<?php
$phptitle="Blog";
?>

<?php 
include('Include/header.php');

 ?>
 <!--========== SLIDER ==========-->


<!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img logo-img-main" src="img/logox.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logox.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="index.php">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="who_we_are.php">Who we are?</a></li>
                                <li class="js_nav-item nav-item">
                                        <div class="dropdown">
                                            <button class="dropbtn">
                                                <a class="nav-item-child nav-item-hover" href="what_we_do.php">What we do?</a>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">Link 1</a>
                                                <a href="#">Link 2</a>
                                                <a href="#">Link 3</a>
                                              </div>
                                        </div>

                                </li>

                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="get_involve.php">Get involve</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="notice.php">Notice</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="blog.php">Blog</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="contact.php">Contact</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="donate.php">Donate</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->





         ================================================================ -->
   
      <!-- =========================
        ========== SLIDER ==========-->
        <?php 
include('Include/footer.php');
         ?>