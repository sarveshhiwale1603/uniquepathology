<?php 
include("include/config.php");
if(isset($_POST['portfolio_add'])){
  $file=$_FILES['portfolio_image']['name'];    
  $company_name=$_POST['company_name'];
  $website_link=$_POST['website_link'];
  $filedet=$_FILES['portfolio_image']['tmp_name'];
  $id=$_GET['eid'];

  if(empty(($_FILES['portfolio_image']['tmp_name'])) && ($_POST['portImage']) && ($_GET['eid'])){
    $id=$_GET['eid'];
    $dnk = $_POST['portImage'];
    
    $sql=mysqli_query($conn,"update `portfolio` SET `company_name`='$company_name',`link`='$website_link',`image`='$dnk ' WHERE id='$id'");    
    }
   
  else if(!empty($_FILES['portfolio_image']['tmp_name']) && ($_POST['portImage']) || !empty($_FILES['portfolio_image']['tmp_name']) && (empty($_POST['portImage']) && ($_GET['eid']))){
    $id=$_GET['eid'];
    $loc="../assets/img/gallery/".$file;
    move_uploaded_file($filedet,$loc);
    $sql=mysqli_query($conn,"update `portfolio` SET `company_name`='$company_name',`link`='$website_link',`image`='$file' WHERE id='$id'");
  }else{

  $loc="../assets/img/gallery/".$file;
  move_uploaded_file($filedet,$loc);
  $sql=mysqli_query($conn,"insert into portfolio (company_name,link,image) values('$company_name','$website_link','$file')");}
  
  if($sql==1){
     header("location:gallery.php");
  }else{
      mysqli_error($conn);
  }

}

if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from portfolio where id='$id'");
  if($sql=1){
    header("location:gallery.php");
  }
}

$company_name="";
$website_link="";
$image="";
if(isset($_GET['eid'])){
  $sql=mysqli_query($conn,"select * from portfolio where id='$_GET[eid]'");
  $row=mysqli_fetch_array($sql);
  $company_name=$row['company_name'];
  $website_link=$row['link'];
  $image=$row['image'];
}
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Gallery</title>
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <script src="https://kit.fontawesome.com/467f9d214f.js" crossorigin="anonymous"></script>

  <style>
    .table td img {
      width: 36px;
      height: 36px;
      border-radius: 100%;
    }
 
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    
    <!-- partial:../../partials/_navbar.html -->
    <?php include("include/header.php") ?>
    <!-- partial -->
    <!-- partial:../../partials/_sidebar.html -->
    <?php include("include/sidebar.php") ?>
    <!-- partial -->
    <div class="content-wrapper">
      <!-- Info boxes -->

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Gallery</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header">
                <h4 class="card-title">Add Gallery Images</h4>  
                </div>
                <div class="card-body">
                  <form class="form-sample" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Short Description</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $company_name; ?>"
                              name="company_name">
                          </div>
                        </div>
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Website link</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $website_link; ?>"
                              name="website_link">
                          </div>
                        </div> -->
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Upload Image</b></label>
                          <div class="col-sm-9">
                            <?php
                            if(isset($_GET['eid'])){
                              ?>
                            <img src="../assets/img/gallery/<?php echo $image; ?>" width="100" height="100">
                            <input type="hidden" value="<?php echo $image; ?>" name="portImage">
                            <?php }  ?>
                            <input type="file" class="form-control" name="portfolio_image">
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-icon-text" value="Submit" name="portfolio_add">

                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php
                                                  $selectquery="select * from portfolio";
                                                  $portfolio = mysqli_query($conn,$selectquery);
                                                  if (mysqli_num_rows($portfolio)>0){

                                                  }
                                               ?>

          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive pt-3">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Short Description</th>
                          <!-- <th>Website Link</th> -->
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
											$i=0;
											while($row = mysqli_fetch_array($portfolio)) {
											?>
                        <tr class="table">
                          <td>
                            <?php echo $row["id"]; ?>
                          </td>
                          <td>
                            <?php echo $row["company_name"]; ?>
                          </td>
                          <!-- <td>
                            <?php echo $row["link"]; ?>
                          </td> -->
                          <td><img src="../assets/img/gallery/<?php echo $row["image"]; ?>" ></td>
                          <td>
                            <a class="btn btn-primary btn-rounded btn-icon"
                              href="gallery.php?eid=<?php echo $row['id']; ?>" title="Edit Blog"><i
                                class="fa fa-edit"></i></a>

                            <a class="btn btn-danger btn-rounded btn-icon"
                              href="gallery.php?delid=<?php echo $row['id']; ?>" onclick="return checkDelete()"
                              class="btn btn-primary btn-rounded btn-icon">
                              <i class="fas fa-trash"></i>
                          </td>
                        </tr>
                        <?php
											$i++;
											}
											?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/. container-fluid -->
      </section>
      </div>
      <!-- partial:../../partials/_footer.html -->
      <?php include("include/footer.php") ?>
      <!-- partial -->
   
    <!-- main-panel ends -->

  </div>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>


  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>