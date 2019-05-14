<?php $page = '4' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shri Nath International School, Richa Bacha, Mandsaur (M.P.)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />
<?php include('ind/link.php') ?>

</head>
<body> 
	<!-- header -->
	<?php include('ind/menu.php') ?>
	<!-- //navigation -->
	<!-- //header -->
	<!-- banner -->
	<div class="w3ls-banner-1">
	</div>	
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>/</span></li>
					<li><i class="fa fa-picture-o" aria-hidden="true"></i>View Photo Gallery</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
	<?php include('admin/db.php') ?>

	<!-- gallery -->
	<div class="gallery">
		<div class="container">
		<h2 class="agileits-title">View Photo Gallery</h2>
 			<div class="gallery-grids">
             <p><b>Photo</b>&nbsp;&nbsp;<?php echo $_GET['tot'];?>
              <a href="photogallery.php"><h3>Back</h3></a>
            </p>
            
            <input type="hidden" id="album_title" value="Law Conference 2013">
    <input type="hidden" id="max_offset" value="1">
    <input type="hidden" id="item_id" value="205">
    <input type="hidden" id="item_offset" value="1">
    <?php
			  if(isset($_GET['view']))
			  {
			  $view=$_GET['view'];
			  }
			  else
			  {
			  echo "<script>alert('succsess');</script><script>setTimeout(\"location.href = 'photogallery.php';\");</script>";
			  }
				 $mysqll=mysql_query("SELECT * FROM gallery WHERE category='$view'");
		  $count=mysql_num_rows($mysqll);
		 while($rr=mysql_fetch_array($mysqll)) 
		 {
				?>
					<div class="col-md-4 gallery-grid">
						<div class="grid">
							<figure>
                            
								<a class="example-image-link" href="admin/image/<?php echo $rr['1'];?>">
									<img src="admin/image/<?php echo $rr['1'];?>" height="300" style="padding:10px;">
                                    
                                    
									 
								</a>
							</figure>
						</div>
					</div>
					 <?php } ?>
					<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	<!-- //gallery -->

	<!-- footer -->
	<?php include('ind/footer.php') ?>
</body>
</html>