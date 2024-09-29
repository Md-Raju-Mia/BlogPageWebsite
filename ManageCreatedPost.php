<?php
// Initialize session
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
  header('Location: login.php');
  exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Manage Post- MobiManager</title>
  <meta property="og:type" content="website">
  <meta name="og:title" content="Manage Post - MobiManager">
  <meta property="og:site_name" content="MobiManager">

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


  <!-- cdn for font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Include DataTables CSS and JavaScript files -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>



  <!-- Include DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />

  <!-- Include Responsive extension CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.10/css/responsive.dataTables.min.css" />






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


    /*for logout button*/
    .navbar .getstarted,
    .navbar .getstarted:focus {



      margin-left: 15px;

    }
  </style>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YHLR6DTV0Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
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


      <!-- navbar -->
      <nav id="navbar" class="navbar">
        <ul>

          <li class="dropdown"><a href="#"><span style="color:forestgreen; font-weight: 600;">All Request</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li>
                <a href="request-a-demo-data-list.php">📑 Demo Request</a>
              </li>
              <li>
                <a href="contact-us-data-list.php">📝 Contact Request</a>

              </li>
              <li>

                <a href="support-data-list.php">💁🏼‍♀️ Support Request</a>

              </li>
              <li><a href="become-our-partner-data-list.php">🤝 Partner Request</a></li>

              <!-- Raju -->
          </li>
          <li><a href="Create_Blog_Post.php">📝 Create Post</a></li>

          </li>
          <li><a href="ManageCreatedPost.php">💁🏼‍♀️ Manage Post</a></li>


        </ul>
        </li>

        <li><a class="getstarted scrollto" style="background-color: #8eace8; font-weight: 600;" href="logout.php">Logout</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>




  <section class="d-flex justify-content-center" style="background-color: #ffffff; margin-top:80px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h3 class="text-center text-w">Manage Post</h3>
          <table class="table text-center table-striped table-hover" id="PostManageTable">
            <thead>
              <tr>
                <th>Post Number</th>
                <th>Author Name</th>
                <th>Post Title</th>
                <th>Post Category</th>
                <th>Post Tag</th>
                <th>Cover Image</th>
                <th>Thumbnail Image</th>
                <th>Post Content</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </section>







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





    <!-- google map -->
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
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
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


  <script>
    $(document).ready(function() {
      $('#PostManageTable').DataTable({
        responsive: true,
        "ajax": {
          "url": "forms/get_submited_post.php",
          "dataSrc": "data",
          "error": function(xhr, error, thrown) {
            console.log("Error loading data: ", error);
            console.log("Response: ", xhr.responseText);
          }
        },
        "columns": [{
            "data": "id"
          },
          {
            "data": "author"
          },
          {
            "data": "title"
          },
          {
            "data": "postcatagory"
          },
          {
            "data": "posttag"
          },
          {
            "data": "coverimage",
            "render": function(data, type, row) {
              if (data === null || data === "") {
                return "No Image";
              } else if (data.startsWith('uploads/')) {
                return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              } else if (data.startsWith('forms/uploads/')) {
                return '<img src="' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              } else {
                return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              }
            }
          },
          {
            "data": "thumbnailimage",
            "render": function(data, type, row) {
              if (data === null || data === "") {
                return "No Image";
              } else if (data.startsWith('uploads/')) {
                return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              } else if (data.startsWith('forms/uploads/')) {
                return '<img src="' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              } else {
                return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              }
            }
          },
          {
            // "data": "content",
            //     "render": function(data, type, row) {
            //         if (data.length > 200) {
            //             return data.substr(0, 200) + '...';
            //         } else {
            //             return data;
            //         }
            //     }

            "data": "content",
            "render": function(data, type, row) {
              // Extract the first image
              var imgTag = data.match(/<img [^>]*src="[^"]*"[^>]*>/);
              var imgHtml = imgTag ? imgTag[0].replace(/<img /, '<img style="width: 150px; height: auto;" ') : '';

              // Truncate the text
              var text = data.replace(/<[^>]*>/g, ''); // Remove HTML tags
              if (text.length > 100) {
                text = text.substr(0, 100) + '...';
              }

              return imgHtml + '<br>' + text;
            }

          },
          {
            "data": "date"
          },
          {
            "data": "id",
            "fnCreatedCell": function(nTd, sData, oData, iRow, iCol) {
              $(nTd).html("<a style='margin-right: 3px;padding: 3px 7px;' class='btn btn-danger' onclick='deleteEntry(" + oData.id + ");' href='./delete-created-post-data.php?id=" + oData.id + "'><i class='fa fa-trash'></i></a><a style='margin-right: 3px;padding: 3px 6px;' class='btn btn-info' href='./edit-post-data-list.php?id=" + oData.id + "'><i class='fa fa-pencil'></i></a>");
            }
          }
        ],
        "order": [
          [0, "desc"]
        ]
      });
    });
  </script>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- SweetAlert script -->
  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#PostManageTable').DataTable({
            responsive: true,
            "ajax": "forms/get_submited_post.php",
            "columns": [
                { "data": "id" },
                { "data": "author" },
                { "data": "title" },
                { "data": "content" },
                {
                    "data": "image",
                    "render": function(data, type, row) {
                        return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
                    }
                },
                { "data": "date" },
                {
                    "data": "id",
                    "fnCreatedCell": function(nTd, sData, oData, iRow, iCol) {
                        $(nTd).html("<a style='margin-right: 3px;padding: 3px 7px;' class='btn btn-danger' onclick='deleteEntry(" + oData.id + ");' href='./delete-created-post-data.php?id=" + oData.id + "'><i class='fa fa-trash'></i></a><a style='margin-right: 3px;padding: 3px 6px;' class='btn btn-info' href='./edit-post-data-list.php?id=" + oData.id + "'><i class='fa fa-pencil'></i></a>");
                    }
                }
            ]
        });
    });
