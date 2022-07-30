<?php
    include('assets/include/config.php');
    if(isset($_POST['order']))
{
    $heading=$_POST['heading'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];

    $sql=mysqli_query($conn, "INSERT INTO `treatment_order`(`heading`,`name`,`email`,`phone`,`date`) VALUES('$heading','$name','$email','$phone','$date')");

    if( $sql==1){
        echo "<script>window.location='packages.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>