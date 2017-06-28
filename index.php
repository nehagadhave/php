<?php
session_start();
$email_1=$_SESSION['email'];

define('HOST','mysql.hostinger.in');
define('USER','u312413986_admin');
define('PASS','admin123');
define('DB','u312413986_otpdb');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

$query="select f_name,l_name,email from user where email='$email_1'";
$ans=$con->query($query);

while($row = $ans->fetch_assoc())
  {

   $f_name=$row["f_name"];
    $l_name=$row["l_name"];
   $email=$row["email"];
  
}
 

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
					
                                        
                                        <!---------------------Contact Us Modal-------------------->
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
  
<!----------End Of Conact Us Modal----------------------->
					 
				
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
	<div class="banner">
	<div class="container">
		<div class="banner-matter">
			<h1>PETSHOP</h1>
			
		</div>	
		</div>
	</div>
<!---->
<div class="content">
	<div class="sport-your">
<!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 5,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  true,
									        pagination : false,
									      });
									    });
									  </script>
							 
<div class="line1">
	
		</div>
		<div id="example1">
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">

					<img class="img-responsive " src="images/1.jpg" alt="">
				<div class="run">
					
					<p>Dogs</p>
				</div>
				</a>
			</div>
			<div class="item">

					<img class="img-responsive " src="images/2.jpg" alt="">
				<div class="run">
					
					<p>Birds</p>
				</div>
				</a>
			</div>
			<div class="item">

					<img class="img-responsive " src="images/3.jpg" alt="">
				<div class="run">
				
				<p>Cats</p>
				</div>
				</a>
			</div>
			<div class="item">

					<img class="img-responsive " src="images/4.jpg" alt="">
				<div class="run">
				
				<p>Aquarium</p>
				</div>
				</a>
			</div>
			<div class="item">

					<img class="img-responsive " src="images/1.jpg" alt="">
				<div class="run">
				
				<p>Dogs</p>
				</div>
				</a>
			</div> 
			<div class="item">

					<img class="img-responsive " src="images/2.jpg" alt="">
				<div class="run">
				
				<p>Cats</p>
				</div>
				</a>
			</div>
			<div class="item">

					<img class="img-responsive " src="images/3.jpg" alt="">
				<div class="run">
					<p>Birds</p>
				</div>
				</a>
			</div>
			<div class="item">

					<img class="img-responsive " src="images/4.jpg" alt="">
				<div class="run">
				
				<p>Aquarium</p>
				</div>
				</a>
			</div>
			<div class="item">

					<img class="img-responsive " src="images/1.jpg" alt="">
				<div class="run">
				
				<p>Dogs</p>
				</div>
				</a>
			</div>
			<div class="item">

					<img class="img-responsive " src="images/2.jpg" alt="">
				<div class="run">
				
				<p>Cats</p>
				</div>
				</a>
			</div>
			<div class="item">

					<img class="img-responsive " src="images/3.jpg" alt="">
				<div class="run">
				
				<p>Birds</p>
				</div>
				</a>
			</div>
		</div>
		</div>
		<h6 class="your-in">Your Pets</h6>
		<div class="line2">
	         
		</div>
                <br><center><p1>Our Services</p1></center>

	</div>

	<div class="content-grids">
	
	

		
<!--------------------------------------------------For Our Features------------------------------------------------------> 


        <img class="img-responsive" div class="promo-area" >
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6" >
                    <div class="single-promo">
                     <i class="fa fa-book" data-toggle="modal" data-target="#breed_book_modal"></i>
                        
                   <div class="modal fade" id="breed_book_modal" role="dialog">
                   <div class="modal-dialog">

                   <!-- Modal content-->
                   <div class="modal-content">
                   <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h1 class="modal-title"><font color="White">Breed Book</font></h1>
                  </div>
                 <div class="modal-body">
                 <table>
                 <tr>
                 <td>
                 <a href="http://www.dogbreedslist.info"><img class="img-responsive " src="images/dog.png"></a><font color="red"></font>
                 </td>
                 <td>							
	             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 </td>
                 <td>
                  <a href="http://www.catbreedslist.com/"><img class="img-responsive " src="images/cat.png" alt=""></a><font color="red"></font>
                 </td>
                 <td>							
	             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 </td>
                 <td>							
	         <a href="http://fishbreeds.net"><img class="img-responsive " src="images/fish.png" alt=""></a><font color="red"></font>
                 </td>
                 <td>							
	             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 </td>
                  <td>							
	        <a href= "http://animals.nationalgeographic.com/animals/birding/backyard-birds-all"><img class="img-responsive " src="images/bird.png" alt=""></a><font color="red"></font></a>
                  </td>
                 <td>							
	             &nbsp;&nbsp;&nbsp;
                 </td>
                  <td>							
	        <a href= "http://www.petwebsite.com/"><img class="img-responsive " src="images/other_cate.png" alt=""></a><font color="red"></font></a>
                  </td>
                  </tr>
                  </table>

                 </div>

            
           </div>

           </div>   
            </div> 
                  <p>Breed Book</p>
                         
                    </div>
                </div>
	
		<div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <font color="red"><a href="pet_hostel.php"><i class="fa fa-home"></i></a></font>
                        <p>Pet Hostel</p>
                    </div>
                </div>
				
	   	<div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <a href="event.php"><i class="fa fa-paw"></i></a>
                        <p>Pet Event</p>
                    </div>
                </div>
				
			<div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                       <a href="pet_care.php"><i class="fa fa-hospital-o"></i></a>
                        <p>Pet Care</p>
                    </div>
                </div>			
	 </div>
<!------------------------------------End Of For Our Features----------------------------------------->


	<div class="clearfix"> </div>
	</div>
		<br><br><br><br>
	
	</div>	
     

	<div class="clearfix"> </div>
	</div>
		
	<div class="content-top">
		
		<div class="clearfix"> </div>
	</div> 
	<div class="content-bottom">
	</div>	
<!--footer-->
	<div class="footer">
	</div>	
</body>
</html>

<?php

if(isset($_POST['name']) && !empty($_POST['name']) 
	 AND isset($_POST['email']) && !empty($_POST['email'])
         AND isset($_POST['comment']) && !empty($_POST['comment']))
{
$u_name=$_POST['name'];
$u_email=$_POST['email'];
$u_comment=$_POST['comment'];

if(isset($_SESSION['email']))
{ 

$mysql_qry_1 ="insert into comment values('','$u_comment','$u_email','0','0')";
if($con->query($mysql_qry_1)==True)
{
//echo"inserted in comment";
}


}//end of is_set
else
{
$mysql_qry_2 ="insert into new_user values('','$u_name','$u_email')";

if($con->query($mysql_qry_2)==True)
{
//  echo"Inserted Sucessfully In New User...";
  $mysql_qry_3 ="select id,email from new_user where email='$u_email'";
  $ans_1=$con->query($mysql_qry_3);

   $rowcount=mysqli_num_rows($ans_1);

while($row_1 = $ans_1->fetch_assoc())
  {
    $u_id=$row_1["id"];
    $new_email=$row_1["email"];
  }

$mysql_qry_4 ="insert into comment values('','$u_comment','$new_email','$u_id','0')";


}
}
}
?>


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




