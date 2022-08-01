<?php
include("assets/include/config.php");
                        // $sql=mysqli_query($conn,"select * from `general_setting`");
                        //  $arr=mysqli_fetch_array($sql)
                    
?>

<?php
   $sql=mysqli_query($conn,"select * from general_setting where id='1'");  
   $arr=mysqli_fetch_array($sql); 
   $sql1=mysqli_query($conn,"select * from general_setting where id='2'"); 
   $arr1=mysqli_fetch_array($sql1); 
   $sql2=mysqli_query($conn,"select * from general_setting where id='3'");  
   $arr2=mysqli_fetch_array($sql2); 
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Unique Pathology - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link  rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/shortcodes.css" rel="stylesheet">

  <style>
    .home{
  color: #4ab242 !important;
  border-color: #4ab242 !important;
}
    .carousel-caption {
      position: absolute;
      /* right: 15%; */
      top: 200px;
      left: 15% !important;
      z-index: 10;
      padding-top: 20px;
      padding-bottom: 140px;
      color: #fff;
      text-align: left !important;
    }
    
      @media (max-width: 767px){
        .carousel {
             margin-bottom: 10px !important;
             /* height: 100vh !important; */
            }

            #services {
              margin-top:-80px !important;
            }
            #about {
              margin-top:-80px !important;
            }
            #why-us {
              margin-top:-65px !important;
            }
            #phone{
              margin-top:5px;
              margin-bottom:5px;
            }
          }
  </style>
</head>

<body>
  


