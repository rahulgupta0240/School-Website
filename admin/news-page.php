<?php  include('session.php') ?>
<?php include('db.php') ?>
<?php
if(isset($_POST['sub']))
{
$date=mysql_real_escape_string($_POST['date']);
$title=mysql_real_escape_string($_POST['title']);
$discription=mysql_real_escape_string($_POST['discription']);

$a=mysql_query("INSERT INTO news(date,title,discription)VALUES('$date','$title','$discription')");
if(!$a)
{ 
}
else
{
$msg= "data Succsessfully Upload";
echo "<script>setTimeout(\"location.href = 'news-page.php';\",1500);</script>";
}
}
?>
<?php 
if(isset($_GET['id']))
{
$delete=$_GET['id'];
mysql_query("DELETE FROM `news` WHERE id='$delete'"); 
}
?>
 <?php
if(isset($_POST['h_id']))
{
$h_id=$_POST['h_id'];
$date=$_POST['date'];
$title=mysql_real_escape_string($_POST['title']);
$discription=mysql_real_escape_string($_POST['discription']);


mysql_query("UPDATE `news` SET date='$date',title='$title',discription='$discription' WHERE id='$h_id'");

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
                                 
                            </div>
                        </div>
                      <?php include('menu.php') ?>
                    </div>
                </div>
            </div>
			<!---------main body--------->
	<div class="col-md-12" style="border-top:5px solid #000000;"></div>
	<br>
	<div align="center" class="hadding"><h1><u>News Event</u></h1></div>
	<br><br>
	
	<div class="col-md-1">
			&nbsp;
			</div>
			<div class="col-md-4">
			<table border="1" cellpadding="0" cellspacing="0" width="300" >
			<form action="" method="post" enctype="multipart/form-data">
			<tr>
			  <td><input type="date" name="date" value="" placeholder="Enter date" required></td>
			</tr>
			<tr>
			  <td><input type="text" name="title" value="" placeholder="Enter title" required></td>
			</tr>
			<tr>
			  <td><textarea name="discription" placeholder="Enter description" required></textarea></td>
			  
			</tr>
			<tr>
			  <td><button name="sub" style="background-color:#333333;">Submit</button></td>
			</tr>
			</form>
			</table>
			</div>
			<br>
			<div class="col-md-7">
			<table border="1" cellpadding="0" cellspacing="0"  >
			<form action="" method="post">
			<tr style="text-align:center; font-weight:bold;">
			  <td width="3%">S.no.</td>
			  <td width="10%">Date.</td>
			  <td width="12%">Title</td>
			  <td width="50%">Description</td>
			  <td width="25%">Action</td>
			</tr>
			
			 <?php
			 $i=0;
$query=mysql_query("SELECT * FROM `news`");
while($row=mysql_fetch_array($query))
{
$i=$i+1;
$id=$row['id'];
$date=$row['date'];
$title=$row['title'];
$discription=$row['discription'];
?>

<form name="admin" method="post" action="news-page.php" enctype="multipart/form-data" >
        <tr>
          <td><?php echo $i; ?>
            <input type="hidden" name="h_id" value="<?php echo $id ?>" /></td>
          
		  <td valign='top' style='border:1px dotted #000000;'><input type="text" name="date" style="font-family:Arial, Helvetica, sans-serif; border:#FFF;  height:50px;  " value="<?php echo ($date); ?>" /></td>
		  
		  <td valign='top' style='border:1px dotted #000000;'><input type="text" name="title" style="font-family:Arial, Helvetica, sans-serif; border:#FFF;  height:50px;   " value="<?php echo ($title); ?>" /></td>
		  
		  <td valign='top' style='border:1px dotted #000000;'><input type="text" name="discription" style="font-family:Arial, Helvetica, sans-serif; border:#FFF;  height:50px;   " value="<?php echo ($discription); ?>" /></td>
		            
          <td ><input type="submit" name="submit" value="" style="background:url(images/2.jpg); background-size:40px 40px; border:0px hidden; background-repeat:no-repeat;" onClick="return confirm('are you sure save data')"  />
		  <a href="news-page.php?id=<?php echo $id; ?>&img_name=<?php echo $img; ?>"><img src="images/1.jpg" style="margin-left:80px; margin-top:-40px;"  height="40" onClick="return confirm('are you sure delete data')" /></a></td></tr>
      </form>
		
			   <?php } ?>
			   
			</table>
			</div>
	
			
			</div>
        </header>
		</body>
		</html>
      