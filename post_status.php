<?php
 $user = "root";
 $pswrd = "";
 $db = "chatterbox";

$s_text=$_POST['sid'];
$image1 = $_POST['imgfile'];

   # Init the MySQL Connection
   
  if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'chatterbox' ) )
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());

    $selectSQL = " INSERT INTO `status_table` (`u_id`, `status_id`, `status_text`, `image`, `p_time`, `likes`) VALUES ('$name', NULL, '$s_text', '$image1', '',''); ";
  
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Insertion into the Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
  echo 'Shared successffuly';}
?>