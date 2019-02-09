<?php
$position=100;
            echo"<div class='container content-lg' style='padding-top: 70px;'>";
                echo"<div class='row text-center margin-b-40'>";
                    echo"<div class='col-sm-6 col-sm-offset-3'>";
                        echo"<h2>Latest Articals</h2>";
                        echo"<p>Our latest articals by our member on the social issues that will take our society to new direction.</p>";
                    echo"</div>";
                echo"</div>";
               // end row -->

                echo"<div class='row'>";
                    //<!-- Latest Products -->
                         
                            include('admin/dbcon.php');


                                $query = "SELECT *FROM blog_post ORDER BY blog_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <$row_cnt ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['blog_id'];
                                $img=$row['blog_img'];
                                $title=$row['blog_title'];
                                $writer=$row['blog_writer'];
                                $short_post=$row['blog_short_des'];
                                //$long=$row['blog_long_des'];

                                $short = substr($short_post,$position,1);
                                if($short !=" "){
                                while($short !=" "){
                                $j=1;
                                $position=$position+$j;

                               
                                $short = substr($short_post,$position,1); 
                                }

                                }

                                $short = substr($short_post,0,$position); 

                                        $img=str_replace("../"," ","$img");

                    echo"<div class='col-sm-4 sm-margin-b-50' style='margin-top: 10px;'>";
                        echo"<div class='margin-b-20'>";
                            echo"<img class='img-responsive wow fadeIn' src='$img' alt='Artical Image' data-wow-duration='.3' data-wow-delay='.1s'>";
                        echo"</div>";
                        echo"<h4><a href='full_blog.php?blog_link_ref=$id'>$title</a> <br><span class='text-uppercase margin-l-20' style='color: #224765;'>$writer</span></h4>";
                        echo"<p style='color:##8c5710 !important;'>$short</p>";
                        echo"<a class='link' href='full_blog.php?blog_link_ref=$id'>Read More</a>";
                    echo"</div>";
                    //<!-- End Latest Products -->
                }
                echo"</div>";
               // end row -->
            echo"</div>";
?>