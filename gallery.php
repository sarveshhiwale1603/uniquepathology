<?php include('assets/include/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Unique Pathology - Gallery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
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
  .img-fluid{
    padding: .8rem;
  }
</style>
</head>
<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
                <i class="bi bi-phone"></i> +1 5589 55488 55
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <?php include("assets/include/header.php"); ?>
   <!-- End Header -->

    <main id="main" class=" mt-5 pt-5">

       <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">
  
          <div class="section-title">
            <h2>Gallery</h2>
            </div>
        </div>
  
        <div class="container-fluid pt-3">
          <div class="row g-0">
  <?php
   $sql=mysqli_query($conn,"select * from general_setting");   
   while($arr=mysqli_fetch_array($sql)){
  ?>
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="admin/dist/img/gallery/<?php echo $arr['gallery_img'];?>" class="galelry-lightbox">
                  <img src="admin/dist/img/gallery/<?php echo $arr['gallery_img'];?>" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  <?php } ?>
            <!-- <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                  <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
   -->
          </div>
  
        </div>
      </section><!-- End Gallery Section -->
  
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
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>