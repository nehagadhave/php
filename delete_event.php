<?php

include("db_connect.php");

$event_id=$_REQUEST['event_id'];
echo $event_id;
	$query="update event_reg set active=2 where event_id='$event_id'";
	$query1 = $con->query($query);


header("Location: my_event.php");
?>
