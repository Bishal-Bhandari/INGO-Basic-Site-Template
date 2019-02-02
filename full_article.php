<?php
$phptitle="Full Article";
?>
<?php 
include('Include/header.php');
include('Include/navbar.php');
include('Include/slider.php');
 ?>
<?php
 include('admin/dbcon.php');
                      $getid=$_GET['article_link_ref'];
                      $query = "SELECT *FROM articles where article_id='$getid'";
                      $result = mysqli_query($con, $query);
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        //$id=$row['article_id'];
                        $img=$row['article_img'];
                        $title=$row['article_title'];
                        $body=$row['article_body'];

echo "<div class='container-fluid' style='margin-top:50px;background-color:#fff;'>";
echo "<div class='col-md-8'>";
echo "<p><span class='fweight-700 color-link'><h1 style='color:#5f6475;'>$title</h1></span></p>";
echo "<div style='text-align:justify;font-size:18px;color:#eb8804;'>$body</div> ";
echo"</div> ";
echo "<div class='col-md-4'>";
echo "<img src='img/500x500/$img' alt='Image' width='600' height='400' style='width: 100%;height: auto;margin-top: 30px;'> ";
echo "</div>";
echo "</div>";
?>
<!-- retrive article -->
    <!-- <div class="container-fluid" style="margin-top:0px;background-color:#faa93c;">
        <div class="col-md-8">
            <p><span class="fweight-700 color-link"><h1 style="color:#5f6475;">“Enabling Access to Early Education for Migrant Children”</h1></span></p>
                <div style="text-align:justify;font-size:18px;color:#fff;">Brick production is one of the most prominent sectors of Nepal’s economy. It is a seasonal industry and every year there is a strong migration of workers and their families from rural areas to the Kathmandu Valley seeking working opportunities that are not available in the countryside. Families travel to the brick kilns of Kathmandu Valley for the brick making season (October to May) before returning to their home villages during the off-season. The children of these families are often unable to pursue an education due to the seasonal migration, inflexible school administrations, rigid national curricula, the absence of support networks and poorly trained teachers.   
                        Previous research has shown 
                </div>                              
        </div>
        <div class="col-md-4">
        <img src="img/500x500/01.jpg" alt="Image" width="600" height="400" style="width: 100%;height: auto;">              
        </div>
    </div> -->
<!-- retrive article -->
 <?php 
 include('Include/blog_posts.php');
include('Include/footer.php');
  ?>