<?php
$phptitle="What we do?";
?>
<?php 
include('Include/header.php');
include('Include/navbar.php');
include('Include/slider.php');
 ?>
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
            // echo"<div class='container-fluid' style='margin-top:70px;background-color:#faa93c;'>";
            // include('admin/dbcon.php');


            //                     $query = "SELECT *FROM articles ORDER BY article_id DESC";
            //                     $result = mysqli_query($con, $query);
            //                     $row_cnt = mysqli_num_rows($result);
            //                     for ($i=0; $i <$row_cnt ; $i++) { 
            //                     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
            //                     $id=$row['article_id'];
            //                     $img=$row['article_img'];
            //                     $title=$row['article_title'];
            //                     $body=$row['article_body'];
                                
            //                     $bodyy = substr($body,$position,1);
            //                     if($bodyy !=" "){
            //                     while($bodyy !=" "){
            //                     $j=1;
            //                     $position=$position+$j;

                               
            //                     $bodyy = substr($body,$position,1); 
            //                     }

            //                     }

            //                     $bodyy = substr($body,0,$position); 

            //                     echo "<div class='col-md-4'>";
            //                     echo "<img src='img/500x500_article/$img' alt='Image' width='600' height='400' style='width: 100%;height: auto;'>";
            //                     echo "</div>";
            //                     echo "<div class='col-md-8' style='background-color:#faa93c;'>";
            //                     echo "<p><span class='fweight-700 color-link'><h1 style='color:#5f6475;'>$title</h1></span></p>";
            //                     echo "<div class='margin-b-20'>";
            //                     echo "<p style='text-align:justify;font-size:25px;color:#fff;'>$bodyy<a  class='btn btn-info' role='button' href='full_article.php?article_link_ref=$id' style='font-size:25px;background-color: #dc8510;border-color: #f8fafb;border-width: 3px;'>Read More</a></p> ";
            //                     echo"</div>";
            //                     echo"</div>";
            //                 }
            // echo"</div>";
                    //try

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
                                echo "<div class='row' style='margin-top:30px;'>"; 
                echo "<div class='col-md-4'>";
                        echo "<img src='img/500x500/$img' alt='Image' width='600' height='400' style='width: 100%;height: auto;'>";
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