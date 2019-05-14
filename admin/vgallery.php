<?php  include('session.php') ?>
<?php
include('db.php');
?>
<!-------------->
<!----Add category-------->
<!-------------->
<!-------------->
<?php
if(isset($_GET['delete_news']))
{
$delete=$_GET['delete_news'];
 unlink('image/'.$_GET['name']);
$sql=mysql_query("DELETE FROM gallery WHERE id='$delete'");
}
if(isset($_POST['update']))
{   
$name=$_POST['name'];
$allowed =  array('jpg','png','jpeg','JPG','PNG','JPGE');
 $filename = $_FILES['file']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) )
{  
echo "<script>alert('You Can Upload only jpg,jpeg,png file');</script><script>setTimeout(\"location.href = 'vgallery.php';\");</script>";
   
 
}
 else
 {
 $keys =uniqid('aps', true); 
 $file=$_FILES['file']['name'];
 $size=$_FILES['file']['size'];
 if($size > 1024*600)
 {
 $msg="Maximum Upload Image size 600 kb";
 }
 else
 {
 move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$keys.$filename);
  $file_name=$keys.$file;
 
  $id=$_POST['deletenews'];
 
  unlink('image/'.$name);
 $query_iu=mysql_query("Update `gallery` SET file='$file_name' WHERE id=$id");

if(!$query_iu)
{ 
echo "query problem";
die();
}
else
{
 
echo "<script>alert('succsess');</script><script>setTimeout(\"location.href = 'vgallery.php';\");</script>";
}
 }}}


 ?>
<?php if(isset($_POST['add']))
{  
$allowed =  array('jpg','png' ,'jpeg');
$filename = $_FILES['file']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) )
{
    $msg='You Can Upload only jpg,jpeg,png file';
 
}
 else
 {
 $keys =uniqid('aps', true); 
 $file=$_FILES['file']['name'];
 $size=$_FILES['file']['size'];
 if($size > 1024*600)
 {
 $msg="Maximum Upload Image size 600 kb";
 }
 else
 {
 move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$keys.$file);
 $file_name=$keys.$file;
 $cate=$_POST['cat'];
 $name1=$_POST['name1'];
 $query_iu=mysql_query("INSERT INTO `gallery`(file,category)VALUES('$file_name','$cate')");

if(!$query_iu)
{ 
}
else
{
$msg= "File Succsessfully Upload";
echo "<script>setTimeout(\"location.href = 'gallery.php';\",1500);</script>";
}
 }}}

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin|| Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- Favicon -->
        <?php include('link.php') ?>

    
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

	
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
                                <a href="admin.home.php" ><img src="images/logo/logo.png" alt=""> </a>
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
	<div class="col-md-12" style="border-top:5px solid #000000;">
	<br>
	<div class="col-md-2">
	&nbsp;
	</div>
	<div class="col-md-8">
	<h1 class="hadding" align="center"><u>Show Gallery and Category</u> </h1>
		  <br />
          <span id="er"></span>
          <table border="1px" cellpadding="0" cellspacing="0" >
            <thead>
              <tr style="text-align:center; font-weight:bold;">
                <td width="2%"> No </td>
                <td width="20%">Photo </td>
                <td width="18%"> Category </td>
                <td width="30%"> Update </td>
                <td style="width:30%px;"> Action </td>
              </tr>
            </thead>
            <tbody>
              <?php
			   $mysql=mysql_query("SELECT * FROM gallery");
		 while($r=mysql_fetch_array($mysql)) 
		 { ?>
            <form action="" method="post" enctype="multipart/form-data">
            
            <input type="hidden" value="<?php echo $r['0'];?>" name="deletenews">
            <input type="hidden" value="<?php echo $r['1'];?>" name="name">
            <tr>
              <td><?php $i=$i+1; $i=$i++; echo $i; ?>
              </td>
              <td><img src="image/<?php echo  $r['1'];?>" height="30" width="30" style="margin-right:20px;"> </td>
			   <td>
			   <?php
			   	   $mysl=mysql_query("SELECT * FROM category WHERE id='$r[2]'");
		 while($er=mysql_fetch_array($mysl)) 
		 {
		 echo $er['1'];
		 }
		 ?>
			   
			   </td>
              </td>
              <td><input type="file" name="file">
               </td>
              <td> <button name="update" style="background-color:#000;">Update</button>&nbsp;&nbsp;&nbsp;
			  <a href="?delete_news=<?php echo  $r['0'];?>
			  &name=<?php echo  $r['1'];?>" ><button type="button" style="cursor:pointer; background-color:#000;"  onclick="return confirm('Are you sure you want to delete this item?');" name="delete">Delete</button></a>
			  </td>
            </tr>
            </form>
            
            <?php } ?>
            </tbody>
            
          </table>
		  </div>
		  <div class="col-md-2">
		  &nbsp;
		  </div>
		  </div>
		  
	<!---------main body end--------->	
		</body>
		</html>
      