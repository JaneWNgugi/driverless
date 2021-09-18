<?php
session_start();

if($_SESSION["login"]==true){

}else {
    header("location:login.php");
}

?>
   


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User Account</title>
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
          <li><a href="contact.php">Contact</a></li>
          <li class="active" ><a href="useraccount.php">User Account</a></li>
           
           <li>||</li>
           <li>  
             <div id="google_translate_element"></div> 
  
<script type="text/javascript"> 
function googleTranslateElementInit() { 
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element'); 
} 
</script> 
  
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
</li>
        </ul>
      </nav><!-- .nav-menu -->

    
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  


  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>User Account</h2>
          <ol>
            <li><a href="home.php">Home</a></li>
      
            <li><a href="logout.php">Logout</a></li>
             </ol>
           
             



         
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
 
    <section class="inner-page">
      <div class="container">
      <style>
.form {


padding: 30px 25px;
background: white;

width: 50%;

box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
margin: 100px auto;
}
.reg-input
{
width: 500px;
  height: 50px;
  border: 1px solid #dee0e4;
  margin-bottom: 20px;
  padding: 0 15px;
}



</style>
       
<?php
include('connection.php');
if(isset($_POST['save'])) {
  $username=$_SESSION['name'];
  $password = ($_POST['password']);

  $query1    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $rst1 = mysqli_query($db, $query1) or die(mysql_error());
        $cntrw = mysqli_num_rows($rst1);
        $row=mysqli_fetch_array($rst1);
        
        $_SESSION['name']=$row['username'];
        if($cntrw>0)

        {   $_SESSION['login']=true;
            
            } else {
              $qry= "UPDATE `users` SET password='" . md5($password) . "' WHERE username='$username'";
        $rst   = mysqli_query($db, $qry);
             if ($rst==true) {
            echo "<div class='form'>
            <h3>Your details have been Updated :)</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
                  
        } elseif ($rst==false) {
            echo "<div class='form'>
            <h3>Your details have not been Updated!!! :(</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>register</a> again.</p>
                  </div>";
        }


 

        
     } }else
   {
?>


        <div class="container rounded bg-white mt-5 mb-5" >
    
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class="rounded-circle mt-5" src="assets/img/settings.ico" width="80%">
            <span class="font-weight-bold">
           </div>
       </div>
        

       
      
                 
           <form  method="post" >

<h1 class="login-title">Profile Settings</h1>


       <input  class="reg-input" name="username" placeholder="<?php echo $_SESSION["usname"]; ?>" disabled  /><br>


<input type="password" class="reg-input" name="password" placeholder="password...." required /><br>
<br>
<input type="submit" name="save" value="Update" class="login-button">
<br>
<br>
<p class="link"> Your data is safe with us.</p>
<br>

</form>
</div>
</div>
       <?php
}

?>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
   
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