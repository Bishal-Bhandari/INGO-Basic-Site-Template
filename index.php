<?php
$phptitle="Shaikshik Chetana Nepal";
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
              <div class="carousel-caption" style="top: 43%;left: 21%;right: auto;bottom: auto;">
                    <h2 style="color: #905e1b;font-size: 70px;">Shaikshik Chetana Nepal</h2>
                    <p style="color: #ea8804;font-size: 20px;"> Builds safe and inclusive <br>
                        Environment </p>
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


 <!-- Intro -->
        <div class="content-md container" style="padding-bottom: 0px;margin-bottom: -30px;">
            <div class="row">
                <div class="col-sm-9">
                    <h2 style="color:#905e1b;">What we do?</h2>

                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                                <blockquote class="blockquote" style="color: #ea8804">
                                    <div class="margin-b-20" style="text-align:justify">
                                    To achieve our aims, Shaikshik Chetana –</div>
                                    <div class="margin-b-20" style="text-align:justify">
                                    <ul class="article_ul">
                                    <li>Builds safe and inclusive educational infrastructure that provides value for money</li>
                                    <li>Recruits, trains and coaches teachers, as well as designing and developing teaching and learning resources, to help improve learning outcomes</li> 
                                    <li>Supports school management committees and school principals</li> 
                                    <li>Provides psychosocial family and educational  support for vulnerable children such as orphans and street children</li>
                                    <li>Trains social workers</li>
                                    <li>Reunites children with family</li>
                                    <li>Advocates for street children and other vulnerable children</li>
                                    </ul> 
                                    </div>
                                    <p><a class="link" href="full_article.php" style="color: #905e1b;margin-left: 10px;">For more click here</a></p>
                                </blockquote>
                            </div>
                        <!-- End Swiper Wrapper -->
                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->
       <!-- intro -->
        <!-- article Banner -->
        <div class="promo-banner" style="height: 600px;margin-top: 80px;">
            <div class="container-sm content-lg">
                <h2 class="promo-banner-title">"Enabling Access to Early Education for Migrant Children"</h2>
                <p class="promo-banner-text">Brick production is one of the most prominent sectors of Nepal’s economy. It is a seasonal industry and every year there is a strong migration of workers and their families from rural areas to the Kathmandu Valley seeking <a class="link" href="full_article.php" style="color: #fff;margin-left: 10px;">Read More</a></p>
            </div>
        </div>
        <!-- article Banner -->
        <!-- youtube -->
<div class="container" style="margin-top: 30px;width: 100%">
    <div class="row">
    <div class="col-md-6">
        <iframe width="625" height="400" src="https://www.youtube.com/embed/8wdOM7mhlGE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-md-6">
        <center><h3>SCHOOLING THAT IS FLEXIBLE AND INDIVIDULISED</h3>
            <h1>Bringing Education To Brick Kilns</h1><br></center>
<ul class="brick_li">
<li>Tailored Teaching and Learning- Tailored teaching and learning methods</li>
<br><br>
<li>Safe and Secure Learning Spaces- Safe and Secure</li>
<br><br>
<li>Community Engagement- Parents and Community</li>
</ul>
    </div>
</div>
</div>
<!-- youtube -->

       
            <?php 
                include('Include/blog_posts.php');
             ?>
             <h4 style="margin-bottom: 35px;text-align: center">Our Gallery</h4>
            <?php 
                include('Include/ran_image.php');
             ?>

        
        <!--========== END PAGE LAYOUT ==========-->

        <?php 
include('Include/footer.php');
         ?>