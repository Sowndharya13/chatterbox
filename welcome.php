<html>
<head>
<body style="background-image:1.jpg";>

 <div id="header">
<div id = "logo">
<img src="assets/img/alsa.jpg" alt ="icon" width="150px" height="120px"/>
</div>
<ul id= "navbar"> 
  <li><a href="#">  Home</a></li>
  <li><a href="#register"> About</a></li>
  <li><a href="#content"> Login</a></li>
</ul>
</div>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" href="assets/css/form-elements.css">
		        <link rel="stylesheet" href="assets/css/style.css">
				
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

<meta name="viewport" content-type="width=device-width initial-scale=1">
 </head>
<div id="navbar">
 
<?php     
         session_start();
         $name=$_SESSION['userid'];     
         echo "welcome :" . $name . "<br>";
         echo'<a href="signout.php">Signout</a>';
		 
		 
?>