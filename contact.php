
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

  

<section class="section-padding contact">
   
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <nav aria-label="breadcrumb ">
      <ol class="breadcrumb pl-0">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
      </ol>
      </nav>
                    

                </div>
                
                <div class="col-md-8 ">
                    <div class="card border-warning">
                        <div class="card-header border-warning">
                            <h5 class="m-0">SEND US A MESSAGE!</h5>
                        </div>
                        <div class="card-body">
                        <form class="needs-validation" id="contact-form" novalidate autocomplete="off">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <input required class="form-control " type="text" id="name"  placeholder="Name" required>
                                
                            </div>
                            <div class="form-group col-12">
                                    <input required class="form-control" type="email"  id="email" placeholder="Email"  required>
                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <input required class="form-control user_mobile" type="text"  id="phone"  placeholder="Contact Number" required>
                                </div>
                            </div>
                                
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <textarea class="form-control rounded" id="msg"  cols="30" rows="5" placeholder="Message"  ></textarea>
                            </div>
                              </div> 
                            
                                
                        <button type="submit"  class="btn btn-cstm">Send</button>
                        
                    </form>
                        </div>
                    </div>
                 
                </div>
                <?php $db = new DB_Functions();
 $details=$db->load_web_content();
 
					$i = 1; 
          while ($row = mysqli_fetch_array($details)) { 
?>
              <div class="col-md-4">
                    <div class="card border-warning mb-2">
                        <div class="card-header border-warning">
                            <h5 class="m-0"><i class="fa fa-map-marked-alt"></i> Head Office (OMAN) </h5>
                        </div>
                        <div class="card-body">
                          <p class="card-text">
                        <i class="fas fa-map-marker-alt"></i><?php echo $row['shop_address'];?> <br>
       <a href="mailto:<?php echo $row['shop_email'];?>"><i class="fas fa-envelope"></i> <?php echo $row['shop_email'];?></a> <br>
     <a href="tel:+96892929530"><i class="fas fa-phone-alt"></i> +968 9292 9530</a> <br>
       <a href="tel:+96878112980"><i class="fas fa-phone-alt"></i> +968 7811 2980</a> </p>
       <a href="tel:+96876786966"><i class="fas fa-phone-alt"></i> +968 7678 6966</a> </p>
                        </div>
                    </div>
                   
                    <div class="card border-warning mb-2">
                        <div class="card-header border-warning">
                            <h5 class="m-0"><i class="fa fa-map-marked-alt"></i> INDIA </h5>
                        </div>
                        <div class="card-body">
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> EduVibes International LLP, <br> TC-68/1996, 2nd Floor, Dev Plaza, Kamaleshwaram, Manacaud P.O
Kerala,Thiruvananthapuram,India<br> <a href="https://eduvibesinternational.com/"><i class="fas fa-solid fa-globe"></i> wwww.eduvibesinternational.com </a> <br>
    
<a href="mailto:info@eduvibesinternational.com"><i class="fas fa-envelope"></i> info@eduvibesinternational.com</a> <br>
        <a href="tel:+919048840653"><i class="fas fa-phone-alt"></i> +91 9048840653</a> <br>
        <a href="tel:+917510178902"><i class="fas fa-phone-alt"></i> +91 7510178902</a> </p>
   
                         
                        </div>
                    </div>
                   
            
                </div>
                <div class="col-md-12">
                    
                </div>
               
            </div>
        </div>
        
    </section>
   
    <iframe src="<?php echo $row['map_link'];?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
    <?php $i++;}?>
   
    <!-- include footer here -->
    <?php include 'footer.php';?>


    <div id="snackbar">Some text some message..</div>
    </div><!-- end Wrapper -->
    
    <?php include 'script.php';?>


</body>
<!-- end Body -->

</html>
<!-- end Html -->