<?php include("assets/include/header.php"); ?>
 <!-- End Header -->


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="d-block w-100 imgCarousle" style=" opacity: .7;"  src="admin/dist/img/gallery/<?php echo $arr['gallery_img'] ?>" alt="First slide" width="1000" height="586">
        <div class="carousel-caption  ">
          <h1><?php echo $arr['banner_heading'] ?></h1>
          <!-- <h1>We Provide Best Solution.</h1> -->
          <h2><?php echo $arr['banner_content'] ?></h2>
          <!-- <h2>We Try To Make Our Maximum Us Of Our Experience,Accumulate Potential, Knowledge Of Modern Equipment
            Handling For Accuracy.</h2> -->
        </div>
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100 imgCarousle" style=" opacity: .7;" src="admin/dist/img/gallery/<?php echo $arr1['gallery_img'] ?>" alt="Second slide" width="1000" height="586">
        <div class="carousel-caption  ">
          <h1><?php echo $arr1['banner_heading'] ?></h1>
          <!-- <h1>Welcome To Unique Diagnostics & Pathology Laboratory</h1> -->
          <h2><?php echo $arr1['banner_content'] ?></h2>
          <!-- <h2>We are one of the leading pathology laboratories in Navi Mumbai. We offer a comprehensive range of clinical, and laboratory tests and profiles.</h2> -->
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 imgCarousle" style=" opacity: .7;"  src="admin/dist/img/gallery/<?php echo $arr2['gallery_img'] ?>" alt="Third slide" width="1000" height="586">
        <div class="carousel-caption  ">
          <h1><?php echo $arr2['banner_heading'] ?></h1>
          <!-- <h1>We Offering High-Quality Accurate Tests At Affordable Prices.</h1> -->
          <h2><?php echo $arr2['banner_content'] ?></h2>
          <!-- <h2>We are driven by a patient care philosophy to provide the best diagnostic center experience Pathology Tests, Health Check-up Packages, Home Sample Collection</h2> -->
          <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <main id="main">
    <div class="container">
      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container">

          <div class="row">
            <!-- <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Medilab?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div> -->
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-stretch">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="fa fa-user-md"></i>
                      <h4>Best Checkup</h4>
                      <p>Best of the technologies, Best of the reagents, Best of the procedures, Best of systems.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="fas fa-award"></i>
                      <h4>Qualityful Service</h4>
                      <p>Well trained and highly focused Pathologists, Biochemists, Scientists and Technologists gives Best of the Quality.</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class='bx bx-support'></i>
                      <h4>24 x 7 Available</h4>
                      <p> 24 X 7 Available Laboratory functions & Our helpful staff is always ready to Facilitate you.</p>
                    </div>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section><!-- End Why Us Section -->

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container-fluid">

          <div class="row">
            <div
              class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
              <!-- <a href="assets/img/aboutUs.png" class=" play-btn mb-4"></a> -->
            </div>

            <div
              class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
              <div class="section-title mb-2">
                <h6>About Us</h6>
                <h2 class="title font-weight-bold"><strong> Welcome To Our <span>Unique Diagnostic</span></strong></h2>
              </div>
              <p><b>We are one of the leading pathology laboratory in navi Mumbai. <br>
                  We offer a comprehensive range of clinical, laboratory tests and profiles. which are used for
                  prediction, early detection, diagnostic screening, confirmation and /or monitoring of the disease. <u
                    style="color: #4ab242;"> During the financial year 2022 we completed 578 patients.</u></b> </p>
              <p class="py-2">The profile comprises of a variety of test combinations which are specific to a disease or
                disorder as well as wellness profiles that are used for health and fitness screening.</p>
              <div class="row text-center">
                <!-- <div class="col-sm-4">
                  <div class="ht-rounded-skill">
                    <div class="rounded-skill skill" data-circle-starttime="0" data-circle-maxvalue="60"
                      data-circle-dialwidth="12" data-circle-type="progress">
                      <div class="skill-bg" style="border-width: 12px;">
                        <div class="skill-num" data-value="93">93%</div>
                      </div>
                      <div class="spinner-holder-one animate-0-25-a">
                        <div class="spinner-holder-two animate-0-25-b" style="transform: rotate(0deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                      <div class="spinner-holder-one animate-25-50-a">
                        <div class="spinner-holder-two animate-25-50-b" style="transform: rotate(0deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                      <div class="spinner-holder-one animate-50-75-a">
                        <div class="spinner-holder-two animate-50-75-b" style="transform: rotate(0deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                      <div class="spinner-holder-one animate-75-100-a">
                        <div class="spinner-holder-two animate-75-100-b" style="transform: rotate(-30deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                    </div> <span class="skill-title">Diagnostic Center</span>
                  </div>
                </div> -->
                <div class="col-6 ">
                  <div class="ht-rounded-skill">
                    <div class="rounded-skill skill" data-circle-starttime="0" data-circle-maxvalue="80"
                      data-circle-dialwidth="12" data-circle-type="progress">
                      <div class="skill-bg" style="border-width: 12px;">
                        <div class="skill-num" data-value="97">97%</div>
                      </div>
                      <div class="spinner-holder-one animate-0-25-a">
                        <div class="spinner-holder-two animate-0-25-b" style="transform: rotate(0deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                      <div class="spinner-holder-one animate-25-50-a">
                        <div class="spinner-holder-two animate-25-50-b" style="transform: rotate(0deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                      <div class="spinner-holder-one animate-50-75-a">
                        <div class="spinner-holder-two animate-50-75-b" style="transform: rotate(0deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                      <div class="spinner-holder-one animate-75-100-a">
                        <div class="spinner-holder-two animate-75-100-b" style="transform: rotate(-15deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                    </div> <span class="skill-title">Success Case</span>
                  </div>
                </div>
                <div class="col-6 ">
                  <div class="ht-rounded-skill">
                    <div class="rounded-skill skill" data-circle-starttime="0" data-circle-maxvalue="90"
                      data-circle-dialwidth="12" data-circle-type="progress">
                      <div class="skill-bg" style="border-width: 12px;">
                        <div class="skill-num" data-value="90">90%</div>
                      </div>
                      <div class="spinner-holder-one animate-0-25-a">
                        <div class="spinner-holder-two animate-0-25-b" style="transform: rotate(0deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                      <div class="spinner-holder-one animate-25-50-a">
                        <div class="spinner-holder-two animate-25-50-b" style="transform: rotate(0deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                      <div class="spinner-holder-one animate-50-75-a">
                        <div class="spinner-holder-two animate-50-75-b" style="transform: rotate(0deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                      <div class="spinner-holder-one animate-75-100-a">
                        <div class="spinner-holder-two animate-75-100-b" style="transform: rotate(-40deg);">
                          <div class="skill-spinner" style="border-width: 12px;"></div>
                        </div>
                      </div>
                    </div> <span class="skill-title">Happy Patients</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">

          <div class="section-title">
            <h6>Diagnostic</h6>
            <h2 class="title">Our <span>Services</span></h2>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="fa fa-stethoscope"></i></div>
                <h4><a href="">Bio-Chemistry</a></h4>
                <p>The kidneys are one of the most vital organs in your body, with one of the most important jobs.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="fa fa-medkit"></i></div>
                <h4><a href="">Pathology</a></h4>
                <p>diagnosis arrived at by an examination of the substance and function of the tissues of the body.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-pills"></i></div>
                <h4><a href="">MicroBiology</a></h4>
                <p>Diagnostic microbiology is a specialty in the sciences which focuses on applying microbiology to
                  medical diagnosis.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hand-holding-heart"></i></div>
                <h4><a href="">Serology</a></h4>
                <p>Ultrasound imaging (sonography) uses high-frequency sound waves to view inside the body.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fa fa-user-md"></i></div>
                <h4><a href="">Hormones</a></h4>
                <p>Complete Hormones is the most comprehensive urinary hormone metabolism evaluation designed to assist.
                </p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-ambulance"></i></div>
                <h4><a href="">Histopathology</a></h4>
                <p>We have experience in different areas of Health Center, We offer our Better solutions your treatment
                  is appropriate.</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->
    </div>
    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment bg-dark p-0">
      <div class="row">
        <div class="col-lg-6 col-sm-12 img-side img-left"
          style="background: url(assets/img/appointment.jpg) no-repeat left center; background-size: cover;">
        </div>
        <div class="col-lg-6 col-sm-12 container pt-3 pb-3"
          style="padding-right: 1.5rem!important; padding-left: 1.5rem!important;">
          <div class="section-title text-white mb-4 ">
            <!-- <h6>Reservation</h6> -->
            <h2 class="title text-white">Book An <span>Appointment Now!</span></h2>
          </div>
          <form action="indexDB.php" method="POST" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 offset-3 form-group">
                <input type="text" name="name" class="form-control" id="name" required placeholder="Your Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars ">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 offset-3 form-group mt-3 ">
                <input type="email" class="form-control" name="email" id="email" required placeholder="Your Email"
                  data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 offset-3 form-group mt-3">
                <input type="tel" class="form-control" name="phone" id="phone" required placeholder="Your Phone"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" minlength="10" maxlength="10">
                <div class="validate"></div>
              </div>
              <!-- <div class="col-md-6 form-group mt-3">
              onfocus="(this.type='date')"
                <input type="date"  name="date" class="form-control " required id=""
                  placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div> -->
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" name="save">Make an Appointment</button></div>
          </form>
        </div>
      </div>
    </section><!-- End Appointment Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("assets/include/footer.php"); ?>

  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function sweetalert() {
      swal({
                title: "Message Sent!",
                text: "Thank you for contacting us.",
                timer: 2000,
                showConfirmButton: false,
              });
      
    }
  </script>

</body>

</html>