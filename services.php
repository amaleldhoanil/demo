<?php 
require_once 'php/include/DB_Functions.php';
 $db = new DB_Functions();
 $Slider=$db->GetSliders();
 $Category=$db->Load_cat();
 $Features=$db->Load_features();
 $New=$db->Load_new();
 $cases = array();
 $data=$db->get_data();
					$d = 1; 
          while ($rowd = mysqli_fetch_array($data)) {
            $cases[] = array(  
              1   => $rowd['cat_name'],  
              2 => $rowd['des'],
              3 => $rowd['cat_url']
          ); 
          

 $d++; 
}
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
		

  <section id="study" class="section-padding  ht">
      <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
        <h1 class="section-title">Our Courses</h1>
          <P class="sub-head">Your Story Begins Here</P>
        </div>
      </div>
      <div class="row d-flex flex-row justify-content-center">
        <!-- <div class="col-12 text-center"> -->
        <?php
					$j = 1; 
          while ($rows = mysqli_fetch_array($Category)) { ?>
        <div class=" col-6 col-md-3 p-2"> 
        
  <div class="card shadow">
  <a class="card-img-top p-0" href="servicedetails.php?sid=<?php echo $rows['id'];?>"><img class=" rounded-top " src="<?php echo $rows['cat_url'];?>" alt=""></a>
  <!-- <img class="card-img-top p-0" src="<?php echo $rows['cat_url'];?>" alt=""> -->
    
    
    <div class="card-body  rounded-bottom d-flex flex-column justify-content-center text-center position-relative bg1">

      <h5 class="card-title m-0 bg1 text-warning"><?php echo $rows['cat_name'];?></h5>
      
    </div>
  </div>
  </div>
  <?php
          $j++; 
	}
?>
  

      <!-- </div> -->
      </div>
     
</div>
  </section>
     
       

  <section id="about" class="section-padding aboutbg2 imganim">
      <div class="container">
      <div class="row">
      

  <div class="col-md-7 d-flex flex-column justify-content-center">
          <h5 class="font-weight-bold mb-md-2 mb-2 text-left"><?php echo $cases[0][1]; ?></h5>
          <P class="text-justify mb-2   ">

            <?php echo $cases[0][2]; ?></P>
            <div class="d-flex flex-row">
            
            <a href="tel:+96878112980" class="btn btn-sm btn-dark mr-2 text-warning" ><i class="fa-solid fa-phone"></i>  Call Now</a>
               
          </div>
          </div>
          <div class="col-md-5 mt-md-0 mt-3">
          <div class="card">
            <div class="card-body p-0 overflowhiden">
            <img class="rounded" src="<?php echo $cases[0][3]; ?>" alt="">
            </div>
          </div>

  </div>
</div>
    
  </div>
  </section>

    <section id="about" class="section-padding  imganim">
      <div class="container">
      <div class="row">
      <div class="col-md-5 mt-md-0 mt-3">
          <div class="card">
            <div class="card-body p-0 overflowhiden">
            <img class="rounded" src="<?php echo $cases[1][3]; ?>" alt="">
            </div>
          </div>

  </div>

  <div class="col-md-7 d-flex flex-column justify-content-center">
          <h5 class="font-weight-bold mb-md-2 mb-2 mt-3 text-left"><?php echo $cases[1][1]; ?></h5>
          <P class="text-justify mb-2   ">

            <?php echo $cases[0][2]; ?></P>
            <div class="d-flex flex-row">
            
            <a href="tel:+96878112980" class="btn btn-sm btn-dark mr-2 text-warning" ><i class="fa-solid fa-phone"></i>  Call Now</a>
               
          </div>
          </div>
         
</div>
    
  </div>
  </section>
  <section id="about" class="section-padding aboutbg2 imganim">
      <div class="container">
      <div class="row">
      

  <div class="col-md-7 d-flex flex-column justify-content-center">
          <h5 class="font-weight-bold mb-md-2 mb-2 text-left"><?php echo $cases[2][1]; ?></h5>
          <P class="text-justify mb-2   ">

            <?php echo $cases[2][2]; ?></P>
            <div class="d-flex flex-row">
            
            <a href="tel:+96878112980" class="btn btn-sm btn-dark mr-2 text-warning" ><i class="fa-solid fa-phone"></i>  Call Now</a>
               
          </div>
          </div>
          <div class="col-md-5 mt-md-0 mt-3">
          <div class="card">
            <div class="card-body p-0 overflowhiden">
            <img class="rounded" src="<?php echo $cases[2][3]; ?>" alt="">
            </div>
          </div>

  </div>
</div>
    
  </div>
  </section>

    <section id="about" class="section-padding  imganim">
      <div class="container">
      <div class="row">
      <div class="col-md-5 mt-md-0 mt-3">
          <div class="card">
            <div class="card-body p-0 overflowhiden">
            <img class="rounded" src="<?php echo $cases[3][3]; ?>" alt="">
            </div>
          </div>

  </div>

  <div class="col-md-7 d-flex flex-column justify-content-center">
          <h5 class="font-weight-bold mb-md-2 mb-2 mt-3 text-left"><?php echo $cases[3][1]; ?></h5>
          <P class="text-justify mb-2   ">

            <?php echo $cases[3][2]; ?></P>
            <div class="d-flex flex-row">
            
            <a href="tel:+96878112980" class="btn btn-sm btn-dark mr-2 text-warning" ><i class="fa-solid fa-phone"></i>  Call Now</a>
               
          </div>
          </div>
         
</div>
    
  </div>
  </section>

  <section id="about" class="section-padding aboutbg2 imganim">
      <div class="container">
      <div class="row">
      

  <div class="col-md-7 d-flex flex-column justify-content-center">
          <h5 class="font-weight-bold mb-md-2 mb-2 text-left"><?php echo $cases[4][1]; ?></h5>
          <P class="text-justify mb-2   ">

            <?php echo $cases[4][2]; ?></P>
            <div class="d-flex flex-row">
            
            <a href="tel:+96878112980" class="btn btn-sm btn-dark mr-2 text-warning" ><i class="fa-solid fa-phone"></i>  Call Now</a>
               
          </div>
          </div>
          <div class="col-md-5 mt-md-0 mt-3">
          <div class="card">
            <div class="card-body p-0 overflowhiden">
            <img class="rounded" src="<?php echo $cases[4][3]; ?>" alt="">
            </div>
          </div>

  </div>
</div>
    
  </div>
  </section>

    <section id="about" class="section-padding  imganim">
      <div class="container">
      <div class="row">
      <div class="col-md-5 mt-md-0 mt-3">
          <div class="card">
            <div class="card-body p-0 overflowhiden">
            <img class="rounded" src="<?php echo $cases[5][3]; ?>" alt="">
            </div>
          </div>

  </div>

  <div class="col-md-7 d-flex flex-column justify-content-center">
          <h5 class="font-weight-bold mb-md-2 mb-2 mt-3 text-left"><?php echo $cases[5][1]; ?></h5>
          <P class="text-justify mb-2   ">

            <?php echo $cases[5][2]; ?></P>
            <div class="d-flex flex-row">
            
            <a href="tel:+96878112980" class="btn btn-sm btn-dark mr-2 text-warning" ><i class="fa-solid fa-phone"></i>  Call Now</a>
               
          </div>
          </div>
         
</div>
    
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
