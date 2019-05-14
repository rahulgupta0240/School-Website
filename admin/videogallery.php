<?php
include('session.php');
include('db.php');

if(isset($_GET['delete_gallery']))
{
$delete=$_GET['delete_gallery'];
mysql_query("DELETE FROM video WHERE id='$delete'");

}


if(isset($_POST['sub']))
{  
 $name=$_POST['name'];
 $url=$_POST['url'];
 $query_iu=mysql_query("INSERT INTO `video` (name,url)VALUES('$name','$url')");

if(!$query_iu)
{ 
}
else
{
$msg= "Video Succsessfully Upload";
echo "<script>setTimeout(\"location.href = 'videogallery.php';\",1500);</script>";
}
 } 
 if(isset($_POST['uid']))
{  
 
 $uid=$_POST['uid'];
 $name=$_POST['name'];
 $url=$_POST['url'];

 $query_iu=mysql_query("UPDATE `video` SET name='$name',url='$url' WHERE id='$uid'");

if(!$query_iu)
{  $msg= "File Not Succsessfully Upload";
}
else
{
$msg= "Video Succsessfully Update";
echo "<script>setTimeout(\"location.href = 'videogallery.php';\",1500);</script>";
}
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
			<div class="col-md-12" style="border-top:5px solid #000000;"></div>
	<br>
	<div>
	<h1 align="center" class="hadding"><u>Video-Gallery</u></h1>
	</div><br>
	<div class="col-md-1">
	&nbsp;
	</div>
	<div class="col-md-4">
	<table border="1" cellpadding="0" cellspacing="0" width="300px;">
	<form action="" method="post" enctype="multipart/form-data">
	<tr>
	   <td><input type="text" name="url" value="" placeholder="Type Video URL" required></td>
	 </tr>
	 <tr>
	   <td><input type="text" name="name" value="" placeholder="Type Video Name" required></td>
	 </tr>
	 <tr>
       <td><button name="sub"  style="background-color:#666666;">submit</button></td>  
	 </tr>
	</form>
	</table>
	</div>
	<br>
	<div class="col-md-7">
	<table border="1" cellpadding="0" cellspacing="0">
	<form action="" method="post">
	<tr style="text-align:center; font-weight:bold;" >
	<td width="4%">S.No.</td>
	<td width="30%">Name</td>
	<td width="50%">Video</td>
	<td width="16%">Action</td>
	</tr>
	</form>
	 <?php $mysql=mysql_query("SELECT * FROM video");
		 while($r=mysql_fetch_array($mysql)) 
		 {
	 
		 ?>
		 <form action="" method="post" enctype="multipart/form-data">
		 <input type="hidden" name="uid" value="<?php echo $r['id'];?>">
		 
		<tr>
		  <td><?php $i=$i+1; $i=$i++; echo $i;?>
		  </td>
		  <td>
		  <iframe width='50' height='50' src='<?php echo $r['url'];?>' frameborder='0' allowfullscreen></iframe>
		    </td>
		  <td>
		  <input type="text"  name="name"  value="<?php echo $r['name'];?>"> </td>
		  <td>
		  <a href="videogallery.php?delete_gallery=<?php echo $r['id'];?>&img=<?php echo $r['1'];?>"><input type="button" value="Delete" onClick="return confirm('Are you sure?');"></a></td>
		  </tr>
	</form>
	<?php } ?>
	
	</table>
	</div>

			
		 </div>
        </header>
		</body>
		</html>
      