<?php  include('session.php') ?>
<?php
include('db.php');
?>
<!-------------->
<!----Add category-------->
<!-------------->
<!-------------->
<?php
	if(isset($_POST['news']))
{
$news=mysql_real_escape_string ($_POST['news']); 
 if($news=='')
 {
$msg= "Please Enter the Category";
 
 }
 else
 {
$date=date('d/m/Y');
$sql=mysql_query("INSERT INTO category (category)VALUES('$news')");
if(!$sql)
{
echo "Error";  
}
else
{
$msg= "Category succsessfuly save"; 
echo "<script>setTimeout(\"location.href = 'photogallery.php';\",1500);</script>";
}
}
}

?>

<!-------------->
<!----Add category and image-------->
<!-------------->
<!-------------->
<?php if(isset($_POST['add']))
{  
$allowed =  array('jpg','png' ,'jpeg','JPG','PNG' ,'JPEG');
$filename = $_FILES['file']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) )
{
    $msg='You Can Upload only jpg,JPG,PNG,JPEG,jpeg,png file';
 
}
 else
 {
 $keys =uniqid('aps', true); 
 $file=$_FILES['file']['name'];
 $size=$_FILES['file']['size'];
 if($size > 1024*1000)
 {
 $msg="Maximum Upload Image size 1000 kb";
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
echo "<script>setTimeout(\"location.href = 'photogallery.php';\",1500);</script>";
}
 }}}

?>

<!-------------->
<!----show category-------->
<!-------------->
<!-------------->

<?php
if(isset($_POST['delete']))
{
$delete=$_POST['deletenews'];
 unlink('image/'.$name);
$sql=mysql_query("DELETE FROM gallery WHERE id='$delete'");
}
if(isset($_POST['update']))
{   
$allowed =  array('jpg','png' ,'jpeg','JPG','PNG' ,'JPEG');
$filename = $_FILES['file']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) )
{  
echo "<script>alert('You Can Upload only jpg,JPG,PNG,JPEG,jpeg,png file');</script><script>setTimeout(\"location.href = 'photogallery.php';\");</script>";
   
 
}
 else
 {
 $keys =uniqid('aps', true); 
 $file=$_FILES['file']['name'];
 $size=$_FILES['file']['size'];
 if($size > 1024*1000)
 {
 $msg="Maximum Upload Image size 1000 kb";
 }
 else
 {
 move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$keys.$filename);
  $file_name=$keys.$file;
 
  $id=$_POST['deletenews'];
 
  $category=$_POST['category'];
  unlink('image/'.$name);
 $query_iu=mysql_query("Update `gallery` SET file='$file_name' ,category='$category' WHERE id='$id'");

if(!$query_iu)
{ 
echo "query problem";
die();
}
else
{
 
echo "<script>alert('succsess');</script><script>setTimeout(\"location.href = 'photogallery.php';\");</script>";
}
 }}}


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
	<div>
	<h1 class="hadding" align="center"><u>Photogallery</u></h1>
	</div>
	<div class="col-md-1">
	&nbsp;
	</div>
	<div class="col-md-5">
	<p style="font-size:18px; color: #FF0000;"><?php echo $msg;?></p>
          <h1 class="title"> Add New Category </h1><br />
          <div class="post-content contact-page">
            <p id="er"><?php echo $msg;?></p>
             <form class="vzforms_ajax" id="vzform_" action="" method="post">
              <label>Enter Category:</label><br /><br />
              <input type="text"  placeholder="Category" name="news" style="padding:7px;">
              <div class="clear"></div><br />
              <input type="submit" class="main" value="Submit" style="padding:7px; width:100px; background-color:#666; color:#FFF;">
              <input type="reset" class="second" value="Cancel" style="padding:7px; width:100px; background-color:#666; color:#FFF;">
              <a href="allcategory.php">
              <input type="button" class="main" value="Go To Category" style="padding:7px; width:100px; background-color:#666; color:#FFF;">
              </a>
            </form>
	 
			   </table></div>
		</div>
		<br>
		
	
	<div class="col-md-6">
	 <h1 class="title"> Add New Image </h1>
          <div class="post-content contact-page"><br />
		  <p id="er"><?php echo $msg;?></p>
            <form class="vzforms_ajax" action="" id="vzform_" method="post" enctype="multipart/form-data">
              <label>Category:</label>
              <br>
              <br>
              <select type="text"     name="cat" style="padding:3px; width:150px;">
                <option value="">Select Category</option>
                <?php
			    $mysql=mysql_query("SELECT * FROM category");
		        while($r=mysql_fetch_array($mysql)) 
		 { ?>
                <option value="<?php echo $r['0'];?>"><?php echo $r['1'];?></option>
                <?php } ?>
              </select>
              <br>
              <br>
              <label>Image:</label>
              <br>
              <br>
              <input type="file"   placeholder="Written By" name="file" style="padding:7px;"><br />
			  <div class="clear"></div><br />
              <input type="submit" class="main" value="Submit"  name="add" style="padding:7px; width:100px; background-color:#666; color:#FFF;">
              <input type="reset" class="second" value="Cancel" style="padding:7px; width:100px; background-color:#666; color:#FFF;">
              <a href="vgallery.php">
              <input type="button" class="main" value="view Gallery Photos" style="padding:7px; width:100px; background-color:#666; color:#FFF;">
              </a>
            </form>
            <div class="clear"></div>
						<br><br><br><br><br><br><br><br>
		  
		    </div>
			</div>
			</div>
	</div>
	<!---------main body end--------->	
		</body>
		</html>
      