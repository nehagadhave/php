<?php  

 error_reporting(E_ERROR|E_WARNING);


include("db_connect.php");


$center_lat = $_GET["lat"];
$center_lng = $_GET["lng"];
$radius = $_GET["radius"];
 $variable='hiiiii';

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

if (!$con) {
  die("Not connected : " . mysqli_error());
}

// Set the active mySQL database 16
$db_selected = mysqli_select_db($con,DB);
if (!$db_selected) {
  die ("Can\'t use db : " . mysqli_error());
}



$query = sprintf("SELECT  catagory,ename,place,active, lat, lng,( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM event_reg HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",  
 mysqli_real_escape_string($con,$center_lat),
  mysqli_real_escape_string($con,$center_lng),
  mysqli_real_escape_string($con,$center_lat),
  mysqli_real_escape_string($con,$radius));
  $result = mysqli_query($con,$query);


if (!$result) {
  die("Invalid query: " . mysqli_error());   
}


header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysqli_fetch_assoc($result))
{
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("distance", $row['distance']);
  $newnode->setAttribute("catagory", $row['catagory']);
  $newnode->setAttribute("ename", $row['ename']);
  $newnode->setAttribute("place", $row['place']);
  $newnode->setAttribute("active", $row['active']);
  $newnode->setAttribute("variable", $variable);
}
echo $dom->saveXML();
?>
