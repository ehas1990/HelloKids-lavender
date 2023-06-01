<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$sms= $_POST['sms'];

$subject="HELLO KIDS - LAVENDER";
// $to="ehasalpha@gmail.com";
$to = "hellokids.lavender764@gmail.com";
$txt ="Name : ". $name . "\r\n phone : " . $phone . "\r\n  Message :" . $sms;
$sub= " $sub";
$headers = "From:" . $email;
 
if(mail($to,$sub,$txt,$headers)) {

   $data=array(
    'error'=>false,
    'message'=>"Successfully Submitted"
   );
   echo json_encode($data);
} else {
  
   $data=array(
    'error'=>true,
    'message'=>"Somethin wentwrong"
   );
   echo json_encode($data);
}

?>