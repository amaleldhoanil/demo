<?php 
require_once 'php/include/DB_Functions.php';
 $db = new DB_Functions();
 $Slider=$db->GetSliders();
 $Category=$db->getGallery();
 $Features=$db->Load_features();
 $New=$db->Load_new();
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<body>
<!-- <a href="https://api.whatsapp.com/send?phone=918089092009&forceIntent=true&load=loadInIOSExternalSafari" target="_blank">
  <div class="whatsapp">
    <img src="img/logo/whatsapp.png" alt="">
  </div>
</a> -->
<div id="loader-wrapper">
  <img id="loader" src="img/loading.svg" alt="">
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>

</div>
  <!--==================================== Wrapper Start ===================================-->
    <div class="Wrapper">
    
    
    <?php include 'menubar2.php';?>
		

    










     




        <section id="study" class="section-padding   ">
      <div class="container-fluid">
      <div class="row ">
        <div class="col-12 text-center">
        <h1 class="section-title mb-1">Gallery</h1>
        <p class="sub-head">“YOUR STORY BEGINS HERE”</p>
        </div>
      </div>
      <div class="row">
   
        <!-- <div class="col-12 text-center"> -->
        <?php
					$j = 1; 
          while ($rows = mysqli_fetch_array($Category)) { ?>
       
        <div class=" col-6 col-md-3 p-2"> 
        
  <div class="card h-100">
  <a class="card-img-top p-0" href="#"><img src="<?php echo $rows['slide_url'];?>" alt=""></a>
  <!-- <img class="card-img-top p-0" src="<?php echo $rows['cat_url'];?>" alt=""> -->
     
  <!-- <div class="card-body text-center position-relative bg1">

<h5 class="card-title m-0 bg1 text-dark"><?php echo $rows['slide_name'];?></h5>

</div> -->
    
   
  </div>
  </div>
 
  <?php
          $j++; 
	}
?>
   </div>

      <!-- </div> -->
     

      
</div>
  </section>
   



<!-- The actual snackbar -->
<div id="snackbar">Some text some message..</div>

 
<?php include 'footer.php';?>


    </div><!-- end Wrapper -->
    
    <?php include 'script.php';?>


</body>
<!-- end Body -->

</html>
<!-- end Html -->
