 <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="index.php">Home</a></li>
                                <li class="footer-list-item"><a href="who_we_are.php">About</a></li>
                                <li class="footer-list-item"><a href="what_we_do.php">Work</a></li>
                                <li class="footer-list-item"><a href="contact.php">Contact</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                             <a href="#" class="fa fa-facebook"></a>
                              <a href="#" class="fa fa-twitter"></a>
                              <a href="#" class="fa fa-linkedin"></a>
                              <a href="#" class="fa fa-youtube"></a>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>
                                <li class="footer-list-item"><a href="donate.php">Donate</a></li>
                                <li class="footer-list-item"><a href="what_we_do.php">Articles</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-md-3">
<h2>Blogs</h2>
                            <?php
                            $position=100;
                                     include('admin/dbcon.php');


                                $query = "SELECT *FROM blog_post ORDER BY blog_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <2 ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['blog_id'];
                                $title=$row['blog_title'];
                                $writer=$row['blog_writer'];
                                $short_post=$row['blog_short_des'];

                                $short = substr($short_post,$position,1);
                                if($short !=" "){
                                while($short !=" "){
                                $j=1;
                                $position=$position+$j;

                               
                                $short = substr($short_post,$position,1); 
                                }

                                }

                                $short = substr($short_post,0,$position); 

                    echo"<div class='col-sm-4 sm-margin-b-50' style='margin-top: 10px;width:100%'>";
                        echo"<h4><a href='full_blog.php?blog_link_ref=$id'>$title</a> <br><span class='text-uppercase margin-l-20' style='color: #224765;'>$writer</span></h4>";
                        echo"<p>$short</p>";
                        echo"<a class='link' href='full_blog.php?blog_link_ref=$id'>Read More</a>";
                    echo"</div>";
                    //<!-- End Latest Products -->
                }
                            ?>
                        </div>
                        <div class="col-md-3">
                            <h2>Tweets</h2>
                            <div class="first-article">
                                <p>RT @TomDannatt: @streetchilduk + @streetchildnp so delighted to be part of this - with our 3-year project for girls of the Musahar caste, w…</p>
                            <a href="https://twitter.com/streetchildnp">
                            <i class="fa fa-twitter fa-2x" aria-hidden="true"><span class="twitter" style="font-family: 'Libre Franklin';font-weight: 400; font-size:25px;padding-left: 10px;color:#faa93c;">@streetchildnp</span></i></a><br>
                            <bold>15 weeks ago</bold>
                            </div>
                            <div class="first-article">
                                <p>RT @TomDannatt: @streetchilduk + @streetchildnp so delighted to be part of this - with our 3-year project for girls of the Musahar caste, w…</p>
                            <a href="https://twitter.com/streetchildnp">
                            <i class="fa fa-twitter fa-2x" aria-hidden="true"><span class="twitter" style="font-family: 'Libre Franklin';font-weight: 400; font-size:25px;padding-left: 10px;color:#faa93c;">@streetchildnp</span></i></a><br>
                            <bold>15 weeks ago</bold>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container" style="padding-bottom: 0px;">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logox.png" alt="Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="http://shaikshikchetana.org.np">Copyright © Shaikshik Chetana Nepal 2019</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->
        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top" style="float: left;">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/maginific-popup.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/gmap.min.js" type="text/javascript"></script>

        <!--gallery-->
        <script src="js/fresco/fresco.js"></script>
        
    </body>
    <!-- END BODY -->
</html>