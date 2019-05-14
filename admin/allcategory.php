<?php include('session.php')?>
<?php
include('db.php');
?>
<?php 
if(isset($_GET['delete']))
{
 
$delete=$_GET['delete'];
mysql_query("DELETE FROM `category` WHERE id='$delete'"); 

}

?>
<?php
if(isset($_POST['h_id']))
{
$h_id=$_POST['h_id'];
$category=$_POST['category'];

mysql_query("UPDATE `category` SET category='$category' WHERE id='$h_id'");

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
	<div class="col-md-12" style="border-top:5px solid #000000;"></div>
	<br>  
	    
		<div class="col-md-4">
		&nbsp;
		</div>
		 <div class="col-md-8">
         <div >
          <h1 class="title top_rounded_2 hadding"  ><u>All Gallery Category </u></h1><br /><br />
          <table border="1" cellpadding="0" cellspacing="0" >
            <thead>
              <tr style="text-align:center; font-weight:bold;">
                <td width="4%"> No </td>
                <td width="64%"> Category </td>
                <td width="30%"> Action </td>
              </tr>
            </thead>
            <tbody>
              <?php
			   $mysql=mysql_query("SELECT * FROM category");
		         while($r=mysql_fetch_array($mysql)) 
		 { ?>
            <form action="allcategory.php" method="post" enctype="multipart/form-data">
            
            <input type="hidden" value="<?php echo $r['0'];?>" name="deletenews">
            <tr>
              <td><?php $i=$i+1; $i=$i++; echo $i; ?>
               <input type="hidden" name="h_id" value="<?php echo $r['0']; ?>" />
                </td>
              <td valign='top' style='border:1px dotted #000000;'><input type="text" name="category" style="font-family:Arial, Helvetica, sans-serif; border:#FFF;  height:50px;  " value="<?php echo $r['1']; ?>" /></td>

              <td>
              <input type="submit" name="submit" value="" style="background:url(images/2.jpg); background-size:40px 40px; border:0px hidden; background-repeat:no-repeat;" onClick="return confirm('are you sure save data')"  />
              <a href="allcategory.php?delete=<?php echo $r['id'];?>" onClick="return confirm('Are you sure you want to delete this item?');" style="color:#009;">Delete</a></td>
            </tr>
            <form>
            
            <?php } ?>
            </tbody>
            
          </table>
       </div></div>
	   	<div class="col-md-2">
		&nbsp;
		</div></div>
	<br><br><br><br>
</body>
</html>