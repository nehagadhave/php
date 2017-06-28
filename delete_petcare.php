<?php

include("db_connect.php");

 
$petcare_id=$_REQUEST['petcare_id'];

	$query="update petcare_reg set active=2 where id='$petcare_id'";
	$query1 = $con->query($query);


header("Location: my_petcare.php");
?>
