<?php

include("db_connect.php");


session_start();
$message="";
$email=$_POST['email'];
$password=$_POST['password'];
$encrypt_pass=md5($password);
$msg='';
if(!empty($_POST['Login'])) 
{
$ans="SELECT * FROM user WHERE email='$email' and password = '$encrypt_pass' and active=1 ";
	$result = $con->query($ans);
	
        
	if(mysqli_num_rows($result)>0)
	{	
	$_SESSION['email'] = $_POST['email'];
        $msg= "\nLogin successful";
        header("Location: index.php");
   
         }
        else
         $msg= "<error>(Invalid Username or Password)</error>";
         include 'login.php';
}

?>
