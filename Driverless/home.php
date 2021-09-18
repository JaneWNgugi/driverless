
<?php 
session_start();

if($_SESSION["login"]==true){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Main</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <a href="https://www.flaticon.com/" title="Flaticon"></a></div>
  <link href="https://www.flaticon.com/" title="Flaticon" rel="icon">
  <link href="https://www.flaticon.com/" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/stylereg.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v2.3.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Driverless</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
   <ul>   <?php echo $_SESSION["usname"]; 
             
         
            }else { 
              
                header("location:login.php");
            }
            ?>
        

        
          <li class="active"><a href="home.php">Home</a></li>
         <li><a href="#details">Details</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="useraccount.php">User Account</a></li>
          
           <li>||</li>
           <li>||</li>



        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    
 

      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Welcome back to <span>Driverless</span></h1>
            <h2 style="font-family:Times New Roman,Times,serif;"> Driverless are Self-driving vehicles,
              cars or trucks, that human drivers are never
              required to take control and safely operate the vehicle.
              These cars have a combination of
               sensors and softwareto control, navigate, and drive the vehicle</h2>
            <div class="text-center text-lg-left">
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/ferrari.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
  
    <!-- ======= Features Section ======= -->
  

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/car-png-39071.png" class="img-fluid" alt="ferrari">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Autonomous Range Rover</h3>
            <p class="font-italic">
            A Remote Control Range Rover Sport research vehicle demonstrates
             how a driver could control the vehicle from outside the car via their smartphone. The smartphone app allows the driver to steer, 
            accelerate and brake as well as changing from high and low range.
            </p>
           <h1> $92,000</h1>
           <p> more details and offers after Signing in/ login</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/car-png-39058.png" width="600"  class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3> Autonomous Mercedes Benz</h3>
            <p class="font-italic">
            Mercedes-Benz is a pioneer when it comes to autonomous driving.
            the F 015 Luxuryin Motion  show that the technical conditions for autonomous 
              driving are already well established. The required sensors and cameras have long been
               used in series production vehicles and undertake increasing numbers of tasks on the driver’s behalf.
            </p>
           <h1> $122,000</h1>
           <p> more details and offers after Signing in/ login</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/car-png-39065.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3> Autonomous BMW</h3>
            <p class="font-italic">

            Offer steering and lane-keeping assistance, as well as remote-controlled parking – 
            all systems defined as level 2 “Partly Automated Driving (PAD)”. 
            A good example is BMW’s “Personal CoPilot”, an industry-leading driver assistance system.
            </p>
            <h1> $96,000</h1>
           <p> more details and offers after Signing in/ login</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/car-png-16828.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3> Autonomous Audi </h3>
            <p class="font-italic">
            Relaxed driving, more road safety, less congestion and environmental impact: Autonomous driving,
             thanks to its many advantages, is one of the most important fields of development at Audi. 
            Over 15 years of ongoing research and testing are continuously incorporated into series development.
            </p>
            <h1> $130,000</h1>
           <p> more details and offers after Signing in/ login</p>
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

   
    <!-- ======= Counts Section ======= -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Driverless</h3>
              
              <div class="social-links mt-3">
                <a href="https://twitter.com/Waymo?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://web.facebook.com/Waymo/videos/waymo-self-driving-car/10100250100315498/?_rdc=1&_rdr" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/waymo/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
                
              </div>
            </div>
          </div>
        
  
   
        

          
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Driverless</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>