<?php 
require_once 'php/include/DB_Functions.php';
 $db = new DB_Functions();
 $details=$db->load_web_content();
 
					$i = 1; 
          while ($row = mysqli_fetch_array($details)) { 
            $ph= $row['shop_phone'];
            $em= $row['shop_email'];
            $ad= $row['shop_address'];
?>
<head>
<!-- ========== PAGE TITLE ========== -->
<title><?php echo $row['shop_name'];?></title>
  
<!-- ========== META TAGS ========== -->
<meta charset="utf-8">
<meta name="author" content="Alphaexpression Technologies Pvt Ltd">
<meta name="keywords" content="zara international academy, Academic Tutoring, Skill Development, Holistic Learning, One to one Student Profiling, Child-Parent care and Counseling for Career Development, Career and Personality Development, oman, muscat">
<meta name="description" content="zara international academy, An organization aiming towards actualising the human potential, through specifically designed programs in the field of education, skills, creativity, entertainment and career development. Targeting to cultivate, channelize and nurture the skills deep within the student community, we bring in holistically designed highly effective programs facilitated by career counsellors, psychologists and certified skilled trainers to imbue the same as a part of academic curriculum."Changing is The Characteristic of Life" has been echoed by the predecessor, and we see its imprints in our lives every day. At Dhofar Facilities Management, we assure you that we have put in a lot of effort over the past several years and are still working to fulfill our commitment to improve the management of facilities and adapt them to your expectations and needs.">


<meta name="robots" content="all, index, follow" />
 <!-- ========================== Mobile Specific Metas ======================== -->
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=0">
<!-- =========================== Favicon ============================= -->
<link href="<?php echo $row['small_logo'];?>" rel="shortcut icon" type="image/png">
<link href="<?php echo $row['small_logo'];?>" rel="icon" type="image/png">
<!-- ======================= CSS LINES =============================== -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- ====================== Plugin CSS =============================== -->
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/jquery.rateyo.min.css">
<link rel="stylesheet" href="css/anim.css">
<!-- ====================== Custom CSS =============================== -->
<link rel="stylesheet" href="css/style.php?5">
<!-- ==================== FONT-AWESOME =============================== -->
<!-- <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"> -->
<script src="https://kit.fontawesome.com/2c3550df7e.js" crossorigin="anonymous"></script>
<!-- ========== NEED TO USING GOOGLE WEBFONT ========== -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PBWHGT5QVY">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PBWHGT5QVY');
</script>

</head>
<?php
          $i++; 
	}
?>