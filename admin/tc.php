<?php  include('session.php') ?>
<?php include('db.php') ?>
<?php
if(isset($_POST['sub']))
{
$cat_name=$_POST['cat_name'];

$a=mysql_query("INSERT INTO category(category)VALUES('$cat_name')");
if(!$a)
{ 
}
else
{
$msg= "data Succsessfully Upload";
echo "<script type=Text/javascript>alert('" . $msg . "');</script>";
}
}
?>
<?php /*
if(isset($_GET['id']))
{
$delete=$_GET['id'];
mysql_query("DELETE FROM `tc` WHERE id='$delete'"); 
}
?>
 <?php
if(isset($_POST['h_id']))
{
$h_id=$_POST['h_id'];
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$father=$_POST['father'];
$class=$_POST['class'];

mysql_query("UPDATE `tc` SET rollno='$rollno',name='$name',father='$father',class='$class' WHERE id='$h_id'");

}*/
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
			<div class="col-md-12" style="border-top:5px solid #000000;"></div>
	<br>
	        <div>
			<h1 align="center" class="hadding"><u>Add Category</u></h1>
			</div>
			<br><br>	
			<div class="col-md-1">
			&nbsp;
			</div>
			<div class="col-md-4">
			<table class="table" >
			<form action="" method="post" enctype="multipart/form-data">
			<tr>
			<td> Enter Category:</td>
			  <td><input type="text" name="cat_name" value="" placeholder="Enter Category" required></td>
			</tr>
			<tr>
			<td></td>
			  <td><button name="sub" style="background-color:#333333;">Submit</button>
			  <button name="sub" style="background-color:#333333;">View Categories</button></td>
			</tr>
			</form>
			</table>
			</div>
			<br>
			</div>
        </header>
		</body>
		</html>
      