<?php
include("db_connect.php");
$s_id=$_REQUEST['s_id'];

$buyer_name=$_POST['buyer_name'];
$sold_price=$_POST['price'];
$reason=$_POST['optradio'];
//echo"buyer name= ".$buyer_name;

//echo"price= ".$price;

$update=$con->query("UPDATE pet SET active='2' WHERE s_id='$s_id'");

$query="select s_id,ad_title,ad_description,Category,breed_name,price,image,image_1,image_2,image_3,email from pet where active='2'";

$ans=$con->query($query);
 
$n=mysqli_num_rows($ans);

//echo"n=".$n;
while($row = $ans->fetch_assoc())
  {
   
   $s_id=$row["s_id"];
   $adtitle=$row["ad_title"];
   $addescription=$row["ad_description"];
   $category=$row["Category"];
   $price=$row["price"];
   $img=$row["image"];
   $img_1=$row["image1"];
   $img_2=$row["image2"];
   $img_3=$row["image3"];  
   $email=$row["email"];
   $breed_name=$row["breed_name"];
  }


$mysql_qry ="insert into pet_history values('','$adtitle','$addescription','$category','$breed_name','$price','$img','$img_1','$img_2','$img_3','$email','$reason','$buyer_name','$sold_price')";

if($con->query($mysql_qry)==True)
{
 
 echo"Inserted Sucessfully...";
}	


$mysql_qry_1=" delete from pet where active='2'";


if($con->query($mysql_qry_1)==True)

{            
     header("Location:my_posts.php");               
 }

?>
