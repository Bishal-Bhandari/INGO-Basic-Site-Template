<?php
$phptitle="Notice";
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
                    <h2 style="color: #905e1b">Notice</h2>
                    <p style="color: #ea8804">The latest notice,<br>
                        As below </p>
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
$position=100;
echo"<div class='content-md container' style='padding-bottom: 0px;    padding-top: 125px;'>";
            echo"<div class='row'>";
                echo"<div class='col-sm-9'>";
                    echo"<h2>Customer Reviews</h2>";
                    include('admin/dbcon.php');


                                $query = "SELECT *FROM notice ORDER BY notice_id DESC LIMIT 6";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['notice_id'];
                                $content=$row['notice_content'];
                                $link=$row['notice_link'];
                                    $link=str_replace("../"," ","$link");
                    echo"<div class='swiper-slider swiper-testimonials'>";
                        echo"<div class='swiper-wrapper'>";
                            echo"<div class='swiper-slide'>";
                                echo"<blockquote class='blockquote' style='color: #000'>";
                                    echo"<div class='margin-b-20'>";
                                       echo"$content";
                                    echo"</div>";
                                    if($link!=NULL)
                                    {
                                    echo"<a class='link' href='$link' target='_blank'>Read More</a>";
                                	}
                                 echo"</blockquote>";
                             echo"</div>"; 
                          echo"<div class='swiper-testimonials-pagination'>";
                         echo"</div>";
                     echo"</div>";
                  echo"</div>";echo"<hr>";}
                echo"</div>";
                echo"<div class='col-sm-3' style=' margin-top:50px;'>";
                	include('admin/dbcon.php');


                                $query = "SELECT *FROM blog_post ORDER BY blog_id DESC LIMIT 6";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $idd=$row['blog_id'];
                                $title=$row['blog_title'];
                               

                                // $short = substr($title,$position,1);
                                // if($short !=" "){
                                // while($short !=" "){
                                // $j=1;
                                // $position=$position+$j;

                               
                                // $short = substr($title,$position,1); 
                                // }

                                // }

                                // $short = substr($title,0,$position); 

								echo"<a class='link' href='full_blog.php?blog_link_ref=$idd'>$title</a>";
                              
                                echo"<hr>";
                            }
                echo"</div>";
             echo"</div>";
         echo"</div>";
        ?>
 <?php 
include('Include/footer.php');
         ?>