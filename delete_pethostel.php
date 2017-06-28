<?php

include("db_connect.php");

 
$pethostel_id=$_REQUEST['pethostel_id'];

	$query="update hostel_reg set active=2 where pid='$pethostel_id'";
	$query1 = $con->query($query);


header("Location: my_pethostel.php");
?>
