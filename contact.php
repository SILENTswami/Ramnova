<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Contact | Ramnova Healthcare Pvt Ltd</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css?1">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <!--Favicon-->
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">

</head>

<body>

	<div class="body-inner">

	<?php include "header.php" ?>

   <div id="banner-area" class="banner-area" style="background-image:url(images/bg-hexa.png)">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title" style="color: #42a3d6;">Contact us</h1>
                     <ol class="breadcrumb">
                        <li>Home</li>
                        <li><a href="#">Contact</a></li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


  <section id="main-container" class="main-container">
      <div class="container">

<!--          <div class="row text-center">
            <h2 class="section-title">Reaching our Office</h2>
            <h3 class="section-sub-title">Find Our Location</h3>
         </div> -->

         <div class="row">
            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-map-marker"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Visit Our Office</h4>
                     <p>FL 104, H-1 Building,Yogi Milan, Ultan Falia, Silvassa, Dadra &amp; Nagar Haveli, Gujarat-396230</p>
                 </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-envelope"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Email Us</h4>
                     <p>info@ramnovahealthcare.com<br/><br/>ramji19031998@gmail.com</p>
                 </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-phone-square"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Call Us</h4>
                     <p>(+91)<br/> 980-101-8180<br/>830-904-7057</p>
                 </div>
               </div>
            </div><!-- Col 3 end -->

         </div><!-- 1st row end -->

         <div class="gap-60"></div>

         <!-- <div id="map" class="map"></div> -->

         <div class="gap-40"></div>

         <div class="row">

            <div class="col-md-12">

               <h3 class="column-title">Send us a message</h3>

               <form id="contact-form" action="contact-form.php" method="post" role="form">
                  <div class="error-container"></div>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Name</label>
                        <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Email</label>
                           <input class="form-control form-control-email" name="email" id="email"
                           placeholder="" type="email" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Subject</label>
                           <input class="form-control form-control-subject" name="subject" id="subject"
                           placeholder="" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Message</label>
                     <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                  </div>
                  <div class="text-right"><br>
                     <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                  </div>
               </form>
            </div>

         </div><!-- Content row -->
      </div><!-- Conatiner end -->
   </section><!-- Main container end -->


  <?php include "footer.php" ?>


  <!-- Javascript Files
================================================== -->

  <!-- initialize jQuery Library -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- Bootstrap jQuery -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <!-- Color box -->
  <script type="text/javascript" src="js/jquery.colorbox.js"></script>
  <!-- Isotope -->
  <script type="text/javascript" src="js/isotope.js"></script>
  <script type="text/javascript" src="js/ini.isotope.js"></script>


  <!-- Google Map API Key-->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <!-- Google Map Plugin-->
  <script type="text/javascript" src="js/gmap3.js"></script>

 <!-- Template custom -->
 <script type="text/javascript" src="js/custom.js"></script>

</div><!-- Body inner end -->
</body>

</html>
