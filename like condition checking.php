<html lang="en">
<head>

<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


<style>


#formboxx{
	border-radius: 13px;
    border: 2px solid gray;
    padding: 40px; 
    width: 420px;
	height: 300px;
position: fixed;
left: 10px;
margin-left: 10px;
 background:#0aa699;  
 color:white;
 text-align:center;
}
#wrapper{
padding:10%;
}
#formboxx1{ 
	border-radius: 13px;
    border: 2px solid #0aa699;
    padding: 20px; 
    width: 380px;
    height: 230px; 
}


textarea.form-control {
	
	width:350px;
	height: 200px;
	margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #f8f8f8;
    border: 3px solid #ddd;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: #888;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

		#sli{
			
			padding: 50px;
			float: left;
		}
		</style>
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap/bootstrap-themes.css" />
<link type="text/css" rel="stylesheet" href="assets/css/style.css" />
</head>


<!-- Title-->
<title>Sharinggggg....</title>
</head>
<body background-image="friends.jpg">
<?php     
         session_start();
         $name=$_SESSION['userid'];     
    
?>
		<header id="header"  background="#0aa699">  

		
				<nav id="nav-middle">
						<nav class="navbar" role="navigation">
								<div class="container">
										<div class="navbar-header">												
												<a class="navbar-brand" href="#">
													<img src="assets/img/talk.jpg" height="100px" width="100px" >
												</a> 
										<div id="sli">
										<br><br>	<b>
										<?php     echo "WELCOME  ."  .$name ."  " ?> </b>&nbsp; &nbsp; &nbsp; &nbsp;

										<a href="portspritle.html">Home  | </a>&nbsp;&nbsp;
												<a href="signout.php">Signout</a>&nbsp;
												</div> </div>
		                    </nav>
							</nav>
 </header><br><br><br><br><br><br><br><br>
						<div id="formboxx">
			                    <form action="#" method="post" class="box-form"
								style= "float-right">			                     
									
                        		<h3>Chatter Box</h3>
                            		<p><b>Share your thoughts here...<b></p>
                        	
			                       <input type="text" name="sid" placeholder="Whats on your mind???" class="form-last-name form-control" id="sid"><br>
									
								<input type="file" name="imgfile"  value="add image"><br>

			                    <button type="submit" name="SubmitButton" class="btn">Share!</button>
								
			                    </form>
							</div>
                       	<center> <br><br><br><br><br><br><br><br>

	<hr>
<?php
 $user = "root";
 $pswrd = "";
 $db = "chatterbox";
if(isset($_POST['SubmitButton'])){ 
$s_text=$_POST['sid'];

   # Init the MySQL Connection
   
  if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'chatterbox' ) )
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());

    $selectSQL = " INSERT INTO `status_table` (`u_id`, `status_id`, `status_text`, `p_time`, `likes`) VALUES ('$name', NULL, '$s_text', '2017-06-02 18:46:26.459725',''); ";
  
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Insertion into the Database Failed - #'.mysql_errno().': '.mysql_error();
  }
} ?>
<!-- Select query for status table -->
<?php 
 if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'chatterbox' ) )
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());

     
  $views = "SELECT * FROM `status_table` ORDER By status_id DESC;";
 # Execute the SELECT Query
  if( !( $selectR = mysql_query( $views) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
   
      if( mysql_num_rows( $selectR )==0 ){
        echo 'No Rows Returned';
      }else{
 while( $row2 = mysql_fetch_assoc( $selectR ) ){		?>
   <div class="form-bottom" style="margin-right:2px" >
			                 <div class="form-group">
<div id="wrapper">       
   <div id="formboxx1">  
       <?php
          echo "<br> {$row2['u_id']} posted at {$row2['p_time']}<hr><br> {$row2['status_text']} <br>{$row2['image']} <br> {$row2['likes']} " 

		?>
		  			               ////
								   <form action="#" method="post" class="box-form">
						        <button type="submit" name="Submitlike" class="btn">Like</button>
								
			                    </form>
<?php 
if(isset($_POST['Submitlike'])){ 
  $likecount = $row2['likes'];
$likecount = $likecount+1;

  $selectLIKE = " UPDATE `status_table` SET `likes`= '$likecount'  WHERE status_id = `{$row2['status_id']}` " ;
  if( !( $likee = mysql_query( $selectLIKE ) ) ){
    echo 'Couldnt like this status  - #'.mysql_errno().': '.mysql_error();
  }
  
  
} ?>
												
							  </div> </div>   
							                       
		</script> 
</div>
</center>
	</body>

</html>
		