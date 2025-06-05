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
    
    
    <?php include 'menubar.php';?>
		

    
    <div  class="slider square">
      
    
      <div class="owl-carousel owl-theme owl-slider ">

         
       
          
          <?php
					$i = 1; 
          while ($row = mysqli_fetch_array($Slider)) { ?>
          <div class="item">
            <img src=<?php echo $row['slide_url'];?> alt="">
            <div class="main_slide_head ">
      <div class="card rounded-0 ">
          <div class="card-body  text-left ">
          
            <div class="mb-md-2 mt-md-2 mb-2 mt-2  text-left"><?php echo $row['slide_name'];?></div>
            <button class="btn btn-sm btn-warning "><a class="text-dark" href="contact.php">Contact Us</a></button>
          </div>
        </div>
      </div>
          </div>
        <?php
          $i++; 
	}
?>
         
                  </div>
                 
        </div>

       

      


        <section id="about" class="section-padding aboutbg2">
      <div class="container">
      <div class="row">
      <div class="col-md-6 d-flex flex-column justify-content-center pt-md-0">
  <?php $db = new DB_Functions();
 $details=$db->load_web_content();
 
					$i = 1; 
          while ($row = mysqli_fetch_array($details)) { 
?>  
<p class="mb-2">YOUR STORY BEGINS HERE</p>
  <h3 class="font-weight-bold mb-md-2 mb-2 text-left">ZARA INTERNATIONAL ACADEMY</h3>
  <P class="text-justify mb-2 "><?php echo $row['about'];?></P>
  <?php $i++;}?>
            <!-- <a href="aboutus.php"><button type="button" class="btn btn-sm btn-outline-danger">Read More <i class="fa-solid fa-arrow-right-long"></i></button></a> -->
           <p class="mb-2 text-secondary font-weight-bold">Batch Completed <small class="float-right">100%</small></p>
            <div class="progress mb-3" style="height: 5px;">
  <div class="progress-bar bg-warning " role="progressbar" style="width: 100%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p class="mb-2 text-secondary font-weight-bold">Qualified Staffs <small class="float-right">99%</small></p>
<div class="progress mb-3" style="height: 5px;">
  <div class="progress-bar bg-warning " role="progressbar" style="width: 99%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p class="mb-2 text-secondary font-weight-bold">Award Wins <small class="float-right">90%</small></p>
<div class="progress mb-3" style="height: 5px;">
  <div class="progress-bar bg-warning " role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
</div>
          </div>
      <div class="col-md-6 d-flex flex-column justify-content-center text-center">
  <img class="rounded" src="img/other/zara_about.png" alt="">
 </div>

          
  </div>
</div>
</section>


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
     
  <section id="study" class="section-padding  ht">
      <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="section-title">ZARA INTERNATIONAL ACADEMY</h1>
          <P class="sub-head">Your Story Begins Here</P>
        </div>
      </div>
      <div class="row ">
          <div class="col-md-12 text-center">
            <img src="img/other/map.png" alt="">
          </div>
      </div>
     
</div>
  </section>
     
  <section class="section-padding ">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-3 col-3 ">
                  <div class="counter">
                    <div class="row">
                      <div class="col-md-3 pr-0 d-flex flex-column justify-content-center">
                      <img src="img/icons/teacher.png" alt="">
                      </div>
                      <div class="col-md-9 text-left">
                      <h2 class='numscroller text-black d-inline-block' data-min='1' data-max='10' data-delay='1' data-increment='1'>0</h2> 
                          <div class="counter-head">
                            <h5 class="m-0 text-black">Staffs</h5> 
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-3">
                  <div class="counter"> 
                  <div class="row">
                      <div class="col-md-3 pr-0 d-flex flex-column justify-content-center">
                      <img src="img/icons/books-stack-of-three.png" alt="">
                      </div>
                      <div class="col-md-9 text-left">
                      <h2 class='numscroller text-black d-inline-block' data-min='1' data-max='30' data-delay='1' data-increment='1'>0</h2> 
                          <div class="counter-head">
                            <h5 class="m-0 text-black">Courses</h5> 
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-3">
                  <div class="counter">
                  <div class="row">
                      <div class="col-md-3 pr-0 d-flex flex-column justify-content-center">
                      <img src="img/icons/student.png" alt="">
                      </div>
                      <div class="col-md-9 text-left">
                      <h2 class='numscroller text-black d-inline-block' data-min='1' data-max='726' data-delay='1' data-increment='1'>0</h2> 
                          <div class="counter-head">
                            <h5 class="m-0 text-black">Satisfied Students</h5> 
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-3">
                  <div class="counter">
                  <div class="row">
                      <div class="col-md-3 pr-0 d-flex flex-column justify-content-center">
                      <img src="img/icons/school.png" alt="">
                      </div>
                      <div class="col-md-9 text-left">
                      <h2 class='numscroller text-black d-inline-block' data-min='1' data-max='2' data-delay='1' data-increment='1'>0</h2> 
                          <div class="counter-head">
                            <h5 class="m-0 text-black">Years industry</h5> 
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

       
        <section id="about" class="section-padding aboutbg2 imganim">
      <div class="container">
      <div class="row">
      

  <div class="col-md-7 d-flex flex-column justify-content-center">
          <h5 class="font-weight-bold mb-md-2 mb-2 text-left"><?php echo $cases[0][1]; ?></h5>
          <P class="text-justify mb-2   "><?php echo $cases[0][2]; ?></P>
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
              
