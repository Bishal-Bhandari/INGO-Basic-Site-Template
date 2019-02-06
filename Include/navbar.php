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
       <!--  -->