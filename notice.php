<?php
$phptitle="INGO";
?>
<?php 
include('Include/header.php');
include('Include/navbar.php');
include('Include/slider.php');
?>

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