<section id="services" class="section-padding testimonial aboutbg2  services">
      <div class="container">
      <div class="row">
        <div class="col-12 text-center">
       <h1 class="section-title mb-1">Testimonials</h1>
      
       <p class="mb-2  sub-head text-dark">What Students Say?</p>
      </div>
      </div>
      <div class="row ">
        <div class="col-12 text-center">
        <div  class="slider">
      
    
      <div class="owl-carousel owl-theme owl-rating">
     

            <div class="item">
        <div class="card aboutbg2  border-0 ">
          <div class="card-body ">
          <div class="circle m-auto d-flex flex-column justify-content-center">
            <img src="img/review/r1.png" alt="">
            </div>
          <p class="review text-center">It was a good experience . I got good training from excellent trainers.Especially soft skill training helped me to improve my language and become more confident.</p>
                   <div class="star text-center">
                    <span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
                   
                  </div>
                   <p class="user  text-center mt-2">JOMON</p>
                   <small>Oman</small>
          </div>
        </div>
				 
            </div>

            
            <div class="item">
        <div class="card aboutbg2 border-0  ">
          <div class="card-body  ">
          <div class="circle m-auto d-flex flex-column justify-content-center">
            <img src="img/review/r1.png" alt="">
            </div>
          <p class="review  text-center">Training session were very useful. Especially the way of teaching. Trainers are well experienced and supportive.</p>
                   <div class="star text-center">
                    <span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
					<span><i class="fa fa-star"></i></span>
                   
                  </div>
                   <p class="user  text-center mt-2">MAGESH</p>
                   <small>Oman</small>
          </div>
        </div>
				 
            </div>
            

            
           
            
           
      </div>
        </div>
         </div>
      </div>
</div>
  </section>




  <section>
 <div class="container-fluid">


 <div class="row ">
        <div class="col-md-7 p-0">
        <?php 



 $details=$db->load_web_content();
 
					$i = 1; 
          while ($row = mysqli_fetch_array($details)) { 
?>
        <iframe src="<?php echo $row['map_link'];?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <?php 
$i++;} ?>

        </div>
        <div class="col-md-5 p-0">
          
        <form id="contact-form" class="pt-4 pb-4 pl-3 pl-md-5 pr-md-5 pr-3 border border-warning bg2 needs-validation" novalidate>
        <h4 class="mb-3 text-white"><span class="text-warning">Contact</span> US</h4>
        <div class="form-row">
                            <div class="form-group col-12">
                                <input required class="form-control " type="text" id="name"  placeholder="Name" >
                                
                            </div>
                            <div class="form-group col-12 col-md-6 ">
                                    <input required class="form-control" type="email"  id="email" placeholder="Email"  >
                                    
                                </div>
                                <div class="form-group col-12 col-md-6 ">
                                    <input required class="form-control user_mobile" type="text"  id="phone"  placeholder="Contact Number" >
                                </div>
                            </div>
                            
                      
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <textarea class="form-control rounded" id="msg"  cols="30" rows="5" placeholder="Message"  ></textarea>
                            </div>
                              </div> 
  <div class="form-group text-center">
  <button type="submit" class="btn btn-cstm">Submit</button>
  </div>
  
</form>
        </div>
      </div>
      </div>
         </section>

<!-- The actual snackbar -->
<div id="snackbar">Please Wait...</div>

 
<?php include 'footer.php';?>


    </div><!-- end Wrapper -->
    
    <?php include 'script.php';?>


</body>
<!-- end Body -->

</html>
<!-- end Html -->
