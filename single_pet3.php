<?php
$image=$_REQUEST['img'];
$photoId = isset($_REQUEST['photoId']) ? $_REQUEST['photoId'] : null;
session_start();
$_SESSION['img'] =$image;
$photoId = isset($_REQUEST['photoId']) ? $_REQUEST['photoId'] : null;

include("db_connect.php");


$query="select ad_title,ad_description,price,image,image_1,image_2,image_3,email from pet where image='$photoId'";

$ans=$con->query($query);
 
$n=mysqli_num_rows($ans);

 while($row = $ans->fetch_assoc())
  {

   $ad_title=$row["ad_title"];
   $ad_description=$row["ad_description"];
   $price=$row["price"];
   $image=$row["image"];
   $image_1=$row["image_1"];
   $image_2=$row["image_2"];
   $image_3=$row["image_3"];
   $email=$row["email"];  
  }



  function convertCurrency($amount, $from, $to){
        $url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
        $data = file_get_contents($url);
        preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
        $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
        return round($converted, 3);
      }

      # Call function  
      $a=convertCurrency($price, "INR","USD");
      $b=convertCurrency($price, "INR","GBP");
      $c=convertCurrency($price, "INR","EUR");
?>

<!DOCTYPE html>
<html>
<head>
<title>PETSHOP</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sport Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

<style>

input 
textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #ce232a;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

.modal-header {
background-color: #ce232a;
    color: white;
    padding: 12px 20px;
    border: none;
}

.close {
 color: white;
    
}
</style>
</head>
<body> 
<!--header-->
	<div class="line">
	
	</div>
	<div class="header">
		<div class="logo">
			<a href="#"><img src="images/small_logo.png" alt="" ></a>
		</div>
		<div  class="header-top">
			<div class="header-grid">
				<ul class="header-in">
                                        <?php if (!isset($_SESSION['email'])){ 
                                         ?>                                       
                                               	<li ><a href="login.php">Login</a> </li>
                                          
					<?php
                                          }
                                         ?>
					</ul>

					
					<div class="online">

                                        <a href="#" ></a>

					</div> 
					<div class="clearfix"> </div> 
			</div>
			<div class="header-bottom">
				<div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="#">Want To Buy?</a>
                            <ul>
							<li><a href="http://ranou.esy.es/PETSHOP/pet_buy_dog.php">DOG</a></li>
							<li><a href="http://ranou.esy.es/PETSHOP/pet_buy_cat.php">CAT</a></li>
							<li><a href="http://ranou.esy.es/PETSHOP/pet_buy_bird.php">BIRD</a></li>
			                                <li><a href="http://ranou.esy.es/PETSHOP/pet_buy_fish.php">AQUARIUM</a></li>
  	                                                <li><a href="http://ranou.esy.es/PETSHOP/pet_buy_other.php">OTHER</a></li>
  	
               				</ul>
                            </li>
					<li><a href="want_to_sell.php">Want to sell?</a>	
					</li>
					<li><a href="About_us.php">About Us</a></li>
					<!------------------------------Contact Us Modal--------------------------->
                                         <li><a href="#" data-toggle="modal" data-target="#modalContact"> Contact Us</a></li>
                                         <div id="modalContact" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
      				        <!-- Modal content-->
        				<div class="modal-content">
            				<div class="modal-header">
                			<button type="button" class="close" data-dismiss="modal">&times;</button>
                			<h4 class="modal-title" style="text-align-last: center">Contact Us</h4>
            				</div>
            				<div class="modal-body" style="padding:40px 50px;">
                                        <form name="contact_us" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" onsubmit="return validateform()">
                                        
                                        <?php if (isset($_SESSION['email']))
                                        {?>
                                        <div class="form-group">
                                        <label for="name"><span class="glyphicon glyphicon-user"></span> Name</label>
              				<input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $f_name ,$l_name ;?>" id="txt" onkeyup="Validate(this)" required>
                                        </div>

                                        <div class="form-group">
                                        <label for="email"><span class="glyphicon glyphicon-globe"></span> Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $email;?>" id = "email" onchange="email_validate(this.value);" required>
                                       <div class="status" id="status"></div>
                                        </div>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <div class="form-group">
                                        <label for="name"><span class="glyphicon glyphicon-user"></span> Name</label>
              				<input type="text" class="form-control" id="usrname" name="name" placeholder="Enter Name" id="txt" onkeyup="Validate(this)" required>
                                        </div>

                                        <div class="form-group">
                                        <label for="email"><span class="glyphicon glyphicon-globe"></span> Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email" id="email"  onchange="email_validate(this.value);" required>
                                       <div class="status" id="status"></div> 
                                       </div>
                                        <?php 
                                         }
                                        ?>
                                        <div class="form-group">
                                        <label for="cmt"><span class="glyphicon glyphicon-thumbs-up"></span> Comment</label>
                                        <textarea id="cmt" name="comment" class="form-control" placeholder="Write something.." style="height:100px" required></textarea>
                                        </div>
                                       <center><input type="submit" value="Submit"></center>
                                        <center><label for="cont"><span class="glyphicon glyphicon-earphone"></span> Contact Us</label></center>  
                                        <center><lable>020-25233493</lable></center> 
                                        <center><lable>ranou.petshop@gmail.com</lable></center>                  
                                       </form>
                                      </div>	
            				<!--<div class="modal-footer">
                			
            				</div>-->
        				</div>
    					</div>
					</div>
  
