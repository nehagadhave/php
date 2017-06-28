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

<!-- Updated JavaScript url -->
<script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
<!--Time Picker-->
  <script type="text/javascript" src="jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

   <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
       });
	</script>
	<script type="text/javascript">
	 $(function() {
                    $('#timepicker').timepicker({ 'scrollDefaultNow': true }).val();
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
					
                                        
                                        <!------------------Contact Us Modal-------------------->
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
            				
        				</div>
    					</div>
					</div>
  
<!----------------End Of Conact Us Modal----------------------------->
					 
				
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
		<center><p1>EVENT REGISTRATION</p1></center>		
		<div class=" register-top" >
			<form name="ev_register" action="<?php echo $_SERVER['PHP_SELF'];?>"  onsubmit="return validateform_1()" method="post">
			<div> 	
				<span>Event Name</span>
				<input type="text" name="ename" required> 
			</div>
			<div> 	
			   <span>Event For</span>
				<table>
                        <tr>
                        <td><img class="img-responsive "><input type="radio" name="radio" value="dog" required></td>
			            <td>							
                           <img class="img-responsive " src="images/dog.png" alt="">
			 
                        </td>
                         
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                          <td><img class="img-responsive "><input type="radio" name="radio" value="cat"></td>
			<td>							
			   <img class="img-responsive " src="images/cat.png" alt="">
                        </td>
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                         <td><img class="img-responsive "><input type="radio" name="radio" value="fish"></td>
			<td>							
			   <img class="img-responsive " src="images/fish.png" alt="">
                        </td>
                        
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
				<span>Date</span>
				<input type="text" name="date"  placeholder="mm-dd-yyyy" id="datepicker" required>
			</div>


		        <div> 	
				<span>Time</span>
				<input type="text" name="time" id="timepicker" placeholder="hh:mm:ss" required> 
			</div>

			<div> 	
				<span>Place</span>
				<input type="text" name="place" required> 
			</div>
			<div> 
				<span >Organized By</span>
				<input type="text" name="owner_name" id="txt" onkeyup="Validate(this)" required>
				<div id="nm"></div>
			</div>	

			<div> 
				<span >Contact Number</span>
				<input type="text" name="owner_contact" id="phone" placeholder="+91-" maxlength=10 onkeyup="validatephone(this);" required>
				<div class="status" id="ph"></div>
			</div>

                        <div> 
				<span >Email Id</span>
				<input type="text" name="owner_email" value="<?echo $email;?>"  onchange="email_validate(this.value);" readonly>
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
if(isset($_POST['ename']) && !empty($_POST['ename']) 
	AND isset($_POST['radio']) && !empty($_POST['radio'])
   AND isset($_POST['date']) && !empty($_POST['date'])
	 AND isset($_POST['time']) && !empty($_POST['time'])
	 AND isset($_POST['place']) && !empty($_POST['place'])
	 AND isset($_POST['owner_name']) && !empty($_POST['owner_name'])
	AND isset($_POST['owner_contact']) && !empty($_POST['owner_contact'])
	AND isset($_POST['owner_email']) && !empty($_POST['owner_email']))


{  
$ename = $_POST['ename'];
$category = $_POST['radio'];
$date=$_POST['date'];
$time=$_POST['time'];
$place=$_POST['place'];
$owner_name=$_POST['owner_name'];
$owner_contact=$_POST['owner_contact'];
$owner_email=$_POST['owner_email'];


$query="select * from event_reg where ename='$ename' and catagory='$category' and date='$date' and time='$time'";
	$ans=$con->query($query);
	
	if(mysqli_num_rows($ans)>0)
	{	
		echo "<script type='text/javascript'>"; 
        	echo "alert('You have already registered the event');";
       		echo "</script>";  
		
	}

	if(mysqli_num_rows($ans)==0 )
	{	

 $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$place."&sensor=true";
  $xml = simplexml_load_file($request_url) or die("url not loading");
  $status = $xml->status;
  if ($status=="OK") {
      $lat = $xml->result->geometry->location->lat;
      $lng = $xml->result->geometry->location->lng;
      $LatLng = "$lat,$lng";
        }



        $query1="insert into event_reg values('','$ename','$category','$date','$time','$place','$owner_name','$owner_contact','$owner_email','$lat','$lng',0,1)";


	$query = $con->query($query1);
		
		echo "<script type='text/javascript'>"; 
        	echo "alert('Event registered successfully! Your event will be available within few hours.');"; 
       	        echo "</script>";   
    

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


function validateform_1() 
{
        var ename1 = document.forms["ev_register"]["ename"].value;
        var catagory1 = document.forms["ev_register"]["radio"].value;
	var date1 = document.forms["ev_register"]["date"].value;
        var time1 = document.forms["ev_register"]["time"].value;
	var place1= document.forms["ev_register"]["place"].value;
	var owner_name1 = document.forms["ev_register"]["owner_name"].value; 
        var owner_contact1 = document.forms["ev_register"]["owner_contact"].value;
	var owner_email1 = document.forms["ev_register"]["owner_email"].value; 



	if(ename1=="" || catagory1==""  || date1=="" || time1==""  || place1=="" || owner_name1=="" || owner_contact1=="" || owner_email1=="" )
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

