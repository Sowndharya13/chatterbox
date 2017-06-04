<html><body>
 <?php 
 session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('chatterbox') or die(mysql_error());
 $u_id=$_POST['userid'];
 $pass=$_POST['password'];
 if($u_id!=''&&$pass!='')
 {
   $query=mysql_query("select * from `users` where `user_id` = '$u_id' and `pass` = '$pass' ") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['userid']=$u_id;
	
    header('location:after_login.php');
   }
   else
   {
    echo'entered username or password is incorrect';
	>?<a href="index.html"> TryAgain </a> <?
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
  
