<?php
echo"<div class='section' id='section-6'>";
               echo"<div class='container-fluid wow fadeIn' data-wow-duration='1.75s' data-wow-offset='20'>";
               
                  include('admin/dbcon.php');


                                $query = "SELECT *FROM gallery_img ORDER BY img_id DESC";
                                $result = mysqli_query($con, $query);
                                $row_cnt = mysqli_num_rows($result);
                                for ($i=0; $i <6 ; $i++) { 
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                 
                                $id=$row['img_id'];
                                $src=$row['img_src'];
                                $alt=$row['img_alt'];
                                //$Sid=$row['img_sec_id'];
$src=str_replace("../","./","$src");
                echo"<div class='col-md-4'>";
                echo"<a href='$src' class='fresco' data-fresco-group='example' ><img src='$src' alt='$alt' style='height:293px;' title='$alt'></a>";
                echo"</div>";
              }
            echo"</div>";
    echo"</div>";
    ?>