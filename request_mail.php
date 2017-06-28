<?php

ini_set( 'display_errors', 1 );
 
error_reporting( E_ALL );

session_start();

$to=$_POST['to'];
//echo"To: ".$to;
$msg=$_POST['msg'];
//echo"msg: ".$msg;
$buy_email="testing@yourdomain";
$headers = 'From:' . "$buy_email\r\n"; // Set from headers
$subject = 'I am interested to buy your pet'; // Give the email a subject
$result =  mail($to, $subject, $msg, $headers); // Send our email

//header("Location: index.php");

?>
