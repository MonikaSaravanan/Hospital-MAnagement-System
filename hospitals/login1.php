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
        <li><a href="register.html">Register</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
    </nav>
</header>



<?php

//echo "Succcess";


$Userid = $_POST['Userid'];
 $conn = mysqli_connect("localhost","root","","hospitals");
 //$Userid = $_POST['Userid'];

 //$db= mysqli_select_db($conn,"authentication");
 global $conn;
 $query = "SELECT * FROM userregister1 WHERE Userid = $Userid ";
     //$query_run = mysqli_query($conn,$query);
$result = mysqli_query($conn,$query);
 if(isset($_POST['login-btn']))
 {
   echo "A";
}

else
{

echo "WELCOME";

//$query = "SELECT * FROM userregister1  WHERE Name = '$Name' AND Password ='$Password' ";
    //$query_run = mysqli_query($conn,$query);
 $result = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($result))
 {
 $Name = $row['Name'];
 $Email = $row['Email'];
 $Mobileno =$row['Mobileno'];
 $Userid = $row['Userid'];
 $Address = $row['Address'];
 $ReferenceDoctor = $row['ReferenceDoctor'];
 $Age = $row['Age'];
 $Reason = $row['Reason'];
 $History = $row['History'];
 $scan1 = $row['scan1'];

 echo "<tr><b><h3>
 <td>  NAME : $Name </td><br><br>
 <td>  E-MAIL: $Email </td><br><br>
 <td>  MOBILE NO.: $Mobileno </td><br><br>
 <td>  USER ID: $Userid </td><br><br>
 <td>  ADDRESS:$Address </td><br><br>
 <td>  REFERENCE DOCTOR: $ReferenceDoctor </td><br><br>
 <td>  AGE: $Age </td><br><br>
 <td>  REASON: $Reason </td><br><br>
 <td>  HISTORY: $History </td><br><br>
</b></h3>
 </tr>";
}
}
 ?>
 <footer>
   <div class="footer-box">
   <h2>Services</h2>
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