<!----------------------------------------------------------End Of Conact Us Modal----------------------------------------------------------------------------------------------->
					 
									 
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
					<ul class="nav">
                                        <?php if (isset($_SESSION['email'])){ 
                                         ?>
                                         
                                        <li><a href="#">My Profile</a> 
                                     <ul>
							<li><a href="http://ranou.esy.es/PETSHOP/edit_profile.php">Edit Profile</a></li>
							<li><a href="http://ranou.esy.es/PETSHOP/my_posts.php">My Posts</a></li>
                                                        <li><a href="http://ranou.esy.es/PETSHOP/my_event.php">My Events</a></li>
							 <li><a href="http://ranou.esy.es/PETSHOP/my_pethostel.php">My Pet Hostel</a></li>
							<li><a href="http://ranou.esy.es/PETSHOP/my_petcare.php">My Pet Care</a></li>
               				                <li><a href="http://ranou.esy.es/PETSHOP/logout.php">Logout</a></li>
                                                        
  	
               				</ul>		
        
                                         </li>
                     
                                        
                                        <?php } ?>
							
					</ul>
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>

	<!---->	
	<div class="container">
<div class="single">
				<div class="col-md-9 top-in-single">
					<div class="col-md-5 single-top">	
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image img-responsive" src="http://ranou.esy.es/PETSHOP/uploads/<?php echo $image?>" alt="" >
									<img class="etalage_source_image img-responsive" src="http://ranou.esy.es/PETSHOP/uploads/<?php echo $image?>" alt="" >
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="http://ranou.esy.es/PETSHOP/uploads/<?php echo $image_1?>" alt="" >
								<img class="etalage_source_image img-responsive" src="http://ranou.esy.es/PETSHOP/uploads/<?php echo $image_1?>" alt="" >
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="http://ranou.esy.es/PETSHOP/uploads/<?php echo $image_2?>" alt=""  >
								<img class="etalage_source_image img-responsive" src="http://ranou.esy.es/PETSHOP/uploads/<?php echo $image_2?>" alt="" >
							</li>
						    <li>
								<img class="etalage_thumb_image img-responsive" src="http://ranou.esy.es/PETSHOP/uploads/<?php echo $image_3?>"  alt="" >
								<img class="etalage_source_image img-responsive" src="http://ranou.esy.es/PETSHOP/uploads/<?php echo $image_3?>" alt="" >
							</li>
						</ul>

					</div>	
					<div class="col-md-7 single-top-in">
						<div class="single-para">
							<h4><?php echo $ad_title?></h4>
							<p><?php echo $ad_description?></p>
							
							<div class="clearfix"> </div>
