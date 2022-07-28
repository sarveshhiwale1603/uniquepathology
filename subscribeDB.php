<?php
    include('assets/include/config.php');
    if(isset($_POST['email']))
{
    $email=$_POST['email'];
    // $status=$_POST['status'];
   

    $sql=mysqli_query($conn, "INSERT INTO `subscribe`(`email`) VALUES('$email')");

    if( $sql==1){
        echo "<script> alert('New Records Added Has Been Succesfully !');window.location='subscribe.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>