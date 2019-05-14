<?php  include('session.php') ?>
<?php include('db.php') ?>
<?php 
if(isset($_GET['id']))
{
$delete=$_GET['id'];
mysql_query("DELETE FROM `staff` WHERE id='$delete'"); 
}
?>
 <?php
if(isset($_POST['h_id']))
{
$h_id=$_POST['h_id'];
$name=mysql_real_escape_string($_POST['name']);
$des=mysql_real_escape_string($_POST['des']);
$contact=mysql_real_escape_string($_POST['contact']);
$address=mysql_real_escape_string($_POST['address']);
$email=mysql_real_escape_string($_POST['email']);
$salary=mysql_real_escape_string($_POST['salary']);


mysql_query("UPDATE `Staff` SET name='$name', designation='$des',contact='$contact',address='$address',email='$email', salary='$salary' WHERE id='$h_id'");

}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin || Home</title>
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
			<!---------main body--------->
	<div class="col-md-12" style="border-top:5px solid #000000;"></div>
	<br>
	<div align="center" class="hadding"><h1><u>Category</u></h1></div>
	<br><br>
	
	<div class="col-md-1">
			&nbsp;
			</div>
			<br>
			<div class="col-md-7">
			<table border="1" cellpadding="0" cellspacing="0"  >
			<form action="" method="post">
			<tr style="text-align:center; font-weight:bold;">
			  <td>S.no.</td>
			  <td >Category</td>
			  <td >Action</td>
			 
			 
			 
			</tr>
			
			 <?php
			 $i=0;
$query=mysql_query("SELECT * FROM `category`");
while($row=mysql_fetch_array($query))
{
$i=$i+1;
$id=$row['id'];
$name=$row['category'];
?>

<form name="admin" method="post" action="staff_details.php" enctype="multipart/form-data" >
        <tr>
          <td><?php echo $i; ?>
            <input type="hidden" name="h_id" value="<?php echo $id ?>" /></td>
          
		  <td valign='top' style='border:1px dotted #000000;'><input type="text" name="name" style="font-family:Arial, Helvetica, sans-serif; border:#FFF;  height:50px;  " value="<?php echo ($name); ?>" /></td>

		            
          <td ><input type="submit" name="submit" value="" style="background:url(images/2.jpg); background-size:40px 40px; border:0px hidden; background-repeat:no-repeat;" onClick="return confirm('are you sure save data')"  />
		  <a href="staff_details.php?id=<?php echo $id; ?>"> <img src= "images/1.jpg" style="margin-left:80px; margin-top:-40px;"  height="40" onClick="return confirm('are you sure delete data')" /></a></td></tr>
      </form>
		
			   <?php } ?>
			   
			</table>
			</div>
	
			
			</div>
        </header>
		</body>
		</html>
      