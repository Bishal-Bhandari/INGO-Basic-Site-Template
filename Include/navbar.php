<<<<<<< HEAD

    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
       <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top" > <!-- style="background-color: #905e1b;" -->
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
                                <img class="logo-img logo-img-main" src="img/logoy.png" alt="Logo">
                                <img class="logo-img logo-img-active" src="img/logox.png" alt="Logo">
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
                                                <a class="nav-item-child nav-item-hover" href="what_we_do.php">+What we do?</a>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="full_article.php?article_link_ref=1">Enabling Access to Early Education for Migrant Children</a>
                                                <a href="full_article.php?article_link_ref=2">Faith-Based WASH and Menstrual Hygiene </a>
                                                <a href="full_article.php?article_link_ref=3">Awareness and Inclusion for Children </a>
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
        <!--========== END HEADER ==========-->
       <!--  -->
     
        <!--========== END HEADER ==========
=======
<!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <?php
                            echo "<header class='header navbar-fixed-top' style='background-color: #905e1b;'>";
                            echo "<nav class='navbar' role='navigation'>";
                            echo "<div class='container'>";
                            echo "<div class='menu-container js_nav-item'>";
                            echo "<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.nav-collapse'>";
                            echo "<span class='sr-only'>Toggle navigation</span>";
                            echo "<span class='toggle-icon'></span>";
                            echo "</button>";
                            echo "<div class='logo'>";
                            echo "<a class='logo-wrap' href='index.php'>"; 
                            echo"<img class='logo-img logo-img-main' src='img/logox.png' alt='Logo'>";
                            echo"<img class='logo-img logo-img-active' src='img/logox.png' alt='Logo'>";
                                        echo "</a>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='collapse navbar-collapse nav-collapse'>";
                                        echo "<div class='menu-container'>";
                                        echo "<ul class='nav navbar-nav navbar-nav-right'>";
                                        include('admin/dbcon.php');
                                        $query="SELECT * FROM navbar";
                                        $result=mysqli_query($con,$query);
                                        $row_cnt=mysqli_num_rows($result);
                                        for($i=0;$i<$row_cnt;$i++)
                                        {
                                        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                                        $menuName=$row['menu_name'];
                                        $menuLink=$row['menu_link'];
                                        echo "<li class='js_nav-item nav-item'><a class='nav-item-child nav-item-hover' href='$menuLink'>$menuName</a></li>";
                                        }
                                        echo "</ul";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</nav>";
                                        echo "</header";
        ?>
        <!--========== END HEADER ==========-->
>>>>>>> ba5a829206c43b98d6e77103bb45e429fac65bd9
