<?php
// Hardcoded
$validUsername = '@gmail.com';
$validPassword = 'r';

// Initialize session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get user input
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the credentials are valid
  if ($username === $validUsername && $password === $validPassword) {
    // Set session variable to mark user as logged in
    $_SESSION['loggedIn'] = true;

    header('Location: request-a-demo-data-list.php');
    exit;
  } else {
    /*$error = '<span style="text-align:center">Invalid username or password</span>';*/
    $error = '<div style="text-align: center; color: red; font-size:24px;">Invalid username or password</div>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MobiManager | Login Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!--  CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Latest version from CDN sweetaleart -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



  <!-- Add jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <style>
    /* Style the section container */
    .partner-area {
      background-color: #FFFFFF;
      /* Set a background color */
      padding: 30px 0;
      /* Add padding to the top and bottom */
    }

    /* Style the section title */
    .partner-area .section-title {
      text-align: center;
      margin-bottom: 0px;
      /*40*/
    }

    .partner-area .section-title h2 {
      font-size: 32px;
      color: #5777BA;
      /* Set the title color */
    }

    /* Style the partner logos */
    .single-partner {
      text-align: center;
      margin-bottom: 30px;
      padding: 15px;
      border: 0px solid #ddd !important;
      /* Add a border around each logo */
      box-shadow: 0px 2px 15px rgba(0, 0, 20, 0.9);
      border-radius: 12px;
    }

    .single-partner-wasim {
      text-align: center;
      margin-bottom: 30px;
      padding: 11px;
      border: 0px solid #ddd !important;
      /* Add a border around each logo */
      box-shadow: 0px 2px 15px rgba(0, 0, 20, 0.9);
      border-radius: 12px;
    }



    .single-partner a {
      display: block;
    }

    .single-partner img {
      max-width: 100%;
      height: auto;
    }

    /* Responsiveness for smaller screens */
    @media (max-width: 768px) {
      .partner-area .col-lg-2 {
        text-align: center;
        margin-bottom: 30px;
      }
    }

    .wasimDiv {
      box-shadow: 0px 2px 15px rgba(0, 0, 20, 0.3);
      border-radius: 12px;
    }


    .wasim-new {


      margin-left: 20px !important;
      background-color: red;
    }



    * {
      padding: 0px;
      margin: 0px;
    }

    .navbar {
      margin: 0px;
    }

    .error {
      color: red;
      font-style: italic;
    }

    .mycolor {
      background: #748EC6;
    }

    .text-w {
      color: #748EC6;
    }

    .background-color-w {
      color: #F2F5FA;
    }

    .section-bg {
      background-color: #f2f5fa;
      padding: 0px;
      margin: 0px;
    }

    .card-shadow {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      font-family: "Open Sans", sans-serif;

    }

    #output {
      font-size: 24px;
      /* Change the font size as needed */
      color: green;
      /* Change the color as needed */
      margin-bottom: 20px;
    }


    .bg-image {
      /* background:transparent url(assets/img/digitalsignage.jpeg) 100% 0 no-repeat;
    background-size:cover;
    background-position:40%*/
      background-color: #e2e2e2;


    }
  </style>
     <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YHLR6DTV0Y"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YHLR6DTV0Y');
    </script>


</head>

