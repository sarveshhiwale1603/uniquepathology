<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:info@uniquepathology.com">info@uniquepathology.com</a>
        <i class="bi bi-phone"></i> <a href="tel:+91 97024 52857">+91 97024 52857</a> 
        <i class="bi bi-whatsapp"></i><a href="https://wa.me/+91 9702472247" target="_blank">+91 9702472247</a>
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://www.facebook.com/UniqueDiagnosticsPathologyLab/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
      </div>
    </div>
  </div>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      
      <h1 class="logo me-auto"><img src="assets/img/webp/footerlogo.png" alt="" width="100%" height="100%"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto home" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto aboutUsNav" href="about_us.php">About Us</a></li>
          <li><a class="nav-link scrollto service" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto package" href="packages.php">Package</a></li>
          <li><a class="nav-link scrollto gallary" href="gallery.php">Gallery</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">Deep Drop Down 1</a></li>
              <li><a href="#">Deep Drop Down 2</a></li>
              <li><a href="#">Deep Drop Down 3</a></li>
              <li><a href="#">Deep Drop Down 4</a></li>
              <li><a href="#">Deep Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#">Drop Down 2</a></li>
          <li><a href="#">Drop Down 3</a></li>
          <li><a href="#">Drop Down 4</a></li>
        </ul>
      </li> -->
      <li><a class="nav-link scrollto contact" href="contact_us.php">Contact Us</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->
  
      <a href="" class="appointment-btn scrollto show-modal" data-toggle="modal" data-target="#myModal"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->



    <!-- Modal -->

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-box">
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <form action="indexDB.php" method="post">
                            <div class="modal-body">
                               
                                <h6 class="title mb-2 mt-2">Book Appointment</h6>
                                <!-- <p class="description">Lorem Ipsum Uinh Rtyh Ervty Cgyui.</p> -->
                                <div class="row">
                                <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control name" name="name" type="text" required placeholder="Name">
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control email" name="email" type="email" required placeholder="Email Address">
                                </div>
                              </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                <div class="form-group">
                                  <input class="form-control phone" name="phone" type="tel" required placeholder="Phone No.">
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="form-group">
                                  <input class="form-control date" name="date" type="date" required placeholder="Date">
                                </div>
                                </div>
                              </div>
                                <button class="subscribe mt-3" name="modalSave">Book Appointment</button>
                            </div>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>