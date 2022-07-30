<?php
include("assets/include/config.php");
                        // $sql=mysqli_query($conn,"select * from `general_setting`");
                        //  $arr=mysqli_fetch_array($sql)
                    
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Packages-Unique Pathalogy</title>
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
  <link href="assets/css/ribbon.css" rel="stylesheet">
  <link href="assets/css/shortcodes.css" rel="stylesheet">
  <style>
    .package{
  color: #4ab242 !important;
  border-color: #4ab242 !important;
}
  </style>
</head>

<body>

<?php include("assets/include/header.php"); ?>
 <!-- End Header -->

  <main id="main" class="mt-5">


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container mt-5 pt-3">
        <div class="section-title">
          <h2>Packages</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
              <?php
   $sql=mysqli_query($conn,"select * from packages");   
   while($arr=mysqli_fetch_array($sql)){
  ?>
                <div class="col-xl-4 d-flex pl-0 mt-5 align-items-stretch">
                  <div class="icon-box mt-xl-0">
                  <div class="ribbon-corner ribbon-fold" style="z-index:1;" data-tor="place.left place.top"> <span><?php echo $arr['label'];?></span></div>

                    <i class="fas fa-award"></i>
                    <h1><?php echo $arr['treatment_name'];?></h1>
                    <p><?php echo $arr['description'];?></p>
                    <h3 class="mt-2 "><?php echo $arr['amount'];?>/-</h3>
                    <div class="text-center align-items-center mt-4"><button type="submit" class="appointment-btn show-modal" data-toggle="modal" data-target="#<?php echo $arr['id'];?>" style="margin-left:0px !important;" name="save">Order Now</button></div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


  </main><!-- End #main -->
  <!-- </div> -->
   <!-- Modal -->

   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-box">
                <!-- Modal -->
                <?php
   $sql=mysqli_query($conn,"select * from packages");   
   while($arr=mysqli_fetch_array($sql)){
  ?>
                <div class="modal fade"  id="<?php echo $arr['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <form action="indexDB.php" method="post">
                            <div class="modal-body">
                               
                                <h6 class="title mb-2 mt-2"><?php echo $arr['treatment_name'];?></h6>
                                <input class="form-control " name="heading" value="<?12hp echo $arr['treatment_name'];?>" type="hidden" placeholder="heading">
                                <div class="row">
                                <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control name" name="name" required type="text" placeholder="Name">
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control email" name="email" required type="email" placeholder="Email Address">
                                </div>
                              </div>
                              </div>
                              <div class="row">
                                <div class="col-12">
                                <div class="form-group">
                                  <input class="form-control phone" name="phone" required type="tel" placeholder="Phone No.">
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-group">
                                  <input class="form-control date" name="date" required type="date" placeholder="Date">
                                </div>
                                </div>
                              </div>
                                <button class="subscribe mt-3" name="order">Order Now</button>
                            </div>
                              </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
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
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    document.getElementById("")
  </script>

</body>

</html>