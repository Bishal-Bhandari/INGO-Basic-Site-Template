<?php
$phptitle="Full Blog";
?>
<?php 
include('Include/header.php');
include('Include/navbar.php');
 ?>
          <!--========== SLIDER ==========-->
    <div class="container" style="width: 100%;padding-left: 0px;padding-right: 0px;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

    <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/1920x1080/01.jpg" alt="Los Angeles" style="width:auto;">
              </div>

              <div class="item">
                <img src="img/1920x1080/02.jpg" alt="Chicago" style="width:auto;">
              </div>
            
              <div class="item">
                <img src="img/1920x1080/01.jpg" alt="New york" style="width:auto;">
              </div>
              <div class="carousel-caption" style="top: 70%;left: 13%;right: auto;bottom: auto;">
                    <h2 style="color: #905e1b;font-size: 50px;">Blog</h2>
                   <!--  <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                        sed do eiusmod tempor incididunt ut labore </p> -->
                </div>
            </div>

    <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
      </div>
    </div>
             <!--  <div class="carousel-caption" style="position: absolute; top: 180px;left: 20%; ">
                
                    <h1 class="promo-block-title">Digital Product Agency.</h1>
                    <p class="promo-block-text">Look no further. You came to the right ... place</p>
              
                <a class="js_popup-youtube btn-theme btn-theme-md btn-white-bg text-uppercase" href="https://www.youtube.com/watch?v=0qisGSwZym4" title="Intro Video"><i class="btn-icon icon-control-play"></i> Watch Intro Video
              </div> -->
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
                                   echo" <p><span class='fweight-700 color-link' style='color: #f3931f !important;font-size: 25px;'>$title</span><br> $writer</p>";
                                    echo"<div class='margin-b-20'>";
                echo"<p style='color:#000;'>$long</p>";
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