<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device width,initial-scale=1.0">
  <meta name="keywords" content="HOSPITAL,HOSPITAL.COM,HOSPITAL WEBSITE,MEDICAN">
  <meta name="description" content="World's N0.1 Trusted Hospital">
  <meta name="author" content="hospital.com">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" type="text/css" href="animate.css">

  <title>GlobalHospitals.com</title>
</head>
<body>
<header>
  <div class="menu">
    <div class="brand-name">
      <a href="index.html">
        <h2 class="animated flash">
          <i class = "hospitalp"></i>&nbsp;
          GLOBAL HOSPITALS</h2>
      </a>
    </div>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="gallery1.html">Gallery</a></li>
        <li><a href="registrationpat.php">Register</a></li>
        <li><a href="logggin.php">Login</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
    </nav>
		<!-- Side navigation -->
    <div class="sidenav">
       <a href="admin">Admin</a>
       <a href="patient.php">Patient</a>
       <a href="doctor.php">Doctor</a>

    </div>

<!-- Page content -->
    <div class="main">s
  ...
    </div>
</header>


<!-- End Header Coding-->
<!-- Start Section Coding-->
<section>
	<div class="w-80">
     <div class="form-box">
     	<h1>Contact Us</h1>
     	<hr>
     	<form  >
     		<label for="fullname"><b>Your name :</b></label><br/>
				<input type="text" name="name" id="fullname" placeholder="Enter Fullname">
				<br/><br/>

				<label for="email"><b>Email :</b></label>
				<br/>
				<input type="email" name="email" id="email" placeholder="Enter Your Email">
				<br/><br/>

				<label for="message"><b>Your message :</b></label>
				<br/>
				<textarea id="message" placeholder="Enter Your Message"></textarea>
				<br/><br/>

				<button type="submit" id="contact-btn">Send Email</button>
     	</form>
     </div>
    </div>

<?php
if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $msg = $_POST['msg'];

  $from = 'GLOBAL HOSPITALS';
  $webmaster = 'globalhospitals@gmail.com';
  $to = 'smonika16072001@gmail.com';




}

 ?>


</section>
<!-- End Section Coding-->
<!-- Start Footer Coding-->
<footer>
	<div class="w-80">
    <div class="footer-box">
    <h2>Services</h2>
    <a href="#">CARDIOLOGY</a>
    <a href="#">HEALTH AND MEDICINE</a>
    <a href="#">GYNACOLOGY</a>
    <a href="#">PAEDIATRICS</a>
    <a href="#">GENERAL MEDICINE</a>
  </div>
 	<div class="footer-box">
 		<h2>About Us</h2>
 		<a href="#">Company Overview</a>
 		<a href="#">Management</a>
 		<a href="#">Initiatives</a>
 		<a href="#">Carrers</a>
 		<a href="#">Our Doctors Achieve</a>
 	</div>
 	<div class="footer-box">
 		<h2>Contact Us</h2>
 		<a href="#">Post a Query</a>
 		<a href="#">Global Clinics</a>
 		<a href="#">Global Hospitals</a>
 		<a href="#">Global Cradle</a>
 		<a href="#">Ask Question</a>
 	</div>
  <img src="https://static.toiimg.com/thumb/msid-72275095,width-800,height-600,resizemode-75,imgsize-419574,pt-32,y_pad-40/72275095.jpg" alt="Doc" height=25% width=25%>

	</div>
</footer>
<!-- End footer Coding-->
</body>
</html>
