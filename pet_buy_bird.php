<?php
session_start();
$email_1=$_SESSION['email'];
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

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Tangerine">
<!--------------------------For Modal------------------------->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
				        <!----------Contact Us Modal---------------------------------->
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
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $email_1;?>" id = "email" onchange="email_validate(this.value);" required>
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
  
<!--------------------End Of Contact Us Modal----------------------->
					 
									 
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
		<p1><center>NEAR ME</center></p1>	
		<div class=" register-top" >
                
	


<div class="map-responsive">
				<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBgeEEZZHKCkYp0tPK6srhJMiFocLnRnnE"
            type="text/javascript"></script>
</div>


    <script type="text/javascript">

    var map;
    var markers = [];
    var infoWindow;
    var locationSelect;

    function load() {
 if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);

      map = new google.maps.Map(document.getElementById("map"), {
        center: LatLng,
        zoom: 15,
        mapTypeId: 'roadmap',
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
      });

 var marker = new google.maps.Marker({
          position: LatLng,
          map: map,
          title: 'Hello World!'
        });
     marker.addListener('click', function() {
          infowindow.open(map, marker);
        });


        infoWindow = new google.maps.InfoWindow();
 
      locationSelect = document.getElementById("locationSelect");
      locationSelect.onchange = function() {
        var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
        if (markerNum != "none"){
          google.maps.event.trigger(markers[markerNum], 'click');
        }
     }
});
}//navigator
} //load



   function searchLocations() {
     var address = document.getElementById("addressInput").value;
     var geocoder = new google.maps.Geocoder();
     geocoder.geocode({address: "address"}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
        searchLocationsNear(results[0].geometry.location);
       } else {
         alert(address + ' not found');
       }
     });
   }



   function clearLocations() {
     infoWindow.close();
     for (var i = 0; i < markers.length; i++) {
       markers[i].setMap(null);
     }
     markers.length = 0;

     locationSelect.innerHTML = "";
     var option = document.createElement("option");
     option.value = "none";
     option.innerHTML = "See all results:";

   }





   function searchLocationsNear(center) {
     clearLocations();

  var radius = 10;


    navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
var lat=p.coords.latitude;
var lng=p.coords.longitude;

var searchUrl = 'http://ranou.esy.es/PETSHOP/bird_sample4.php?lat=' + lat + '&lng=' + lng + '&radius=' + radius;


     downloadUrl(searchUrl, function(data) {
       var xml = parseXml(data);
       var markerNodes = xml.documentElement.getElementsByTagName("marker");
       var bounds = new google.maps.LatLngBounds();
       for (var i = 0; i < markerNodes.length; i++) {
         var name = markerNodes[i].getAttribute("name");
         var ad_title = markerNodes[i].getAttribute("ad_title");
         var ad_description = markerNodes[i].getAttribute("ad_description");
         var price = markerNodes[i].getAttribute("price");
         var image = markerNodes[i].getAttribute("image");
         var address = markerNodes[i].getAttribute("address");
         var Category = markerNodes[i].getAttribute("Category");
         var breed_name = markerNodes[i].getAttribute("breed_name");
         var active = markerNodes[i].getAttribute("active");
         var distance = parseFloat(markerNodes[i].getAttribute("distance"));
         var latlng = new google.maps.LatLng(
              parseFloat(markerNodes[i].getAttribute("lat")),
              parseFloat(markerNodes[i].getAttribute("lng")));
         if(active==1){
         createOption(name, distance, i);
         createMarker(image,latlng, name, address,ad_title,ad_description,price,breed_name);
         bounds.extend(latlng);}
       }
       map.fitBounds(bounds);
       locationSelect.style.visibility = "hidden";
       locationSelect.onchange = function() {
         var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
         google.maps.event.trigger(markers[markerNum], 'click');
       };
});

      });
    }

   
    function createMarker(image,latlng, name, address,ad_title,ad_description,price,breed_name) {
    var b = document.getElementById('browsers').value;
    var price1 = document.getElementById('price1').value;
//alert("hii   "+b);
var myarr = price1.split("-");
var myvar = myarr[0] + "-" + myarr[1];





 if((b == "Breed Name/Category") && (Number(price) <= Number(myarr[1])) && (Number(price) >= Number(myarr[0])))
   {
    var image1="http://ranou.esy.es/PETSHOP/uploads/"+ image;
    var html =   '<div class="iw-content">' +
                      '<div class="iw-subTitle">' + ad_title + '</div>' +
                      '  <a href="http://ranou.esy.es/PETSHOP/single_pet.php?photoId='+ image +'">' +
                      '<img src=' + image1 + ' alt='+image1 + image +' height="115" width="115">' +
                      '<div class="iw-subTitle">Price</div>' +
                      '<p>' + price + '</p>'+
                      '</div>' +
                    '<div class="iw-bottom-gradient"></div>';


      var marker = new google.maps.Marker({
        map: map,
        position: latlng
      });

      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
      markers.push(marker);
          var contentString= ad_title;
    
}//if lower case


else if((b.toLowerCase() == breed_name.toLowerCase()) && price1=="Price")
{
    var image1="http://ranou.esy.es/PETSHOP/uploads/"+ image;
    var html =   '<div class="iw-content">' +
                      '<div class="iw-subTitle">' + ad_title + '</div>' +
                      '  <a href="http://ranou.esy.es/PETSHOP/single_pet.php?photoId='+ image +'">' +
                      '<img src=' + image1 + ' alt='+image1 + image +' height="115" width="115">' +
                      '<div class="iw-subTitle">Price</div>' +
                      '<p>' + price + '</p>'+
                      '</div>' +
                    '<div class="iw-bottom-gradient"></div>';


      var marker = new google.maps.Marker({
        map: map,
        position: latlng
      });

      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
      markers.push(marker);
          var contentString= ad_title;
}//if lower case


else if((b.toLowerCase() == breed_name.toLowerCase()) && (Number(price) <= Number(myarr[1])) && (Number(price) >= Number(myarr[0])))
{
    var image1="http://ranou.esy.es/PETSHOP/uploads/"+ image;
    var html =   '<div class="iw-content">' +
                      '<div class="iw-subTitle">' + ad_title + '</div>' +
                      '  <a href="http://ranou.esy.es/PETSHOP/single_pet.php?photoId='+ image +'">' +
                      '<img src=' + image1 + ' alt='+image1 + image +' height="115" width="115">' +
                      '<div class="iw-subTitle">Price</div>' +
                      '<p>' + price + '</p>'+
                      '</div>' +
                    '<div class="iw-bottom-gradient"></div>';


      var marker = new google.maps.Marker({
        map: map,
        position: latlng
      });

      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
      markers.push(marker);
          var contentString= ad_title;
}//if lower case
else if((b == "Breed Name/Category") && price1=="Price")
{
    var image1="http://ranou.esy.es/PETSHOP/uploads/"+ image;
    var html =   '<div class="iw-content">' +
                      '<div class="iw-subTitle">' + ad_title + '</div>' +
                      '  <a href="http://ranou.esy.es/PETSHOP/single_pet.php?photoId='+ image +'">' +
                      '<img src=' + image1 + ' alt='+image1 + image +' height="115" width="115">' +
                      '<div class="iw-subTitle">Price</div>' +
                      '<p>' + price + '</p>'+
                      '</div>' +
                    '<div class="iw-bottom-gradient"></div>';


      var marker = new google.maps.Marker({
        map: map,
        position: latlng
      });

      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
      markers.push(marker);
          var contentString= ad_title;
}//if lower case

}



    function createOption(name, distance, num) {
      var option = document.createElement("option");
      option.value = num;
      option.innerHTML = name + "(" + distance.toFixed(1) + ")";
      locationSelect.appendChild(option);
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function parseXml(str) {
      if (window.ActiveXObject) {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
      } else if (window.DOMParser) {
        return (new DOMParser).parseFromString(str, 'text/xml');
      }
    }

    function doNothing() {}


  </script>
  </head>

	

 <div>
      <input type="button" id="addressInput" size="0" /> 
 <body style="margin:0px; padding:0px;" onload="load()">


  <select id="browsers">
    <option value="Breed Name/Category" selected>Breed name/Category</option>   
    <option value="love bird">love bird</option>
    <option value="lutino cocktail">lutino cocktail</option>
  </select>

<select id="price1">
    <option value="Price" selected>Price</option>
    <option value="100-10000">Below 10000</option>
    <option value="10000-30000">10000-30000</option>
    <option value="30000-100000">Above 30000</option>
  </select>

    <input type="submit" onclick="searchLocations()" value="Search"/>
    </div>
    <div><select id="locationSelect" style="width:100%;visibility:hidden"></select></div>
    <div id="map" style="width: 80%; height: 40vh"></div>

  </body>
</html>
      

	</div>	
	</div>
	</div>
	
<!--footer-->
	<div class="footer">
		
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
