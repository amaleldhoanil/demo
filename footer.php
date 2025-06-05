<?php
$db = new DB_Functions();
 $details=$db->load_web_content();
 
					$i = 1; 
          while ($row = mysqli_fetch_array($details)) { 
?>
<footer class="footer1 "> 
  <div class="container">
    <div class="row">
    <div class="col-md-4 col-12 m-md-0 mt-2 mb-3">
     
        <h6><b>Head Office (OMAN)</b></h6>
        <ul>
        <li><p class="m-0"><i class="fas fa-map-marker-alt"></i><?php echo $row['shop_address'];?></p></li>
        <li><p class="m-0"><a href="mailto:<?php echo $row['shop_email'];?>"><i class="fas fa-envelope"></i> <?php echo $row['shop_email'];?></a> </p></li>
        <li><p class="m-0"><a href="tel:+96878112980"><i class="fas fa-phone-alt"></i> +968 9292 9530</a> </p></li>
        <li><p class="m-0"><a href="tel:+96878112980"><i class="fas fa-phone-alt"></i> +968 7811 2980</a> </p></li>
        <li><p class="m-0"><a href="tel:+96876786966"><i class="fas fa-phone-alt"></i> +968 7678 6966</a> </p></li>
      
      </ul>

     
      </div>
      <div class="col-md-4 col-12  mt-2">
     
     <h6><b>INDIA</b></h6>
     <ul>
     
     <li><p class="m-0"><i class="fas fa-map-marker-alt"></i>EduVibes International LLP, <br> TC-68/1996, 2nd Floor, Dev Plaza, Kamaleshwaram, Manacaud P.O
Kerala,Thiruvananthapuram,India<br> <a href="https://eduvibesinternational.com/"><i class="fas fa-solid fa-globe"></i> wwww.eduvibesinternational.com </a></p></li>
    
<li><p class="m-0"><a href="mailto:info@eduvibesinternational.com"><i class="fas fa-envelope"></i> info@eduvibesinternational.com</a> </p></li>
        <li><p class="m-0"><a href="tel:+919048840653"><i class="fas fa-phone-alt"></i> +91 9048840653</a> </p></li>
        <li><p class="m-0"><a href="tel:+917510178902"><i class="fas fa-phone-alt"></i> +91 7510178902</a> </p></li>
   
   </ul>
   </div>
      <div class="col-md-2 col-12 m-md-0 mb-3">
        <h6><b>Quick Links</b></h6>
        <ul>
        
        <li class="pb-2"><a href="index.php" >Home</a></li>
        <li class="pb-2"><a href="aboutus.php" >About Us</a></li>
        <li class="pb-2"><a href="services.php" >Services</a></li>
        <li class=""><a href="contact.php" >Contact</a></li>

        
      
      </ul>
      </div>
      <div class="col-md-2 col-12 m-md-0 mb-3">
        <h6><b>Social</b></h6>
        <ul>
        
        <li class="pb-2"><a href="<?php echo $row['fb_link'];?>" ><i class="fab fa-facebook fb"></i>Facebook</a></li>
        <li class=""><a href="<?php echo $row['insta_link'];?>" ><i class="fab fa-instagram in"></i>Instagram</a></li>
        <!-- <li class=""><a href="#" ><i class="fab fa-twitter tw"></i>Twitter</a></li> -->
        <!-- <li class=""><a href="<?php echo $row['y_link'];?>" ><i class="fab fa-youtube yb"></i>Youtube</a></li>  -->
          
        
        
      
      </ul>
      </div>
      
      
      

  
     
  

  
    </div>
  </div>
</footer>
<footer class="footer2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><a href="#">Zara International Academy All Rights Reserved</a></p>
        </div>
      </div>
    </div>
  </footer>



<a href="https://api.whatsapp.com/send?phone=96876786966&amp;forceIntent=true&amp;load=loadInIOSExternalSafari" target="_blank">
  <div class="whatsapp">
    <img src="img/logo/whatsapp.png" alt="">
  </div>
</a>

<!-- <div  data-target="#calc" data-toggle="modal">
  <div class="calc d-flex flex-column justify-content-center bg-black">
    <h5 class="m-0 pt-2 pb-2 pl-3 pr-3 text-white"> <i class="fa-solid fa-calculator pr-1"></i>  Tile Calculator</h5>
  
  </div>
</div> -->

<div class="menu-top text-center">
  <div class="menu">
    <img src="img/menu.png" alt="">
    
  </div>
  <h6 class="mt-1 font-weight-bold">Menu</h6>
</div>

<?php
          $i++; 
	}
?>




<!-- <div class="modal fade" id="calc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">Find How Many Tiles You Need</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="tcalc needs-validation" novalidate>
  <div class="form-row justify-content-center">
    <div class="form-group col-5 col-md-2">
      <label for="">Area Length</label> 
      <input type="number" class="form-control form-control-lg zeroval" placeholder=" Feet" name="al" required>
    </div>
    <div class="p-2 d-flex flex-column justify-content-center">
      <b>*</b>
    </div>
    <div class="form-group col-5 col-md-2">
      <label for="">Area Width</label>
      <input type="number" class="form-control form-control-lg zeroval" placeholder=" Feet" name="aw" required>
    </div>
    <div class="form-group col-5 col-md-2 ">
      <label for="">Tile Length</label>
      <input type="number" class="form-control form-control-lg zeroval" placeholder=" Feet" name="tl" required>
    </div>
    <div class="p-2 d-flex flex-column justify-content-center">
      <b>*</b>
    </div>
    <div class="form-group col-5 col-md-2">
      <label for="">Tile Width</label>
      <input type="number" class="form-control form-control-lg zeroval" placeholder=" Feet" name="tw" required>
    </div>
    <div class="form-group col-12 text-center">
    <button type="submit" class="btn btn-dark">Calculate</button>
    </div>
  </div>
  <div class="form-group col-12 text-center">
  <span class="ans"></span>
    </div>
</form>

     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div> -->