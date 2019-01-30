<?php
$phptitle="Contact";
?>
<?php 
include('Include/header.php');
include('Include/navbar.php');
include('Include/slider.php');
 ?>
 <!--========== SLIDER ==========-->
        
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
       
        <hr></hr>
            
        <!-- Contact -->
        <div id="contact">
            <!-- Google Map -->
            <div class="gmap">
                <div id="map" class="map height-400"></div>
                
            </div>
            <!-- End Google Map -->
        </div>
        <!-- End Contact -->
        <!--form-->
         <div class="content-md container">
                <div class="row">
                        <div class="col-md-6">
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                           <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><h3>Address</h3></li>
                                <li class="footer-list-item">asdsdsdssdadasdas</li>
                                <li class="footer-list-item">asdsadsdsdsdasdsadas</li>
                                <li class="footer-list-item">asdsdasdsad</li>
                                <li class="footer-list-item">asdasdsadsa</li></br>
                                <li class="footer-list-item"><h3>Email</h3></li>
                                <li class="footer-list-item">sdsdsdsdsdsd</li></br>
                                <li class="footer-list-item"><h3>Phone Number</h3></li>
                                <li class="footer-list-item">sdasdsdsds</li>
                                <li class="footer-list-item">sdsdsdsadsad</li>
                                <li class="footer-list-item">sdsdsdsasad</li>
                                <li class="footer-list-item">sdsdsdsdsad</li>
                                <li class="footer-list-item">sdsdsdsdsad</li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="containerr">
                                <form action="insert_msg.php" method="Post">
                                        <input type="text" id="name" name="fname" placeholder="Name" required=""  title="Letters Only">
                                        <input type="email" id="email" name="email" placeholder="Email ID" required="" style="height: 45px;margin-bottom: 9px;width: 100%;padding-left: 18px;">
                                        <textarea id="subject" name="fmsg" placeholder="Message" style="height:200px; width: 100%;padding: 14px 20px;" required=""></textarea>
                                        <input type="submit" value="Submit" name="send_msg">
                                </form>
                            </div>
                         </div>
                 </div>
        </div>
         <!--form-->
        <!--========== END PAGE LAYOUT ==========-->

        <?php 
include('Include/footer.php');
         ?>