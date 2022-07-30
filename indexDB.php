<?php
    include('assets/include/config.php');
    // Index
    if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];

    $sql=mysqli_query($conn, "INSERT INTO `make_an_appointment`(`name`,`email`,`phone`,`date`) VALUES('$name','$email','$phone','$date')");

    if( $sql==1){
        echo "<script>window.location='index.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}

// Packages
// if(isset($_POST['order']))
// {
//     $heading=$_POST['heading'];
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $phone=$_POST['phone'];
//     $date=$_POST['date'];

//     $sql=mysqli_query($conn, "INSERT INTO `treatment_order`(`heading`,`name`,`email`,`phone`,`date`) VALUES('$heading','$name','$email','$phone','$date')");
//     // $sql=mysqli_query($conn, "INSERT INTO `treatment_order`(`heading`,`name`,`email`,`phone`,`date`) VALUES('$heading','$name','$email','$phone','$date')");

//     if( $sql==1){
//         echo "<script>window.location='packages.php';</script>";
//     }
//     else{
//         echo "<script> alert('Connection Failed !');</script>";

//     }
// }

// Modal

if(isset($_POST['modalSave']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];

    $sql=mysqli_query($conn, "INSERT INTO `make_an_appointment`(`name`,`email`,`phone`,`date`) VALUES('$name','$email','$phone','$date')");

    if( $sql==1){
        echo "<script>window.location='index.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>
