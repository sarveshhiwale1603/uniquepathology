<?php
    include('assets/include/config.php');
    if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn, "INSERT INTO `contact_us`(`name`,`email`,`subject`,`message`) VALUES('$name','$email','$subject','$message')");

    if( $sql==1){
        echo "<script> alert('New Records Added Has Been Succesfully !');window.location='contact_us.php';</script>";
    }
    else{
        echo "<script> alert('Connection Failed !');</script>";

    }
}
?>