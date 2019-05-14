<?php
ob_start();
include("db.php");
$error='';
if(isset($_POST['username']))
{
	
 	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
				
			
			$username=mysql_real_escape_string($_POST['username']);
			$password=mysql_real_escape_string($_POST['password']);
			$query="SELECT * FROM admin WHERE user='$username' AND password='$password'";
			$result=mysql_query($query) or die("Unable to verify user because ".mysql_error());
			$count = mysql_num_rows($result);
			$row = mysql_fetch_array($result);
			if($count == 1)
			{
				$_SESSION['rmgr*&^school']="true";
				$_SESSION['UID']=$row['id'];
		    	?>
<script type="text/javascript"> window.location = "tc.php";</script>
<?php
			}
			else
			{
				$_SESSION['rmgr*&^school']="false";
				$error='Login Failed...';
				
			}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin| Admin Login</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
          <?php include('link.php') ?>
 </head>
<body bgcolor="#ef5734"> 
          <?php include('header.php') ?>
 	<div class="col-md-12">
	<div class="col-md-3">
	&nbsp;
	</div>
   
 	<div class="col-md-6">
 	<table border="0" cellpadding="0" cellspacing="0" width="400" height="200" style="background-color:#000; color:#FFFFFF; text-align:center; border-radius:10px; margin-top:150px;" align="center" >
	   <form action="" method="post" autocomplete="off">
	   <tr>
	    <td>Username</td>
	    <td><input type="text" name="username" value="" required  placeholder="Username" style="padding:10px; width:200px;" ></td>
		</tr>
		<tr>
		<td>Password</td>
		<td><input type="password" name="password" value="" required placeholder="Password" style="padding:10px; width:200px;" ></td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" name="submit" value="submit" required style="padding:10px; width:100px; color:#FFF;"></td>
	   </tr>
	   </form>
	</table>
	</div>
	<div class="col-md-3">
	&nbsp;
	</div>
	</div>
</body>
</html>