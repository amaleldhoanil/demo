<?php 
require_once 'php/include/DB_Functions.php';
 $db = new DB_Functions();
 $Slider=$db->GetSliders();
 $Category=$db->Load_cat();
 $Features=$db->Load_features();
 $New=$db->Load_new();
 $pid=$_GET['pid'];

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
<section class="section-padding imganim">

          <div class="container">
            <div class="row">
              <div class="col-md-12 ">
              <ol class="breadcrumb pl-0" style="background-color:unset">
        <li class="breadcrumb-item "><a class="text-dark" href="index.php">Home</a></li>
        <li class="breadcrumb-item text-dark active" aria-current="page">Project Details</li>
      </ol>
      </nav>
              </div>
         
              <div class="col-md-12">
                
                 <P class="text-left">
         <?php $db = new DB_Functions();
 $details=$db->load_pdt_details($pid);
 
					$i = 1; 
          while ($row = mysqli_fetch_array($details)) { 
?>
<div class="row">
  <div class="col-md-12 text-center">
  <h3 class="font-weight-bold mb-md-3 mb-3 "><?php echo $row['slide_name']; ?></h3>
  </div>
            <div class="col-md-12 d-flex flex-column justify-content-center ">
            <div class="card ">
            <!-- <div class="card-body p-0 overflowhiden">
              
            <img src="<?php echo $row['slide_url']; ?>" alt="">
            </div> -->

            <div class="card-body position-relative p-0 ">
                          <div class="row">
                            
                            <div class="col-md-8 col-12 pr-md-0">
                                <div class="main_image" style="background-image: url(<?php echo $row['slide_url']; ?>);">
                                </div>
                                
                               
                            </div>
                            <div class="col-md-4 col-12 pl-md-0 sub_img_main">
                            <div class="card border-0" >
  <div class="card-body bg1 border-0">
    <h3 class=" text-white">Project Info</h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="row">
                  <div class="col-md-1 pr-0">
                  <i class="fa-solid fa-sink text-white"></i>
                  </div>
                  <div class="col-md-11">
                  <h5 class="text-white mb-1"> Title :</h5>
                  <p class="card-text text-white"><?php echo $row['tname']; ?></p>
                  </div>
                </div>
                
              </li>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-md-1 pr-0">
                  <i class="fa-solid fa-user text-white"></i>
                  </div>
                  <div class="col-md-11">
                  <h5 class="text-white mb-1"> Customer :</h5>
                  <p class="card-text text-white"><?php echo $row['cname']; ?></p>
                  </div>
                </div>
                
              </li>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-md-1 pr-0">
                  <i class="fa-solid fa-diagram-project text-white"></i>
                  </div>
                  <div class="col-md-11">
                  <h5 class="text-white mb-1"> Category  :</h5>
                  <p class="card-text text-white"><?php echo $row['cat']; ?></p>
                  </div>
                </div>
                
              </li>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-md-1 pr-0">
                  <i class="fa-solid fa-calendar-days text-white"></i>
                  </div>
                  <div class="col-md-11">
                  <h5 class="text-white mb-1"> Date Post :</h5>
                  <p class="card-text text-white"><?php echo $row['date']; ?></p>
                  </div>
                </div>
                
              </li>
            </ul>
  </div>
</div>
                            </div>
                          </div>
                                              
                                         </div>
          </div>

 </div>

 


  <div class="col-md-12 d-flex flex-column justify-content-center mt-md-3 mt-3">
  <h3 class="font-weight-bold mb-md-3 mb-3 ">The Back Story</h3>
  <P class="text-left mb-2    "><?php echo $row['des']; ?></P>
  <div class="d-flex flex-row">
           
            <a href="tel:+96878112980" class="btn btn-sm btn-outline-danger mr-2" ><i class="fa-solid fa-phone"></i>  Call Now</a>
           
          </div>

          </div>
          </div>
        
          
  <?php $i++;}?>

          
         
         </div>
  
       </div>
        </section>     
       

     
<?php include 'footer.php';?>



    </div><!-- end Wrapper -->
    
    <?php include 'script.php';?>


</body>
<!-- end Body -->

</html>
<!-- end Html -->
