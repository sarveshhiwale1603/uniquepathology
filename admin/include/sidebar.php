<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
     <img src="../assets\img\webp\footerlogo.png" width="100%" class="rounded pl-1" style="background-color:white;" alt="">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link <?= $page == 'index.php' ? 'active':'' ?>">
                <i class="nav-icon fas fa-tachometer-alt text-red"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="gallery.php" class="nav-link <?= $page == 'gallery.php' ? 'active':'' ?>">
              <i class="nav-icon fa-solid fa-image text-skyblue"></i>
                <p>
                Gallery
                </p>
              </a>
            </li>
            <li class="nav-item">
             <a href="banner.php" class="nav-link <?= $page == 'banner.php' ? 'active':'' ?>">
              <i class="nav-icon fa-solid fa-image text-skyblue"></i>
               <p>
              Banner
               </p>
             </a>
           </li>
           <li class="nav-item">
              <a href="packages.php" class="nav-link <?= $page == 'packages.php' ? 'active':'' ?>">
              <i class="nav-icon fa-solid fa-box-open text-red"></i>
                <p>
               Packages
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="packages_order.php" class="nav-link <?= $page == 'packages_order.php' ? 'active':'' ?>">
              <i class="nav-icon fa-solid fa-box-open text-red"></i>
                <p>
               Package Orders
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Appointment.php" class="nav-link <?= $page == 'Appointment.php' ? 'active':'' ?>">
                <i class="nav-icon fas fa-calendar text-green"></i>
                <p>
                Appointment
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link <?= $page == 'contact.php' ? 'active':'' ?>">
                <i class="nav-icon fas fa-mobile text-skyblue"></i>
                <p>
                 Contact Us
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Subscriber.php" class="nav-link <?= $page == 'Subscriber.php' ? 'active':'' ?>">
                <i class="nav-icon fas fa-envelope text-green"></i>
                <p>
                Subscribe
                </p>
              </a>
            </li>
        </ul>
      </li>            
          
           
           
            
        
          
          
           
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>