</script> -->

  <!-- <script>
    $(document).ready(function() {
        $('#PostManageTable').DataTable({
            responsive: true,
            "ajax": {
                "url": "forms/get_submited_post.php",
                "dataSrc": "data",
                "error": function(xhr, error, thrown) {
                    console.log("Error loading data: ", error);
                    console.log("Response: ", xhr.responseText);
                }
            },
            "columns": [
                { "data": "id" },
                { "data": "author" },
                { "data": "title" },
                { "data": "content" },
                {
                    "data": "image",
                    "render": function(data, type, row) {
                        if (data === null || data === "") {
                            return "No Image";
                        } else if (data.startsWith('uploads/')) {
                            return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
                        } else if (data.startsWith('forms/uploads/')) {
                            return '<img src="' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
                        } else {
                            return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
                        }
                    }
                },
                { "data": "date" },
                {
                    "data": "id",
                    "fnCreatedCell": function(nTd, sData, oData, iRow, iCol) {
                        $(nTd).html("<a style='margin-right: 3px;padding: 3px 7px;' class='btn btn-danger' onclick='deleteEntry(" + oData.id + ");' href='./delete-created-post-data.php?id=" + oData.id + "'><i class='fa fa-trash'></i></a><a style='margin-right: 3px;padding: 3px 6px;' class='btn btn-info' href='./edit-post-data-list.php?id=" + oData.id + "'><i class='fa fa-pencil'></i></a>");
                    }
                }
            ]
        });
    });
</script> -->

  <!-- <script>
    $(document).ready(function() {
      $('#PostManageTable').DataTable({
        responsive: true,
        "ajax": {
          "url": "forms/get_submited_post.php",
          "dataSrc": "data",
          "error": function(xhr, error, thrown) {
            console.log("Error loading data: ", error);
            console.log("Response: ", xhr.responseText);
          }
        },
        "columns": [{
            "data": "id"
          },
          {
            "data": "author"
          },
          {
            "data": "title"
          },
          {
            "data": "postcatagory"
          },
          {
            "data": "posttag"
          },

          {
            "data": "coverimage",
            "render": function(data, type, row) {
              if (data === null || data === "") {
                return "No Image";
              } else if (data.startsWith('uploads/')) {
                return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              } else if (data.startsWith('forms/uploads/')) {
                return '<img src="' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              } else {
                return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              }
            }
          },
          {
            "data": "thumbnailimage",
            "render": function(data, type, row) {
              if (data === null || data === "") {
                return "No Image";
              } else if (data.startsWith('uploads/')) {
                return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              } else if (data.startsWith('forms/uploads/')) {
                return '<img src="' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              } else {
                return '<img src="forms/' + data + '" alt="Post Image" style="width: 100px; height: auto;">';
              }
            }
          },
          {
            "data": "content"
          },
          {
            "data": "date"
          },
          {
            "data": "id",
            "fnCreatedCell": function(nTd, sData, oData, iRow, iCol) {
              $(nTd).html("<a style='margin-right: 3px;padding: 3px 7px;' class='btn btn-danger' onclick='deleteEntry(" + oData.id + ");' href='./delete-created-post-data.php?id=" + oData.id + "'><i class='fa fa-trash'></i></a><a style='margin-right: 3px;padding: 3px 6px;' class='btn btn-info' href='./edit-post-data-list.php?id=" + oData.id + "'><i class='fa fa-pencil'></i></a>");
            }
          }
        ],
        // Add the following line to set the default sort order
        "order": [
          [0, "desc"]
        ] // Sort by the first column (id) in descending order
      });
    });
  </script> -->









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