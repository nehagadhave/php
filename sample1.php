<?php  

include("db_connect.php");

// Get parameters from URL
$center_lat = $_GET["lat"];
$center_lng = $_GET["lng"];
$radius = $_GET["radius"];



// Start XML file, create parent node
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

   $query = sprintf("SELECT name,active, address, lat, lng, ( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM petcare_reg HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",  
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
while ($row = @mysqli_fetch_assoc($result)){
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("name", $row['name']);
 // $newnode->setAttribute("pin", $row['pin']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("active", $row['active']);
  $newnode->setAttribute("distance", $row['distance']);
 }
echo $dom->saveXML();
?>
