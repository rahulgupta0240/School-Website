<?php $page = '4' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shri Nath International School, Richa Bacha, Mandsaur (M.P.)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=""/>
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
					<li><i class="fa fa-picture-o" aria-hidden="true"></i> Video Gallery</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->

	<!-- gallery -->
	<div class="gallery">
		<div class="container">
		<h2 class="agileits-title"> Video Gallery</h2>
		 
			<div class="gallery-grids">
            <?php include('admin/db.php')  ?>
				<?php $mysql=mysql_query("SELECT * FROM video");
		        while($r=mysql_fetch_array($mysql)) 
		         {
 		           ?>
					<div class="col-md-4 gallery-grid">
						<div class="grid">
							<p><iframe width='100%' height='250' src='<?php echo $r['url'];?>' frameborder='0' allowfullscreen></iframe></p>
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