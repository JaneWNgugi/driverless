<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Driverless - SignUp</title>
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
            <li>SignUp</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
      <?php
    include('connection.php');
    // When form submitted, insert values into the database.
    if(isset($_POST['submit'])) {
        $fname=($_POST['fname']);
         $email    = ($_POST['email']);
         $dob=($_POST['dob']);
         $postal_address=($_POST['postal_address']);
         $postcode=($_POST['postcode']);
        $username = ($_POST['username']);
        $password = ($_POST['password']);
        $regdate = date("Y-m-d H:i:s");
        
        $qry1    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $rst1 = mysqli_query($db, $qry1) or die(mysql_error());
        $countrw = mysqli_num_rows($rst1);
        $row=mysqli_fetch_array($rst1);
        
        $_SESSION['usname']=$row['username'];
        if($countrw>0)

        {   $_SESSION['login']=true;
            echo "<div class='form'>
                  <h3>The username and password already exists/ you can login if this is your account</h3><br/>
                  <p class='link'>Click here to <a href='signup.php'>SignUP</a> again.</p>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
            } else {
                $qry    = "INSERT into `users` (fname, email, dob, postal_address, Postcode,
                 username, password,userr_regdate)
                     VALUES ('$fname','$email','$dob','$postal_address','$postcode',
                     '$username', '" . md5($password) . "', '$regdate')";

        $rst   = mysqli_query($db, $qery);
             if ($rst==true) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
                  
        } elseif ($rst==false) {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>register</a> again.</p>
                  </div>";
        }
        }
       



    } else {
?>
<style>
.reg-button {
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 500px;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
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
<form class="form" method="post" >

        <h1 class="login-title">SignUp</h1>
     
        
        <input type="text" class="reg-input" name="fname" placeholder="First Name...." required /><br>
       
       
        
        <input type="text" class="reg-input" name="email" placeholder="Email Adress...." required><br>
       
       
       
        <input type="date" class="reg-input" name="dob" placeholder="D.O.B...." required><br>
        
      

        <input type="text" class="reg-input" name="postal_address" placeholder="Postal Address...." required /><br>
        
      
        <input type="text" class="reg-input" name="postcode" placeholder="PostCode...." required /><br>
        


        <input type="text" class="reg-input" name="username" placeholder="Username...." required /><br>
       
       

        <input type="password" class="reg-input" name="password" placeholder="Password..." required><br>
        <br>
        <input type="submit" name="submit" value="Register" class="reg-button">
        <br>
        <br>
        <p class="link"> Your data is safe with us.</p>
        <br>
        <p class="link">Already have an account? <a href="login.php" class="loginlink"  >Login here</a></p>
    </form>
<?php
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