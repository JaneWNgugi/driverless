<?php
session_start();

$stopTime = time() + 10;


if (isset($_SESSION['lock'])) {
$_difference =time()-$_SESSION['lock'];
while(trim(strval($_difference)) !== trim(strval($stopTime)))
{
  unset($_SESSION['lock']);
  unset($_SESSION['loginat']);
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Driverless - Login</title>
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
        <h1 class="text-light"><a href="index.html"><span>Driverless</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

     
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
          <ol>
            <li><a href="home.php">Home</a></li>
            <li>Login</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
       
      <?php 

    include('connection.php');
    // When form submitted, check and create user session.
    if (isset($_POST['login'])) {
        $username = ($_POST['username']);    // removes backslashes
        $password = ($_POST['password']);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($db, $query) or die(mysql_error());
        $rowcount = mysqli_num_rows($result);

        $row=mysqli_fetch_array($result);
        $_SESSION['usname']=$row['username'];

        if($rowcount>0)

        {   $_SESSION['login']=true;
            header("location:home.php");
            } else {
              if(!isset($_SESSION['loginat'])){
                $_SESSION['loginat']=0;
                 }
                 $_SESSION['loginat'] +=1;
                 echo "<div class='form'>
                 <h3>username and password do not match</h3><br/>
                 <p class='link'>Click here to try and <a href='login.php'>Login</a> again.</p>
                 </div>";
            
        }
    }
    else{
?>
<style>
    .form {

        padding: 30px 25px;
background: white;

width: 50%;

box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
margin: 100px auto;
}
.login-input {
    width: 500px;
  height: 50px;
  border: 1px solid #dee0e4;
  margin-bottom: 20px;
  padding: 0 15px;

}

 
  </style>
<form class="form" method="post" name="login">

        <h1 class="login-title">Login</h1>
       
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required/><br>
     
        <input type="password" class="login-input" name="password" placeholder="Password" required/><br>
        <?php
if (!isset($_SESSION['loginat'])) {
  $_SESSION['loginat']=0;
}

if ($_SESSION['loginat'] > 3) {
  $_SESSION['lock']=time();
  echo "<p><font color=red>login restricted!! too many attempts!! please refresh the page after 10 minutes</font></p>";
}
else{
?>
        <input type="submit" value="Login" name="login" class="login-button"/>
        <p class="link">Don't have an account? <a class="reglink" href="signup.php">SignUp Here</a></p>
  </form>
<?php
    }
    }
    ?>
      </div>
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
  </footer>

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