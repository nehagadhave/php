<?php  

 error_reporting(E_ERROR|E_WARNING);


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

$db_selected = mysqli_select_db($con,DB);
if (!$db_selected) {
  die ("Can\'t use db : " . mysqli_error());
}



$query = sprintf("SELECT  address, lat, lng,( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM user HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",  
 mysqli_real_escape_string($con,$center_lat),
  mysqli_real_escape_string($con,$center_lng),
  mysqli_real_escape_string($con,$center_lat),
  mysqli_real_escape_string($con,$radius));
  $result = mysqli_query($con,$query);



 $query1="SELECT pet.Category,pet.ad_title, pet.ad_description, pet.price, pet.email, pet.image,pet.active, user.email,user.lat,user.lng, user.address
FROM pet, user
WHERE pet.email = user.email
AND pet.Category = 'other'";  
  $result1 = mysqli_query($con,$query1);



if (!$result) {
  die("Invalid query: " . mysqli_error());   
}


header("Content-type: text/xml");
// Iterate through the rows, adding XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
$row1 = @mysqli_fetch_assoc($result1);
if($row1['Category'] == 'other')
{
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("address", $row1['address']);
  $newnode->setAttribute("lat", $row1['lat']);
  $newnode->setAttribute("lng", $row1['lng']);
  $newnode->setAttribute("distance", $row['distance']);
  $newnode->setAttribute("ad_title", $row1['ad_title']);
  $newnode->setAttribute("ad_description", $row1['ad_description']);
  $newnode->setAttribute("price", $row1['price']);
  $newnode->setAttribute("image", $row1['image']);
  $newnode->setAttribute("Category", $row1['Category']);
  $newnode->setAttribute("breed_name", $row1['breed_name']);
  $newnode->setAttribute("active", $row1['active']);
  $newnode->setAttribute("variable", $variable);
 }
}
echo $dom->saveXML();
?>
