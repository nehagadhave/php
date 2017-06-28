<?php
$s_id=$_REQUEST['s_id'];

include("db_connect.php");


session_start();
if( isset( $_SESSION['email'] ) ) 
{
$email=$_SESSION['email'];

$query="select ad_title,ad_description,Category,breed_name,price,image,image_1,image_2,image_3,email from pet where s_id='$s_id'";

$ans=$con->query($query);
 
$n=mysqli_num_rows($ans);


 while($row = $ans->fetch_assoc())
  {
 
   $adtitle=$row["ad_title"];
   $addescription=$row["ad_description"];
   $cate=$row["Category"];
   $pri=$row["price"];
   $img=$row["image"];
   $img1=$row["image_1"];
   $img2=$row["image_2"];
   $img3=$row["image_3"]; 
   $email_1=$row["email"]; 
   $breed=$row["breed_name"]; 
  }

?>

<html>
<head>
<title>PETSHOP</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!--------------------------------For Modal------------------------------------->
<meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!------------------------------End Of Modal------------------------------------->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>

<!----------------------------For Browse Button----------------------------------->
<script src ="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"></script>
<script src ="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!----------------------------End Of Browse Button----------------------------------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


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
<!--------------------------Contact Us Modal---------------->
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
  
<!----------------------End Of Conact Us Modal------------------------------------------------->

				
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
	
				
		
	
	   
	<div class="container">
		<div class="register">
		<center><p1>Edit Post</p1></center>
		
		<div class=" register-top">
			<form name="edit_post" method="post" action="edit_post.php?s_id=<?php echo $s_id?>" enctype="multipart/form-data" onsubmit="return ValidateForm()">
    		
			<div> 	
				<span>Ad Title</span>
				<input type="text" name="ad_title" value="<?php echo $adtitle;?>"> 
			</div>
			<div> 	
				<span>Category</span>			
                       <table>
                        <tr>
                        <td><img class="img-responsive "><input type="radio" name="radio" value="dog" <?php if($cate == "dog") echo "checked";?>"></td>
			            <td>							
                           <img class="img-responsive " src="images/dog.png" alt="">
			            </td>
                         
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                          <td>
						  <img class="img-responsive "><input type="radio" name="radio" value="cat" <?php if($cate == "cat") echo "checked";?>>
						  </td>
			            <td>							
			              <img class="img-responsive " src="images/cat.png" alt="">
                        </td>
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                         <td><img class="img-responsive "><input type="radio" name="radio" value="fish" <?php if($cate == "fish") echo "checked";?>></td>
			<td>							
			   <img class="img-responsive " src="images/fish.png" alt="">
                        </td>
                        
                        <td>							
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                        <td><img class="img-responsive "><input type="radio" name="radio" value="bird" <?php if($cate == "bird") echo "checked";?>></td>
			<td>							
			   <img class="img-responsive " src="images/bird.png" alt="">
                        </td>
                         <td><img class="img-responsive "><input type="radio" name="radio" value="other" <?php if($cate == "other") echo "checked";?>></td>
			<td>							
			   <img class="img-responsive " src="images/other_cate.png" alt="">
                        </td>

                        </tr>
                        </table>
						
            </div>
<div> 	
			<span>Breed Name</span>
				<input type="text" name="breed" value="<?php echo $breed;?>"> 
			</div>
			<div> 	
			<span>Price</span>
				<input type="text" name="price" value="<?php echo $pri;?>"> 
			</div>
			<div>  
				<span>Ad Description</span>
				<input type="text" name="ad_description" value="<?php echo $addescription;?>">
			</div>
                        <div>
                        <span>Email</span>
                        <input type="text" name="email" value="<?echo $email_1;?>">
                        </div>
			<div>
			<span >Upload Photos </span>
			            
                        <table>
                        <tr>
                        <td>
                             <div class="form-group">
                             <input type="file" name="fileToUpload" class="file">
                             <div class="input-group col-xs-12">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                             <input type="text1" class="form-control input-lg"  value="<?php echo $img;?>">
                             <span class="input-group-btn">
                             <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                             </span>
                             </div>
                             </div>                        
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>                       

                        <td>
                             <div class="form-group">
                             <input type="file" name="fileToUpload1" class="file">
                             <div class="input-group col-xs-12">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                             <input type="text1" class="form-control input-lg"  value="<?php echo $img1;?>">
                             <span class="input-group-btn">
                             <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                             </span>
                             </div>
                             </div>
                       </td>
					   </tr>
					   </table>
					   <table>
					    <tr>
                         <td>
                             <div class="form-group">
                             <input type="file" name="fileToUpload2" class="file">
                             <div class="input-group col-xs-12">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                             <input type="text1" class="form-control input-lg" value="<?php echo $img2;?>">
                             <span class="input-group-btn">
                             <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                             </span>
                             </div>
                             </div> 
                       </td>
                               <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>
                             <div class="form-group">
                             <input type="file" name="fileToUpload3" class="file">
                             <div class="input-group col-xs-12">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                             <input type="text1" class="form-control input-lg" value="<?php echo $img3;?>">
                             <span class="input-group-btn">
                             <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                             </span>
                             </div>
                             </div>
                        </td>
                        </tr>
						
                        </table> 
                       </div>						
                         
			<div>
				<input type="submit" value="Submit" name="submit" >
			</div>
			</form>
		</div>		
	</div>
	</div>
	
	<div class="clearfix"> </div>
	
	</div>
		
	<div class="content-top">
				
	<div class="clearfix"> </div>
	</div> 
	<div class="content-bottom"></div>
		
	<div class="footer"></div>
	
	
</body>
</html>
<?php
}
else
header("Location: login.php");
?>


