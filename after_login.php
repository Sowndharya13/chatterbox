<html lang="en">
<head>

<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


<style>
#formboxx{
	border-radius: 13px;
    border: 2px solid gray;
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
		<header id="header">		
		
				<nav id="nav-middle">
						<nav class="navbar" role="navigation">
								<div class="container">
										<div class="navbar-header">												
												<a class="navbar-brand" href="#">
													<img src="assets/img/talk.jpg" height="100px" width="100px" >
												</a> 
										<div id="sli">
										<br><br>	<b>
										<?php     echo "WELCOME " . $name ."  " ?> </b>&nbsp; &nbsp; &nbsp; &nbsp;

										<a href="portspritle.html">Home  | </a>&nbsp;&nbsp;
												<a href="signout.php">Signout</a>&nbsp;

										</div>
										</div>
								
						</nav>
				</nav>
		</header>
			</header>
	<center> <br><br><br><br><br><br><br><br>
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
}?>
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
 while( $row2 = mysql_fetch_assoc( $selectR ) ){		  ?>  
                             <div class="form-bottom" style="margin-right:2px" >

			                        <div class="form-group">

       <?php
          echo "<br> UserID  : {$row2['u_id']} <br>Status id :  {$row2['status_id']}<br>STATUS TEXT: {$row2['status_text']} <br> Posted time : {$row2['p_time']} <br>{$row2['image']} <br> " 
		  ?>   <input type="button" name="lik" value="like" onclick="fun_addlike()">  &nbsp; <input type="button" name="comments" value="comment" onclick="show_comment()"> 
		       <script type="text/javascript">
							var likee = <?{$row2['likes']}?>;
							function fun_addlike(){
								 likee++;
								 
								<? 
								echo" Likes : {$row2['likes']} <br> " ?>
							}
							
							
							  </div> </div>   
							                       
		</script> <br>
	<?php 	}
  } }
    ?></div>
</center>
	</body>

</html>
		
		
