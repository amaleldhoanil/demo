<?php
$db = new DB_Functions();
 $details=$db->load_web_content();
 
					$i = 1; 
          while ($row = mysqli_fetch_array($details)) { 
?>
<header class="">
     <!-- <div id="home" class="top-bar">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-12 col-md-6 d-flex">
          <ul class="social ml-0">
              
              <li class="displaynone-mob">
                <a href="<?php echo $row['fb_link'];?>"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="displaynone-mob">
                <a href="<?php echo $row['insta_link'];?>"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="displaynone-mob">
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="displaynone-mob">
                <a href="#"><i class="fa fa-youtube"></i></a>
              </li>
              
            </ul>
          </div>
          <div class="col-12 col-md-6 text-right">
          <ul class="contacth">
              
              <li class="border-right border-left displaynone-mob">
                <a href="https://goo.gl/maps/EGeMe4DnVN2tpBfu8"><i class="fa fa-home"></i>Doha, Qatar</a>
              </li>
              <li class="border-right displaynone-mob">
                <a href="mailto:<?php echo $row['shop_email'];?>"><i class="fa fa-envelope"></i><?php echo $row['shop_email'];?></a>
              </li>
              <li class="border-right">
                <a href="tel:<?php echo $row['shop_phone'];?>"><i class="fa fa-phone"></i> <?php echo $row['shop_phone'];?></a>
              </li>
           
              
            </ul>
          </div>
        </div>
      </div>
    </div> 
     -->
    <div class= "menubar menubar2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 no-padding">
              <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="index.php"><img  src ="<?php echo $row['logo'];?>" alt=""></a>
              <!-- <a class="navbar-brand logo_eng d-none d-md-block d-lg-block d-xl-block" href="index.php"><img  src ="<?php echo $row['logo'];?>" alt=""></a>
              <a class="navbar-brand logo_eng d-md-none d-lg-none d-xl-none" href="index.php"><img  src ="img/logo/dho_large.png" alt=""></a> -->
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="mob-ser"><i class="fas fa-bars m-0"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item ">
                      <a id="" class="nav-link active " href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                      <a  class="nav-link" href="aboutus.php">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="services.php">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                    <a href="tel:<?php echo $row['shop_phone'];?>" class="nav-link job" ><i class="fa-solid fa-phone"></i></a>
                    </li>
                  </ul>
                </div>
                
              </nav>
              
            </div>
          </div>
        </div>
    
      </div>
      <!-- NOTE: menu-bar end -->
  </header> 
  <?php
          $i++; 
	}
?>