<?php
$s_id_1=$_REQUEST['s_id'];
//echo"sid= ".$s_id_1;
if(isset($_POST['ad_title']) && !empty($_POST['ad_title']) 
	 AND isset($_POST['ad_description']) && !empty($_POST['ad_description'])
     AND isset($_POST['price']) && !empty($_POST['price'])
	 AND isset($_POST['radio']) && !empty($_POST['radio'])
     AND isset($_POST['breed']) && !empty($_POST['breed']))
	 {
		 $cate_1 =$_POST['radio'];
		 $ad_title_1=$_POST['ad_title'];
		 $ad_description_1=$_POST['ad_description'];
                 $price_1=$_POST['price'];
                 $fileToUpload=$_POST['fileToUpload'];
         $email_2=$_POST['email'];     
         $breed_name=$_POST['breed'];         
 		 $target_dir = "uploads/";

		 
		 if($_FILES["fileToUpload"]["error"] != 4)
			{
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {

					$uploadOk = 1;
				} else {
					echo "<script type='text/javascript'>";
					echo "alert('File is not an image.');";
					echo "</script>";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				 echo "<script type='text/javascript'>";

					echo "</script>";
				
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
					echo "<script type='text/javascript'>";
					echo "alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');";
					echo "</script>";

				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
					echo "<script type='text/javascript'>";

					echo "</script>";


			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					 echo "<script type='text/javascript'>";
					echo "alert('The File has been uploaded.');";
					echo "</script>";

				} else {
					echo "<script type='text/javascript'>";
					echo "alert('Sorry, there was an error uploading your file.');";
					echo "</script>";

				}
			}

			$image=$_FILES["fileToUpload"]["name"];
			}
			else
			{
			$image="placeholder.png";
			}

       //upload second image

