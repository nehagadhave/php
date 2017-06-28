<?php
session_start();
if( isset( $_SESSION['email'] ) ) 
{
$email=$_SESSION['email'];
?>
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
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />		
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
 <!-----------------------Contact Us Modal--------------------->
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
  
<!----------------End Of Conact Us Modal--------------------->
					 					 
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
		<div class="register">
		<h2>REGISTER</h2>		
		<div class=" register-top" >
			<form name="register" action="<?php echo $_SERVER['PHP_SELF'];?>"  onsubmit="return validateform_1()" method="post">
			<div> 	
				<span>Hospital Name</span>
				<input type="text" name="name" required> 
			</div>
                        <div> 	
				<span>Address</span>
				<input type="text" name="pin" required> 
			</div>

                         <div> 	
				<span>Category</span>			
                       <table>
                        <tr>
                        <td><img class="img-responsive "><input type="radio" name="radio" value="dog" required></td>
			            <td>							
                           <img class="img-responsive " src="images/dog.png" alt="">
			            </td>
                         
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                          <td>
						  <img class="img-responsive "><input type="radio" name="radio" value="cat">
						  </td>
			            <td>							
			              <img class="img-responsive " src="images/cat.png" alt="">
                        </td>
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                         <td><img class="img-responsive "><input type="radio" name="radio" value="fish"></td>
			<td>							
			   <img class="img-responsive " src="images/fish.png" alt="">
                        </td>
                        
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                        <td><img class="img-responsive "><input type="radio" name="radio" value="bird"></td>
			<td>							
			   <img class="img-responsive " src="images/bird.png" alt="">
                        </td>
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                        <td><img class="img-responsive "><input type="radio" name="radio" value="other"></td>
			            <td>							
                           <img class="img-responsive " src="images/other_cate.png" alt="">
			            </td>
                        </tr>
                        </table>
						
            </div>

                        <div> 	
				<span>Licence No.</span>
				<input type="text" name="licence" required> 
			</div>

		        <div> 	
				<span>Contact Number</span>
				<input type="text" name="contact" id="phone" placeholder="+91-" maxlength=10 onkeyup="validatephone(this);" required>
				<div class="status" id="ph"></div> 
			</div>

		       	<div> 	
				<span>Email</span>
				<input type="text" name="email" value="<?echo $email;?>" onchange="email_validate(this.value);" readonly>
				<div class="status" id="status"></div>
			</div>
				
				<input type="submit" name="submit" value="Submit"> 
			</form>
		</div>		
	</div>
</div>








<!--footer-->
	<div class="footer">
		
</body>
</html>
<?php
}
else
header("Location: login.php");
?>

<?php


include("db_connect.php");




if(isset($_POST['name']) && !empty($_POST['name'])
	 AND isset($_POST['pin']) && !empty($_POST['pin'])
	 AND isset($_POST['radio']) && !empty($_POST['radio'])
	 AND isset($_POST['licence']) && !empty($_POST['licence'])
	 AND isset($_POST['contact']) && !empty($_POST['contact'])
	 AND isset($_POST['email']) && !empty($_POST['email']))

{ 
 // Fetching variables of the form which travels in URL  

$name = $_POST['name'];
$pin = $_POST['pin'];
$category=$_POST['radio'];
$licence=$_POST['licence'];
$contact=$_POST['contact'];
$email=$_POST['email'];
	
	$query="select licence from petcare_reg where licence='$licence'";
	$ans=$con->query($query);
	if(mysqli_num_rows($ans)>0)
	{	
		echo "<script type='text/javascript'>"; 
        	echo "alert('Licence No. already exists!!!!!');";
       		echo "</script>";  
		
	}


	if(mysqli_num_rows($ans)==0)
	{	

    $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($pin)."&sensor=false";
    $details=file_get_contents($url);
    $result = json_decode($details,true);

    $lat=$result['results'][0]['geometry']['location']['lat'];

    $lng=$result['results'][0]['geometry']['location']['lng'];
     $address=$pin;

    $result = mysqli_query($con,$query);

        $query1="insert into petcare_reg values('','$name','$pin','$category','$licence','$contact','$email','$lat','$lng',0)";
	$query = $con->query($query1);

		
		echo "<script type='text/javascript'>"; 
        	echo "alert('You have registered successfully. Your hospital will be available within few hours.')"; 
                echo "</script>"; 
        
        }


}//end of if(isset)


?>

<script language="javascript">
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

function validateform_1() 
{
        var name1 = document.forms["register"]["name"].value;
        var pin1 = document.forms["register"]["pin"].value;
        var category1 = document.forms["register"]["radio"].value;
        var licence1 = document.forms["register"]["licence"].value;
	var contact1 = document.forms["register"]["contact"].value;
	var email1= document.forms["register"]["email"].value;


	if(name1=="" ||  pin1==""  || category1=="" || licence1==""  || contact1=="" || email1=="")
	{
		alert("Please fill all details");
		return false;
	}




function validatelicence(licence1)
	{

		var reg = new RegExp("^[1-9][0-9]{5}$");
		
		if(!reg.test(licence1))

			return 1;
		else
			return 0;
	}



	if (validatelicence(licence1)) 
	{
		alert("Licence Number not valid");
		 return false;
	 }



}
</script>

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
