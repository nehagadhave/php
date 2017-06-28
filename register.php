<!DOCTYPE html>
<html>
<head>
<title>PETSHOP</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<!--------------------------For Modal------------------------->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--------------------------End Of For Modal------------------------->




<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sport Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->

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
					<li><a href="#">Want to buy?</a>
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
					 <!-----------------------Contact Us Modal--------------->
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
  
<!---------------End Of Conact Us Modal-------------------------------------->
					
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
/li>-->
  	
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
		<div class="register">
		<center><p1>REGISTER</p1></center>		
		<div class=" register-top" > 
			<form name="register" action="<?php echo $_SERVER['PHP_SELF'];?>"  onsubmit="return validateform_1()" method="post">
				<div> 	
				<span>First Name</span>
				<input type="text" name="fname" id="txt" onkeyup="Validate(this)" required > 
				<div id="errFirst"></div> 
			</div>
			<div> 	
				<span>Last Name</span>
				<input type="text" name="lname" id="txt" onkeyup="Validate(this)" required > 
				<div id="errLast"></div> 
			</div>

		        <div> 	
				<span>Contact Number</span>
				<input type="text" name="contact" id="phone" placeholder="+91-" maxlength=10 onkeyup="validatephone(this);" required> 
			<div class="status" id="ph"></div>
			</div>

		        <div> 	
				<span>Address</span>
				<input type="text" name="address" id="address" required> 
			</div>

			<div> 	
				<span>Email</span>
				<input type="text" name="email" id = "email" onchange="email_validate(this.value);" required> 
				<div class="status" id="status"></div>
			</div>
			<div> 
				<span >Password</span>
				<input type="password" name="password" id="pass1" minlength="4" maxlength="16" required>
			</div>	

			<div> 
				<span >Confirm Password</span>
				<input type="password" name="cnfpassword" id="pass2" minlength="4" maxlength="16" onkeyup="checkPass(); return false;" required>
				<span id="confirmMessage" class="confirmMessage"></span>
			</div>				
				<input type="submit" name="submit" value="Submit"> 
			</form>
		</div>		
	</div>
	</div>
</body>
</html>


<?php
       
include("db_connect.php");


if(isset($_POST['fname']) && !empty($_POST['fname'])
	 AND isset($_POST['lname']) && !empty($_POST['lname'])
	 AND isset($_POST['contact']) && !empty($_POST['contact'])
	 AND isset($_POST['address']) && !empty($_POST['address'])
	 AND isset($_POST['email']) && !empty($_POST['email'])
	 AND isset($_POST['password']) && !empty($_POST['password']))

{  // Fetching variables of the form which travels in URL  

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
$encrypt_pass=md5($password);
$email1 = mysql_escape_string($_POST['email']);

	$query="select email from user where email='$email' and active=1";
	$ans=$con->query($query);

	if(mysqli_num_rows($ans)>0)
	{	
		echo "<script type='text/javascript'>"; 
        	echo "alert('Email id already exists!!!!!');";

       		echo "</script>";  
		
	}

	$query2="select contact from user where contact='$contact' and active=1";
	$ans2=$con->query($query2);

	if(mysqli_num_rows($ans2)>0)
	{	
		echo "<script type='text/javascript'>"; 
        	echo "alert('Contact already exists!!!!!');";

       		echo "</script>";  
		
	}

	if(mysqli_num_rows($ans)==0 && mysqli_num_rows($ans2)==0)
	{	



  $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$address."&sensor=true";
  $xml = simplexml_load_file($request_url) or die("url not loading");
  $status = $xml->status;
  if ($status=="OK") {
      $lat = $xml->result->geometry->location->lat;
      $lng = $xml->result->geometry->location->lng;
      $LatLng = "$lat,$lng";
        }





        $query1="insert into user values('$fname','$lname',$contact,'$address','$email','$encrypt_pass',0,'$hash','$lat','$lng')";
	$query = $con->query($query1);

		echo "<script type='text/javascript'>"; 
        	echo "alert('You have registered successfully! Please verify your Email id by clicking the activation link that has been sent to your email.');"; 
                echo "window.location = 'https://accounts.google.com'";
       	        echo "</script>";   
   
		//Send the Verification Email

	$to      = $email; // Send email to our user
	$subject = 'Signup | Verification'; // Give the email a subject 
	$message = 'Thanks for signing up!
		    Your account has been created.
		    Please Verify your email by clicking on the below link.
		    You can login with the following credentials afterwards.
 
                ------------------------
                Username: '.$email.'
		Password: '.$password.'
		------------------------
 
		Please click this link to verify your email:
		http://ranou.esy.es/PETSHOP/login.php?email='.$email.'&hash='.$hash.'
		'; // Our message above including the link
                     
	$headers = 'From:ranou.petshop@gmail.com' . "\r\n"; // Set from headers

	$result =  mail($to, $subject, $message, $headers); // Send our email
        }


}//end of if(isset)


?>


<script language="javascript">
function Validate(txt) {

    txt.value = txt.value.replace(/[^a-zA-Z-'\s\r.]+/g, '');
}

function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
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


function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} 

function validateform_1() 
{
        var fname1 = document.forms["register"]["fname"].value;
        var lname1 = document.forms["register"]["lname"].value;
	var contact1 = document.forms["register"]["contact"].value;
        var address1 = document.forms["register"]["address"].value;
	var email1= document.forms["register"]["email"].value;
	var password1 = document.forms["register"]["password"].value; 
        var cnfpassword1 = document.forms["register"]["cnfpassword"].value; 



	if(fname1=="" || lname1==""  || contact1=="" || address1==""  || email1=="" || password1=="" || cnfpassword1=="" )
	{
		alert("Please fill all details");
		return false;
	}
}

</script>



<script language="javascript">
function Validate(txt) {

    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
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







