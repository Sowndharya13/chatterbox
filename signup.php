<html><body>
<?php
 
$u_id=$_POST['uid'];
$pass = $_POST['password'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];

$user = "root";
 $pswrd = "";
 $db = "chatterbox";


   # Init the MySQL Connection
   
  if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'chatterbox' ) )
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());

    $selectSQL = " INSERT INTO `users`(`user_id`, `pass`, `email`, `phone`) VALUES ('$u_id', '$pass', '$mail' , '$phone') ";
   $res=mysql_fetch_row($selectSQL);
   if($res)
   {
    $_SESSION['userid']=$u_id;
	
    header('location:afterlogin.php');
   }
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Insertion into the Database Failed - #'.mysql_errno().': '.mysql_error();
  }
  
?><br>Login and continue<a href="index.html">Login and continue</a> <br>