<td>
     <select>
        <option onclick="window.location='http://ranou.esy.es/PETSHOP/single_pet.php?photoId=<?php echo $image ?>'">Rs</option>
        <option onclick="window.location='http://ranou.esy.es/PETSHOP/single_pet1.php?photoId=<?php echo $image ?>'">Doller</option>
        <option onclick="window.location='http://ranou.esy.es/PETSHOP/single_pet2.php?photoId=<?php echo $image ?>'">Pound</option>
        <option onclick="window.location='http://ranou.esy.es/PETSHOP/single_pet3.php?photoId=<?php echo $image ?>'">Euro</option>
     </select>
  </td>

					<label  class="add-to">€<?php echo $c ?></label>
							<div class="available">
								<h6>Contact Person:</h6>
								<ul><?php echo $email ?>
								
							
						</div>
							        <?php
								if( isset( $_SESSION['email'] ) ) 
								{
							    	
								?>
							        
								 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Request To Buy</button>
                                                                   <div class="modal fade" id="myModal" role="dialog">
                                                                   <div class="modal-dialog">
    
      <!-- Modal content-->
                                                                   <div class="modal-content">
         							   <div class="modal-header">
                			                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                			                           <h4 class="modal-title" style="text-align-last: center" font color="white">Request To Buy Pet</h4></font>
            				                           </div>

                                                               <div class="modal-body" style="padding:40px 50px;">
                                                               <form role="form" action="request_mail.php" method="POST">
                                                                <div class="form-group">
                                                                <label for="to">To</label>
              				                        <input type="text" class="form-control" id="to_name" name="to" value="<?php echo $own_email ;?>">
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="Sub">Subject</label>
                                                                <?php
                                                                 $to      = $own_email; // Send email to our user
	                                                         
$message ='	                
Hello '.$own_fname.'
I am '.$buy_fname.' '.$buy_lname.'. I like the pet that you posted on PETSHOP site and I would like to buy it.Please contact me on my information mentioned below.
Thank you.
------------------------
Address: '.$buy_address.'
Contact: '.$buy_contact.'
------------------------
'; // Our message above including the link

 // Our message above including the link
                     
	$headers = 'From:' . "$email\r\n"; // Set from headers

	        
        ?>

                                                                  <textarea id="sub" name="msg" class="form-control"  style="height:100px">
                                                                <?php echo $message ;?>
                                                               </textarea>
                                                                </div>
                                                             <center><input type="submit" value="Send"></center>
                                                              </div>
        
       </form>
      </div>
      
    </div>
  </div>
  
</div>

                                                                								
                                                                <?php }
								else { ?>
								<a href="login.php" class="cart ">Request to buy</a>
								<?php } ?>

						</div>
					</div>
				<div class="clearfix"> </div>
				<div class="product-top">
		
	            </div>
				</div>
				<div class="col-md-3">
					<div class="single-bottom">
						
					<div class="single-bottom">
						
				</div>
				</div>
				<div class="clearfix"> </div>		
		</div>
	</div>

	<!---->
<!--footer-->
	<div class="footer">
		<div class="col-md-3 footer-left">
			
		<div class="clearfix"> </div>
	</div>
	</div>
</body>
</html>


<script language="javascript">
function Validate(txt) {

    txt.value = txt.value.replace(/[^a-zA-Z-'\s\r.]+/g, '');
}

function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) == false)
    {
    document.getElementById("status").innerHTML    = "<error>Email address is not valid yet.</error>";
    }
    else
    {
    document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";	
    }
}

function validateform() 
{
        var name = document.forms["contact_us"]["name"].value;
        var email = document.forms["contact_us"]["email"].value;
	var comment = document.forms["contact_us"]["comment"].value;
        


	if(name=="" || email==""  || comment=="")
	{
		alert("Please fill all details");
		return false;
	}
}

</script>