<body>



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent">
    <!-- Top Links -->
    <div class="top-links">
      <a href="request-a-demo.html">Schedule A Demo |</a>
      <a href="contact-us.html">Contact Sale:+88 01916574623</a>


    </div>
    <!-- Top Links -->
    <div class="container d-flex align-items-center  extraSpaceBetweenMenu justify-content-between">



      <div class="logo">
        <!-- <a href="index.html"><img src="assets/img/unnamed.png" alt="" class="img-fluid"></a> -->
        <a href="index.html"><img src="assets/img/mobimanager.png" alt="MobiManager Logo - Mobile Device Management Solutions Bangladesh" class="img-fluid"><span style="color:#7393D6; font-size: 20px; font-weight:700;">MobiManager</span></a>


      </div>



      <nav id="navbar" class="navbar">



        <ul>


          <!-- Solution-dropdown-normal-menu -->
          <!-- normal-menu-for-partners -->
          <li class="dropdown"><a href="#values"><span>Solutions</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="mdm.html">Mobile Device Management (MDM)</a></li>

              <li><a href="kiosklockdown.html">Kiosk Lockdown</a></li>
              <li><a href="digital-signage.html">Digital Signage</a></li>
              <li><a href="become-our-partner.html">Parental Control</a></li>
              <li><a href="rugged-device-management.html">Rugged Device Management</a></li>
              <!-- <li><a href="#">IOT Device Management</a></li> -->

            </ul>
          </li>
          <!-- normal-menu-for-partners -->
          <!-- Solution-dropdown-normal-menu -->

          <li><a class="nav-link scrollto" href="#features">Features</a></li>


          <!-- normal-menu-for-partners -->
          <li><a class="nav-link scrollto" href="#partners">Clients</a></li>

          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <!-- Raju -->
          <li><a href="Blog">Blog</a></li>

          <li class="dropdown"><a href="contact-us.html"><span>Contact</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li>
                <a href="request-a-demo.html">📑 Request A Demo</a>
              </li>
              <li>
                <a href="contact-us.html">📝 Contact Us</a>

              </li>
              <li>

                <a href="support.html">💁🏼‍♀️ Need Support?</a>

              </li>
              <li><a href="become-our-partner.html">🤝 Become a Partner</a></li>


            </ul>
          </li>

          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <li><a class="getstarted scrollto" href="request-a-demo.html">7 Days Free Trial</a></li>
        </ul>


        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->



    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <section class="inner-page" style="background-color: #ffffff;">
      <div class="container">


        <div class="row">

          <!-- Column-2 -->
          <div class="col-md-6 offset-md-3 " data-aos="fade-up">
            <div class="card mt-3 card-shadow">
              <div class="card-body">

                <h3 class="text-center text-w">Login</h3>

                <?php if (isset($error)) : ?>
                  <p style="color: red;"><?php echo $error; ?></p>
                <?php endif; ?>



                <form method="POST" action="login.php">





                  <div class="row">


                    <div class="col-md-12 mt-3">
                      <div class="form-group" style="font-family: sans-serif;">
                        <label for="username"> Username/Email:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                      </div>
                    </div>

                  </div>

                  <div class="row">


                    <div class="col-md-12 mt-3">
                      <div class="form-group" style="font-family: sans-serif;">
                        <label for="username"> Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                      </div>
                    </div>

                  </div>



                  <div class="mt-4" style="font-family: sans-serif;">

                    <input class="btn btn-lg pull-right text-white" style="width:100%; background-color: #8EACE8;" type="submit" value="Submit">
                  </div>

                </form>

              </div>
              <!-- end of card-body -->
            </div>
            <!-- end of card -->

          </div>
          <!-- end of col-md6 -->
        </div>
        <!-- end of row -->


      </div>
    </section>


  </main><!-- End #main -->










  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter footer-ads-section bg-gradient">
      <div class="container">


        <div class="row align-items-center">
          <div class="col-lg-8 col-md-8">
            <div class="footer-ads-section-content">

              <h3 style="font-size:40px; color:white">Let's Try MobiManager</h3>
              <p>Request for 7 Days free trial | No credit card required.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="footer-ads-section-btn-box">
              <!-- <a class="btn btn-info" style="background-color: #93478F;" href="request-a-demo.html">Schedule a Demo</a> -->
              <a class="btn btn-info" style="background-color: #93478F;" href="request-a-demo.html">Free Trial</a>
            </div>

          </div>
        </div>

      </div>
    </div>






    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MobiManager</h3>
            <p>
              Venus Complex (Level-8, Unit-803),
              Kha-199/3-4 Progati Sharoni,<br> Dhaka-1212
              <br><br>

              <strong>Phone:</strong> +8801916574623<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; +8801858341848<br>
              <strong>Email:</strong> support@inovexidea.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.inovexidea.com/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.inovexidea.com/abouts.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.inovexidea.com/serviceList.html">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.inovexidea.com/portfolio.html">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.inovexidea.com/">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">IT Consultency</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Application Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Enterprise Solution Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">B2B & B2C Software Solution</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mobile App & IOT Development</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>

            <div class="social-links mt-3">
              <a href="https://www.inovexidea.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/inovexidea" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.inovexidea.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <!-- <a href="https://www.inovexidea.com/" class="google-plus"><i class="bx bxl-skype"></i></a> -->
              <a href="https://www.linkedin.com/company/inovex-idea-solution/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>INovex Idea Solution Limited</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>






  <!-- SweetAlert script -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




  <!-- JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>