<?php
$phptitle="Full Article";
?>
<?php 
include('Include/header.php');
include('Include/navbar.php');
 ?>
  <!--========== SLIDER ==========-->
     
        <div class="promo-block">
            <div class="container">
                <div class="margin-b-40">
                    <h1 class="promo-block-title">Digital Product Agency.</h1>
                    <p class="promo-block-text">Look no further. You came to the right ... place</p>
                </div>
                <a class="js_popup-youtube btn-theme btn-theme-md btn-white-bg text-uppercase" href="https://www.youtube.com/watch?v=0qisGSwZym4" title="Intro Video"><i class="btn-icon icon-control-play"></i> Watch Intro Video</a>
            </div>
        </div>
        <!--========== SLIDER ==========-->
          <?php
          echo"";
                      include('admin/dbcon.php');
                      $getid=$_GET['blog_link_ref'];
                      $query = "SELECT *FROM blog_post where blog_id='$getid'";
                      $result = mysqli_query($con, $query);
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $id=$row['blog_id'];
                        $img=$row['blog_img'];
                        $title=$row['blog_title'];
                        $writer=$row['blog_writer'];
                        //$short_post=$row['blog_short_des'];
                        $long=$row['blog_long_des'];
                        $img=str_replace("../"," ","$img");
        //<!--Content-->
        echo"<div class='container-fluid' style='margin-top:70px;'>";
        		echo"<div class='col-md-4'>";
                        echo"<img src='$img' alt='Blog Image' width='600' height='400' style='width: 100%;height: auto;'>";
                echo"</div>";
                echo"<div class='col-md-8' style='background-color:#fff;''>";
                        echo"<blockquote class='blockquote'>";
                                   echo" <p><span class='fweight-700 color-link'>$title</span><br> $writer</p>";
                                    echo"<div class='margin-b-20'>";
                echo"<p>$long</p>";
                                    echo"</div>";
                        echo"</blockquote> ";
                echo"</div>";
        echo"</div>";
        //<!--Content-->
        ?>
 <?php 
 include('Include/blog_posts.php');
include('Include/footer.php');
  ?>