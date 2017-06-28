<?php
include("db_connect.php");
session_start();
$email =$_SESSION['email'];
//echo"".$email;
$s_id=$_REQUEST['s_id'];

?>

<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="refresh" CONTENT="100">
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
    padding: 8px 8px;
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

.tab
{
padding-left:80px;
}

</style>



<script type="text/javascript">

    $(document).ready(function(){

        $("#myModal").modal('show');

    });

</script>

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
					<li><a href="#" data-toggle="modal" data-target="#modalContact"> Conact Us</a></li>
                                         <div id="modalContact" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
      				        <!-- Modal content-->
        				<div class="modal-content">
            				<div class="modal-header">
                			<button type="button" class="close" data-dismiss="modal">&times;</button>
                			<h4 class="modal-title" style="text-align-last: center">Conact Us</h4>
            				</div>
            				<div class="modal-body" style="padding:40px 50px;">
                                        <form role="form" action="index.php" method="POST">
                                        
                                        <?php if (isset($_SESSION['email']))
                                        {?>
                                        <div class="form-group">
                                        <label for="name"><span class="glyphicon glyphicon-user"></span> Name</label>
              				<input type="text" class="form-control" id="usrname" name="name" placeholder="Enter Name" value="<?php echo $f_name ,$l_name ;?>">
                                        </div>

                                        <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-globe"></span> Email</label>
                                        <input type="text" class="form-control" id="psw" name="email" placeholder="Enter Email" value="<?php echo $email;?>">
                                        </div>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <div class="form-group">
                                        <label for="name"><span class="glyphicon glyphicon-user"></span> Name</label>
              				<input type="text" class="form-control" id="usrname" name="name" placeholder="Enter Name" value="<?php echo $f_name ,$l_name ;?>">

                                        </div>

                                        <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-globe"></span> Email</label>
                                        <input type="text" class="form-control" id="psw" name="email" placeholder="Enter Email" value="<?php echo $email;?>">
                                        </div>
                                        <?php 
                                         }
                                        ?>
                                        <div class="form-group">
                                        <label for="cmt"><span class="glyphicon glyphicon-thumbs-up"></span> Comment</label>
                                        <textarea id="cmt" name="comment" class="form-control" placeholder="Write something.." style="height:100px"></textarea>
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
                                   <ul class="nav">
                                   
                                      <div id="myModal" class="modal fade">
                                <div class="modal-dialog">
      				        <!-- Modal content-->
        				<div class="modal-content">
            				<div class="modal-header">
                			<!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                			<h5 class="modal-title" style="text-align-last: center">Why do you wish to delete this Ad</h5>
            				</div>
            				<div class="modal-body" style="padding:40px 50px;">
                                         <form role="form" action="delete_post.php?s_id=<?php echo $s_id?>" method="POST">
                                        <div>
                                       <label><input type="radio" name="optradio" value="not_satisfied">I am not satisfied with the response to my Ad</label>
                                       </div>
                                       <div>
                                       <label><input type="radio" name="optradio" value="satisfied">I sucessfully found what I was looking for on PETSHOP</label>
                                       </div>
                                      <div class="form-group" name="buyer_name" id="buyer_name">
                                        <label>Buyer Name</label>
              				<input type="text" class="form-control" id="buyer_name" name="buyer_name" style="border-color:black;">
                                        </div>
                                     <div class="form-group" name="price" id="price">
                                        <label>Sold Price</label>
              				<input type="text" class="form-control" id="price" name="price" style="border-color:black;">
                                        </div>

                                       <div>
                                       <label><input type="radio" name="optradio" value="other">Other Reason</label>
                                       </div>
                                       <br>
                                        
                                       <div>
                                       <center><input type="submit" value="Submit"></center>
                                       </div> 
                                       </form>
                                      <br>
                                     <form role="form" action="my_posts.php" method="POST">
                                     <footer>
                                      <center><input type="submit" value="Back"></center>
                                    </footer>
                                       </form>
                                      </div>
                                       	
             </div>
             </div> 
             </div>
             </div>
                                   </ul>
			
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>

<!---->
<div class="container">
		<div class="register">
		<center><p1></p1></center>		
		<div class=" register-top" > 
                </div>
                </div>
</div>
	<div class="footer">
</div>		
</body>
</html>

<script>
$(document).ready(function() {
        $(".form-group").hide()
        $('[name=optradio]').on('change', function(){
            $('.form-group').toggle(this.value === 'satisfied');
        })
    });
</script>