if($_FILES["fileToUpload1"]["error"] != 4)
{
$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check1 = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check1 !== false) {
        echo "File is an image - " . $check1["mime"] . ".";
        $uploadOk1 = 1;
    } else {
      echo "<script type='text/javascript'>";
        echo "alert('File is not an image.');";
        echo "</script>";
        $uploadOk1 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file1)) {
    echo "<script type='text/javascript'>";
        //echo "alert('Sorry, your file is too large.');";
        echo "</script>";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["fileToUpload1"]["size"] > 500000) {
        echo "<script type='text/javascript'>";
        //echo "alert('Sorry, your file is too large.');";
        echo "</script>";
 
    $uploadOk1 = 0;
}
// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
        echo "<script type='text/javascript'>";
        echo "alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');";
        echo "</script>";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "<script type='text/javascript'>";
        //echo "alert('Sorry, your file was not uploaded.');";
        echo "</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {
        echo "<script type='text/javascript'>";
        echo "alert('The File has been uploaded.');";
        echo "</script>";

    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Sorry, there was an error uploading your file.');";
        echo "</script>";
    }
}
$image1=$_FILES["fileToUpload1"]["name"];
}
else
{
$image1="placeholder.png";
}

//upload the image 3

if($_FILES["fileToUpload2"]["error"] != 4)
{
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$uploadOk2 = 1;
$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check2 = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check2 !== false) {
        echo "File is an image - " . $check1["mime"] . ".";
        $uploadOk2 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk2 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file2)) {
    //echo "Sorry, file already exists.";
    $uploadOk2 = 0;
}
// Check file size
if ($_FILES["fileToUpload2"]["size"] > 500000) {
   // echo "Sorry, your file is too large.";
    $uploadOk2 = 0;
}
// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk2 == 0) {
  //  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$image2=$_FILES["fileToUpload2"]["name"];
}
else
{
$image2="placeholder.png";
}

//upload the 4 image


if($_FILES["fileToUpload3"]["error"] != 4)
{
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$uploadOk3 = 1;
$imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check3 = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
    if($check3 !== false) {
      

        $uploadOk3 = 1;
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('File is not an image.');";
        echo "</script>";

        $uploadOk3 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file3)) {
       echo "<script type='text/javascript'>";

   echo "</script>";

    $uploadOk3 = 0;
}
// Check file size
if ($_FILES["fileToUpload3"]["size"] > 500000) {
     echo "<script type='text/javascript'>";

   echo "</script>";
    $uploadOk3 = 0;
}
// Allow certain file formats
if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
&& $imageFileType3 != "gif" ) {
    echo "<script type='text/javascript'>";
    echo "alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');";
   echo "</script>";
    $uploadOk3 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk3 == 0) {

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
		echo "<script type='text/javascript'>"; 
        	echo "alert('The file has been uploaded.');";
       		echo "</script>";  
       

    } else {
		echo "<script type='text/javascript'>"; 
        	echo "alert('Sorry, there was an error uploading your file.');";
       		echo "</script>";  

    }
}
$image3=$_FILES["fileToUpload3"]["name"];
}
else
{
$image3="placeholder.png";
}

         

        $mysql_qry ="update pet set ad_title='$ad_title_1',ad_description='$ad_description_1',Category='$cate_1',breed_name='$breed_name',price='$price_1',email='$email_2',image='$image',image_1='$image1',image_2='$image2',image_3='$image3' where s_id='$s_id_1'";

       if($con->query($mysql_qry)==True)
		{
		echo "<script type='text/javascript'>"; 
        	echo "alert('Your Post Is Updated Sucessfully');"; 
                echo "window.location.href='http://ranou.esy.es/PETSHOP/my_posts.php'";
       	        echo "</script>";   
   		}	
		else
		{

		}

}//if	 

?>



<script language="javascript" type= "text/javascript">

function ValidateForm() 
{

        var ad_title1 = document.forms["edit_post"]["ad_title"].value;
        var Category1 = document.forms["edit_post"]["radio"].value;
	var ad_description1 = document.forms["edit_post"]["ad_description"].value;
        var price1 = document.forms["edit_post"]["price"].value;
	var fileToUpload_1 = document.forms["edit_post"]["fileToUpload"].value;


	if(Category1=="" || ad_title1==""  || ad_description1=="" || price1==""  || fileToUpload_1=="" || Category1==NULL || Category1==" ")
	{
		alert("Please fill all details");
		return false;
	}
	
	$pattern = '/^\d+(?:\.\d{2})?$/';

     if (preg_match($pattern, $_POST['price1']) == '0') 
	 {
     alert("Please Enter The Correct Price");
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





