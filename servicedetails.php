<?php 
require_once 'php/include/DB_Functions.php';
 $db = new DB_Functions();
 $Slider=$db->GetSliders();
 $Category=$db->Load_cat();
 $Features=$db->Load_features();
 $New=$db->Load_new();
 $sid=$_GET['sid'];
 $cat_products=$db->get_cat_products($sid);
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
              <div class="col-md-12">
              <ol class="breadcrumb pl-0" style="background-color:unset">
        <li class="breadcrumb-item "><a class="text-dark" href="index.php">Home</a></li>
        <li class="breadcrumb-item text-dark active" aria-current="page">Service Details</li>
      </ol>
      </nav>
              </div>
         
              <div class="col-md-12">
                
                 <P class="text-left">
         <?php $db = new DB_Functions();
 $details=$db->load_ser_details($sid);
 
					$i = 1; 
          while ($row = mysqli_fetch_array($details)) { 
?>
<div class="row">
            <div class="col-md-5 d-flex flex-column justify-content-center text-center">
            <div class="card ">
            <div class="card-body p-0 overflowhiden">
            <img src="<?php echo $row['cat_url']; ?>" alt="">
            </div>
          </div>

 </div>
  <div class="col-md-7 d-flex flex-column justify-content-center pt-md-0 pt-3">
  <h3 class="font-weight-bold mb-md-2 mb-2 text-left"><?php echo $row['cat_name']; ?></h3>
  <P class="text-left mb-2    "><?php echo $row['des']; ?></P>
  <div class="d-flex flex-row">
           
            <a href="tel:+96878112980" class="btn btn-sm btn-dark mr-2 text-warning" ><i class="fa-solid fa-phone"></i>  Call Now</a>
           
          </div>

          </div>
          </div>
  <?php $i++;}?>

           </div>
         
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
