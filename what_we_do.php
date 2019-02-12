<?php
$phptitle="What we do?";
?>
<?php 
include('Include/header.php');
include('Include/navbar.php');
 ?>
 <!--========== SLIDER ==========-->
        <!--========== SLIDER ==========-->
    <div class="container" style="width: 100%;padding-left: 0px;padding-right: 0px;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

    <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/1920x1080_slider/09.jpg" alt="Los Angeles" style="width:auto;">
              </div>

              <div class="item">
                <img src="img/1920x1080_slider/08.jpg" alt="Chicago" style="width:auto;">
              </div>
            
              <div class="carousel-caption" style="top: 70%;left: 13%;right: auto;bottom: auto;">
                    <h2 style="color: #fff;font-size: 50px;">What we do.</h2>
                    <p style="color: #fff;font-size: 20px;">Describes what we do,<br>
                        and our works.</p>
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

        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->

        <!-- Testimonials -->
        <div class="content-md container" style="padding-bottom: 0px;margin-bottom: -30px;">
            <div class="row">
                <div class="col-sm-9">
                    <h2 style="color:#905e1b;">What we do?</h2>

                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                                <blockquote class="blockquote" style="color: #905e1b">
                                    <div class="margin-b-20" style="text-align:justify">
                                    To achieve our aims, Shaikshik Chetana –</div>
                                    <div class="margin-b-20" style="text-align:justify">
                                    <ul class="what_ul">
                                    <li>Builds safe and inclusive educational infrastructure that provides value for money</li>
                                    <li>Recruits, trains and coaches teachers, as well as designing and developing teaching and learning resources, to help improve learning outcomes</li> 
                                    <li>Supports school management committees and school principals</li> 
                                    <li>Provides psychosocial family and educational  support for vulnerable children such as orphans and street children</li>
                                    <li>Trains social workers</li>
                                    <li>Reunites children with family</li>
                                    <li>Advocates for street children and other vulnerable children</li>
                                    </ul> 
                                    </div>
                                    <p><span class="fweight-700 color-link">President</span>, Shaikshik Chetana </p>
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
            <?php
            $position=200;

        echo "<div class='container-fluid' style='margin-top:70px;background-color:#faa93c;'>";
        include('admin/dbcon.php');


                                $query = "SELECT *FROM articles ORDER BY article_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['article_id'];
                                $img=$row['article_img'];
                                $title=$row['article_title'];
                                $short=$row['article_short'];
                                
                                $cut_short = substr($short,$position,1);
                                if($cut_short !=" "){
                                while($cut_short !=" "){
                                $j=1;
                                $position=$position+$j;

                               
                                $cut_short = substr($short,$position,1); 
                                }

                                }

                                $cut_short = substr($short,0,$position);
                                $img=str_replace("../"," ","$img");
                                echo "<div class='row' style='margin-top:30px;'>"; 
                echo "<div class='col-md-4'>";
                        echo "<img src='$img' alt='Image' width='600' height='400' style='width: 100%;height: auto;'>";
               echo " </div>";
                echo "<div class='col-md-8' style='background-color:#faa93c;'>";
                        
                                   echo "<p><span class='fweight-700 color-link'><h1 style='color:#5f6475;'>$title</h1></span></p>";
                                    echo "<div class='margin-b-20'>";
                echo "<p style='text-align:justify;font-size:25px;color:#fff;'>$cut_short<a  class='btn btn-info' role='button' href='full_article.php?article_link_ref=$id' style='font-size:25px;background-color: #dc8510;border-color: #f8fafb;border-width: 3px;margin-left: 15px;'>Read More</a></p> ";
                 echo "</div>";
                      echo "</div>";
                echo "</div>";
                echo "<hr>";
            }
        echo "</div>";
        

            ?>

        <!-- work-1 -->
        <!-- <div class="container-fluid" style="margin-top:70px;background-color:#faa93c;">
        		<div class="col-md-4">
                        <img src="img/500x500/01.jpg" alt="Image" width="600" height="400" style="width: 100%;height: auto;">
                </div>
                <div class="col-md-8" style="background-color:#faa93c;">
                        
                                   <p><span class="fweight-700 color-link"><h1 style="color:#5f6475;">“Enabling Access to Early Education for Migrant Children”</h1></span></p>
                                    <div class="margin-b-20">
                <p style="text-align:justify;font-size:25px;color:#fff;">Over 1 million school-aged children are currently out of education in Nepal, mainly in the country’s poorest,
                 most fragile, marginalised and disaster-hit areas. 
                 Millions more children are in <a  class="btn btn-info" role="button" href='full_article.php?article_link_ref=$id' style="font-size:25px;background-color: #dc8510;border-color: #f8fafb;border-width: 3px;">Read More</a></p> 
                 </div>
                      
                </div>
        </div> -->
        <!-- work-1 -->

        <!--========== END PAGE LAYOUT ==========-->

        <?php 
        include('Include/blog_posts.php');
include('Include/footer.php');
         ?>