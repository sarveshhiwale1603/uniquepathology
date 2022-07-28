<?php
include"assets/include/config.php";
if(isset($_POST['email'])){
  $email=$_POST['email'];
  $sql=mysqli_query($conn, "INSERT INTO `subscribe`(`email`) VALUES('$email')");

    $status=1;
     
  $from = 'Enquiry <'.$email.'>' . "\r\n";
  $sendTo = 'Enquiry <'.$email.'>';
  $subject = 'Unique Pathology';
  // $fields = array( 'name' => 'name' );
  $from = 'Agreerent: 1.0' . "\r\n";
  $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  
  $emailText = '
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="x-apple-disable-message-reformatting"> 
      <title></title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
      <style>
        
      </style>
  </head>
  <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
     <div>
     <h1>'.$email.'</h1>
     </div>
  </body>
  </html>';
  
  try{
    foreach($_POST as $key => $value){
      if(isset($fields[$key])){
        $emailText.="$fields[$key]: $value\n";
      }
    }
   if( mail($sendTo,$subject,$emailText, "From:" .$from)){
  
    $sql=mysqli_query($conn,"INSERT INTO `subscribe`(`email`,`status`) 
     VALUES ('$email','$status')");
     if($sql=1){
       echo "<script>alert('Agent Registered Successfully');</script>";  
      header("location:index.php");  }
     else{
       echo "<script>alert('Something Wrong');</script>";
     }
   }else{
      echo "$sendTo $subject $emailText $from";
   }
  }
  catch(\Exception $e){
    echo "not done";
  }
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $encode=json_encode($responseArray);
    header('content-Type: application/json');
    echo $encoded;
  }
  else{
    echo $responseArray['message'];
  }
  }
?>