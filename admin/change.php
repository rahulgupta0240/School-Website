<?php include('session.php')  ?>
<?php  include('db.php')  ?>
<?php
$error='';
if(isset($_POST['old_pass']))
{
    $old_pass=$_POST['old_pass'];
    $new_pass=$_POST['new_pass'];
    $re_new_pass=$_POST['re_new_pass'];
    if($old_pass=='' or $new_pass=='' or $re_new_pass=='')
    {
       $error='Error in changing password! Null Value.';
    }
    else
    if($new_pass!=$re_new_pass)
    {
       $error='Error in changing password! Password did not match.';
	 echo "<script>setTimeout(\"location.href = 'change.php';\",1500);</script>";
    }
    else
    {
	$query="SELECT * FROM admin WHERE password='$old_pass'";
	$result=mysql_query($query) or die("Unable to verify user because ".mysql_error());
        $count=mysql_num_rows($result);
	if($count==0)
        {
            $error='Wrong Password! Try Again';
		 echo "<script>setTimeout(\"location.href = 'change.php';\",1500);</script>";

        }
        else
        {
            $query_new="UPDATE admin SET password='$new_pass' WHERE password='$old_pass'";
            $result_new=mysql_query($query_new) or die("Unable to verify user because ".mysql_error()); 
            if(!$result_new)
            {
               $error='Sorry! Error in Changing Password';
			 echo "<script>setTimeout(\"location.href = 'change.php';\",1500);</script>";

            }
            else
            {
               $error='Password Changed Successfully';
               echo "<script>setTimeout(\"location.href = 'change.php';\",1500);</script>";

            }
        }
    }
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin|| Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('link.php') ?>
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
      <!-- Body main wrapper start -->
	 <div class="wrapper">
        <!-- Start of header area -->
		<header class="header-area">
          <?php include('header.php') ?>
            <div class="header-bottom stick-h2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo/logo.png" alt=""> </a>
                            </div>
                        </div>
                      <?php include('menu.php') ?>
                    </div>
                </div>
            </div>
			</div>
        </header>
	<!---------main body--------->
	<!---------main body--------->
	<div style="border-top:5px solid #000000;">
<div align="center">
<br><br>
    <div class="hadding"><h1><u>Change Password</u></h1></div>
	<br><br>
	<form name="ch_login_det" action="change.php" method="post">
	 <p><?php echo "<strong><font color='blue' size='4'>".$error."</font></strong>"; ?></p>
    <table border="1" cellpadding="0" cellspacing="0" width="600" height="300" style="text-align:center; color:#000000; font-weight:bold;">
   
    <tr><td>Old Password</td><td><input type="password" name="old_pass" placeholder='old_pass' style=" padding:10px;" /></td></tr>
    
	<tr><td>New Password</td><td><input type="password" name="new_pass" placeholder='new_pass' style="padding:10px;" /></td></tr>
    
	<tr><td>Retype-Password</td><td><input type="password" name="re_new_pass" placeholder='Re_new_pass' style="padding:10px;" /></td></tr>
       
	<tr><td>&nbsp;</td><td><input type="submit" name="submit" style="background-color:#333333; color:#FFFFFF;" value="Change Password" style="" /></td></tr>
	
    </table>
    </form>
	<br><br><br>
</div>
</div>
</body>
</html>