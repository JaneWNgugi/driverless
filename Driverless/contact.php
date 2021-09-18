<?php
session_start();

if($_SESSION["login"]==true){

}else {
  header("location:login.php");
}

include('connection.php');
// When form submitted, insert values into the database.

if(isset($_POST['cont']))
{
    $name=$_SESSION['name'];
    $question=$_POST['question'];
  
    $qry="INSERT INTO contact(name, question) VALUE('$name','$question')";
    $exe=mysqli_query($db,$qry);
    if($exe)
    {
      header("location:home.php");
    }else{
    echo mysqli_error($db);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- =======================================================
  * Template Name: Bootslander - v2.3.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="home.php"><span>Driverless</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
      <ul>
     

         
          <li><a href="home.php">Home</a></li>
          <li class="active" ><a href="contact.php">Contact</a></li>
          <li ><a href="useraccount.php">User Account</a></li>
           
    
          </ul>
        </nav><!-- .nav-menu -->
  
      
    <!-- End Header -->
ero Section ======= -->
  
      
            
  <!-- End Header -->
  


<script>
$( document ).ready(function() {
$("#Ask").hide();
$("#FAQ").hide();
$("#nxt").click(function() {
    $("#nxt").hide();
    $("#Ask").show();
    $("#FAQ").show();
});
});
</script>
 


  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="home.php">Home</a></li>
            <li>Contact.</li> </ol>
           <?php echo $_SESSION["usname"]; ?>.
             



         </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
   

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
            
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>Driverless@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+25412343290</p>
              </div>

            </div>

          </div>
         


  <form method="post">
             
               <h2>Ask - Question</h2>
              <textarea name="question" id="quiz" rows="7" cols="50"></textarea>
              <br>
           
              <a href="#" id="nxt" class="btn btn-info">Next</a>
   
   <input type="submit" id="Ask" name="cont" value="Ask" class="btn btn-info">
              <br>
      
      
        </form>
            
          
      </div>
      
      <div id="FAQ" class="row">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" class="" href="#faq1">How does the car see the road? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
              Super Cruise and other similar systems do more than just see the road. Using an array of sensors,
         lasers, radar, cameras, and GPS technology, they can actually analyze a car's surroundings.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" class="" href="#faq1">Is any of this even legal? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
              Generally these laws simply stipulate that someone 
        must be in the car and be able to take control of the car in case of an emergency.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" class="" href="#faq1">How safe is all this? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
              Considering that semiautonomous cars rely on a network of active safety systems to work, they're pretty safe. The Insurance Institute for Highway Safety has found that we are already 
        seeing the benefits of systems such as forward-collision warning in the reduction of accidents.
              </p>
            </div>
          </li>
        </ul>

      </div>
 
      
                      </div>
                  </div>
    </section><!-- End Contact Section -->

    
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
          <div class="col-lg-4 col-md-6 footer-newsletter">
            

          </div>
  
          <?php 

include('connection.php');
          if(isset($_POST['save']))
{
    $name=$_SESSION['usname'];
    $email=$_POST['email'];
  
    $query="INSERT INTO newsletter(name, email) VALUE('$name','$email')";
    $exe=mysqli_query($db,$query);
    if($exe)
    {
      header("location:home.php");
    }else{
    echo mysqli_error($db);
    }
}

?>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subscribe to Our Newsletter</h4>
            <p>get daily updates straight to your inbox</p>
            <form  method="post">
            <input type="email" name="email">
              <input type="submit" id="save" name="save" value="Subscribe" class="btn btn-info">
            </form>

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