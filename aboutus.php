<?php 
require_once 'php/include/DB_Functions.php';
 $db = new DB_Functions();
 $Slider=$db->GetSliders();
 $Category=$db->Load_cat();
 $Features=$db->Load_features();
 $New=$db->Load_new();
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<body>

<div id="loader-wrapper">
 
  <img id="loader" src="img/loading.svg" alt="">
   <div class="loader-section section-left"></div>
   <div class="loader-section section-right"></div>
 
 </div>
  <!--==================================== Wrapper Start ===================================-->
    <div class="Wrapper">

    <?php include 'menubar2.php';?>
   

<!--  -->
<section class="section-padding ">

          <div class="container">
            <div class="row">
              <div class="col-md-12">
              <ol class="breadcrumb pl-0" style="background-color:unset">
        <li class="breadcrumb-item "><a class="text-dark" href="index.php">Home</a></li>
        <li class="breadcrumb-item text-dark active" aria-current="page">About Us</li>
      </ol>
      </nav>
              </div>
         
              <div class="col-md-6">
              
     
              <?php $db = new DB_Functions();
 $details=$db->load_web_content();
 
					$i = 1; 
          while ($row = mysqli_fetch_array($details)) { 
?>  
                 
                 <h3 class="text-dark text-uppercase">WELCOME TO <?php echo $row['shop_name'];?></h3>
                
                 <P class="text-justify">
    
            <?php echo $row['about'];?></P>
  <?php $i++;}?>
<div class="row">
  <div class="col-md-12">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Our Mission</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Our Vision</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Philosophy</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="row">
      <div class="col-md-3 col-3 pr-0">
<img src="img/category/zara1.jpg" alt="">
      </div>
      <div class="col-md-9 col-9">
        <p class="text-justify">Our Mission is to develop creativity and innovation among students by providing them with opportunities to explore different fields of study.</p>
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="row">
      <div class="col-md-3 col-3 pr-0">
<img src="img/category/zara2.jpg" alt="">
      </div>
      <div class="col-md-9 col-9">
        <p  class="text-justify">Our Vision is to foster academic excellence and help students realize their full potential.</p>
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="row">
      <div class="col-md-3 col-3 pr-0">
<img src="img/category/zara5.jpg" alt="">
      </div>
      <div class="col-md-9 col-9">
        <p  class="text-justify">Empowering individuals to realize their fullest potential and make meaningful contributions to society.</p>
        </div>
    </div>
  </div>
</div>
  </div>
</div>
           </div>
           <div class="col-md-6 d-flex flex-column justify-content-center text-center">
  <img class="rounded" src="img/other/zara_about.png" alt="">
 </div>
         </div>
       
            </div><!-- /.container -->
        </section> 
<!--        
<section id="services" class="section-padding testimonial aboutbg2  services">
      <div class="container">
      <div class="row">
        <div class="col-12 text-center">
       <h1 class="section-title mb-1">Our Teams</h1>
      
       <p class="mb-2  sub-head text-dark">YOUR STORY BEGINS HERE</p>
      </div>
      </div>
      <div class="row ">
        <div class="col-12 text-center">
        <div  class="slider">
      
    
      <div class="owl-carousel owl-theme cat">
     

            <div class="item">
        <div class="card aboutbg2   ">
          <div class="card-body p-2 border">
          <div class="circle m-auto d-flex flex-column justify-content-center">
            <img src="img/other/zara2.png" alt="">
            </div>
        
                  
                   <p class="user  text-center mt-2">Mrs. Mariamma Thomas</p>
                   <small><a href="mailto:mariamma.thomas@zarainternationalacademy.com">Email: mariamma.thomas@zarainternationalacademy.com</a></small>
                   <p>Chairman</p>
          </div>
        </div>
				 
            </div>

            
          
            <div class="item">
        <div class="card aboutbg2   ">
          <div class="card-body p-2 border">
          <div class="circle m-auto d-flex flex-column justify-content-center">
            <img src="img/other/zara1.png" alt="">
            </div>
        
                  
                   <p class="user  text-center mt-2">Dr. Nadiya Ansar </p>
                   <small><a href="mailto:dr.nadiya@zarainternationalacademy.com">Email: dr.nadiya@zarainternationalacademy.com</a></small>
                   <p>Managing Director</p>
          </div>
        </div>
				 
            </div>

            
           
            
           
      </div>
        </div>
         </div>
      </div>
</div>
  </section> -->


     
<?php include 'footer.php';?>



    </div><!-- end Wrapper -->
    
    <?php include 'script.php';?>


</body>
<!-- end Body -->

</html>
<!-- end Html -->
