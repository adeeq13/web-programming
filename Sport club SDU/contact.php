<?php 

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>"; 

if(isset($_POST['submitcontact'])) 
{ 
$name=$_POST['name']; 
$email=$_POST['email']; 
$message=$_POST['message']; 

$to = "youremail@gmail.com"; 
$subject = "Zerotheme - Testing Contact Form"; 
$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message; 

$from = "Zerotheme.com"; 
$headers = "From:" . $from . "\r\n"; 
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers)) 
{ 
$text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>"; 
} 
} 
?> 


<!DOCTYPE html> 
<html lang="en"> 
<head> 


<meta charset="utf-8"> 
<title>Sport CLub Sdu</title> 



<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 


<link rel="stylesheet" href="css/zerogrid.css"> 
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/menu.css"> 
<link rel="stylesheet" href="css/responsiveslides.css"> 
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 

<script src="js/jquery-latest.min.js"></script> 
<script src="js/script.js"></script> 
<script src="js/jquery183.min.js"></script> 
<script src="js/responsiveslides.min.js"></script> 
<script> 

$(function () { 

$("#slider").responsiveSlides({ 
auto: true, 
pager: false, 
nav: true, 
speed: 500, 
namespace: "callbacks", 
before: function () { 
$('.events').append("<li>before event fired.</li>"); 
}, 
after: function () { 
$('.events').append("<li>after event fired.</li>"); 
} 
}); 
}); 
</script> 




</head> 
<body> 
<div class="wrap-body"> 

<div class="top"> 
<div class="zerogrid"> 
<div class="row"> 
<div class="f-left"> 
<span><i class="fa fa-map-marker"></i> Qazaqstan , Almaty city,Kaskelen Sdu </span> 
<span><i class="fa fa-phone"></i> 8775 499 95 55</span> 
<span><i class="fa fa-envelope"></i> 170107067@stu.sdu.edu.kz</span> 
</div> 
<div class="f-right"> 
<span>Enjoy sport with us.</span> 
</div> 
</div> 
</div> 
</div> 

<header> 
<div class="wrap-header zerogrid"> 
<div class="row"> 
<div id="cssmenu"> 
<ul> 
<li class='active'><a href="index.html">Home</a></li> 
<li><a href="archive.html">News</a></li> 
<li><a href="single.html">About</a></li> 
<li><a href="contact.html">Contact</a></li> 
</ul> 
</div> 
<a href='index.html' class="logo"><img src="images/logo.png" /></a> 
</div> 
</div> 
</header> 
<div class="bg-white"> 
<div class="zerogrid"> 
<div class='embed-container maps'> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1.." width="1200" height="600" frameborder="0" style="border:0" allowfullscreen></iframe> 
</div> 
</div> 
</div> 



<section id="container"> 
<div class="zerogrid"> 
<div class="wrap-container clearfix"> 
<div id="main-content"> 
<div class="wrap-box"> 
<div class="row"> 
<div class="col-2-3"> 
<div class="wrap-col"> 
<div class="contact"> 
<div class="contact-header"> 
<h5>Contact Form</h5> 
</div> 
<center><?php echo $text;?></center> 

<div id="contact_form"> 
<form name="form1" id="ff" method="post" action="contact.php"> 
<label class="row"> 
<div class="col-1-2"> 
<div class="wrap-col"> 
<input type="text" name="name" id="name" placeholder="Enter name" required="required" /> 
</div> 
</div> 
<div class="col-1-2"> 
<div class="wrap-col"> 
<input type="email" name="email" id="email"
 
placeholder="Enter email" required="required" /> 
</div> 
</div> 
</label> 

<label class="row"> 
<div class="wrap-col"> 
<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" 
placeholder="Message"></textarea> 
</div> 
</label> 
<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center> 
</form> 
</div> 
</div> 
</div> 
</div> 
<div class="col-1-3"> 
<div class="wrap-col"> 
<div class="contact-header"> 
<h5>Contact Info</h5> 
</div> 
<div style="background: #fff; padding: 20px; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);"> 
<span></p> 
<p>Kaskelen SDu<br> 
</p> 
<p>8775 499 95 55</p> 
<p>170107067@stu.sdu.edu.kz</p> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</section> 


<footer> 
<div class="zerogrid top-footer"> 
<div class="row"> 
<div class="col-1-5"> 
<a href="#"><img src="images/15.jpg" /></a> 
</div> 
<div class="col-1-5"> 
<a href="#"><img src="images/16.jpg" /></a> 
</div> 
<div class="col-1-5"> 
<a href="#"><img src="images/17.jpg" /></a> 
</div> 
<div class="col-1-5"> 
<a href="#"><img src="images/18.jpg" /></a> 
</div> 
<div class="col-1-5"> 
<a href="#"><img src="images/19.jpg" /></a> 
</div> 
</div> 
</div> 
<div class="zerogrid wrap-footer"> 
<div class="row"> 
<div class="col-1-4 col-footer-1"> 
<div class="wrap-col"> 
<h3>About Us</h3> 
<p>SPort Club of SDU was created in 2004.</p> 
<a href="index.html" class="logo"><img src="images/logo.png" /></a> 
</div> 
</div> 
<div class="col-1-4 col-footer-3"> 
<div class="wrap-col"> 
<h3>Archive Photos</h3> 
<div class="row"> 
<div class="col-1-3"> 
<div class="wrap-col"> 
<div class="wrap-col"> 
<a href="#"><img src="images/6.jpg" /></a> 
<a href="#"><img src="images/7.jpg" /></a> 
<a href="#"><img src="images/8.jpg" /></a> 
</div> 
</div> 
<div class="col-1-3"> 
<div class="wrap-col"> 
<a href="#"><img src="images/9.jpg" /></a> 
<a href="#"><img src="images/6.jpg" /></a> 
<a href="#"><img src="images/7.jpg" /></a> 
</div> 
</div> 
<div class="col-1-3"> 
<div class="wrap-col"> 
<a href="#"><img src="images/6.jpg" /></a> 
<a href="#"><img src="images/7.jpg" /></a> 
<a href="#"><img src="images/8.jpg" /></a> 
</div> 
</div> 
</div> 
</div> 
</div> 
<div class="col-1-4 col-footer-4"> 
<div class="wrap-col"> 
<h3>Contact</h3> 
<span><i class="fa fa-map-marker"></i> Qazaqstan , Almaty city,Kaskelen Sdu </span> 
<span><i class="fa fa-phone"></i> 8775 499 95 55</span> 
<span><i class="fa fa-envelope"></i> 170107067@stu.sdu.edu.kz</span> 
</div> 
</div> 
</div> 
</div> 
</footer> 
<div class="copyright"> 
<div class="zerogrid wrapper"> 
<p>Copyright @ SportClub- Designed by Nurzhan Sagyndyk , Sakhiyev Adilet & Bexultan Otegen</p> 
<ul class="quick-link f-right"> 
<li><a href="#">Privacy Policy</a></li> 
<li><a href="#">Terms of Use</a></li> 
</ul> 
</div> 
</div> 

<script> 
$('.maps').click(function () { 
$('.maps iframe').css("pointer-events", "auto"); 
}); 

$( ".maps" ).mouseleave(function() { 
$('.maps iframe').css("pointer-events", "none"); 
}); 
</script> 

</div> 
</body></html>