<?php
$phptitle="Blog";
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
<<<<<<< HEAD
=======
            <li data-target="#myCarousel" data-slide-to="2"></li>
>>>>>>> ba5a829206c43b98d6e77103bb45e429fac65bd9
          </ol>

    <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
<<<<<<< HEAD
                <img src="img/1920x1080_slider/05.jpg" alt="Los Angeles" style="width:auto;">
              </div>

              <div class="item">
                <img src="img/1920x1080_slider/04.jpg" alt="Chicago" style="width:auto;">
              </div>
              <div class="carousel-caption" style="top: 70%;left: 13%;right: auto;bottom: auto;">
                    <h2 style="color: #fff;font-size: 50px;">Blog</h2>
                    <p style="color: #fff;font-size: 20px;">Latest blog ,<br>
=======
                <img src="img/1920x1080/01.jpg" alt="Los Angeles" style="width:auto;">
              </div>

              <div class="item">
                <img src="img/1920x1080/02.jpg" alt="Chicago" style="width:auto;">
              </div>
            
              <div class="item">
                <img src="img/1920x1080/01.jpg" alt="New york" style="width:auto;">
              </div>
              <div class="carousel-caption" style="top: 70%;left: 13%;right: auto;bottom: auto;">
                    <h2 style="color: #905e1b;font-size: 70px;">Blog</h2>
                    <p style="color: #ea8804;font-size: 20px;">Latest blog ,<br>
>>>>>>> ba5a829206c43b98d6e77103bb45e429fac65bd9
                        Form our members.</p>
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
            include('Include/blog_posts.php');
            include('Include/ran_image.php'); 
                        include('page.php'); 

            include('Include/footer.php');
         ?>