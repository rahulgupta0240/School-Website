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
					<li><i class="fa fa-picture-o" aria-hidden="true"></i>Photo Gallery</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->

	<!-- gallery -->
	<div class="gallery">
		<div class="container">
		<h2 class="agileits-title">Photo Gallery</h2>
		 
			<div class="gallery-grids">
            
            <?php include('admin/db.php') ?>
	  <?php
			   $mysql=mysql_query("SELECT * FROM category");
		 while($r=mysql_fetch_array($mysql)) 
		 {
		 $cat=$r['0'];  
		  $mysqll=mysql_query("SELECT * FROM gallery WHERE category='$cat'");
		  $count=mysql_num_rows($mysqll);
		 while($rr=mysql_fetch_array($mysqll)) 
		 {
		 $file=$rr['1'];
		  
		 }
		  ?>
					<div class="col-md-4 gallery-grid">
						<div class="grid">
							<figure class="effect-apollo">
								<div style="border:1px solid #000000;">
          <div class="gallery-img mb-30" > 
          <a href="vgallery.php?view=<?php echo $cat;?>&tot=<?php echo $count;?>"> <img src="admin/image/<?php echo $file;?>" target="_blank" style="width:100%; height:300px;">
          
           </a> 
          </div>
          
	   <div style="color:#000000; padding:10px;"><span>
	  <a href="vgallery.php?view=<?php echo $cat;?>&tot=<?php echo $count;?>" style="font-size:16px; color:#000; margin-left:0px;"> View More</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <span> <?php echo $count;?> Photos </span>
      </div>
      
      <div style="width:100%; background-color:#CCCCCC; border:1px dotted #000000; padding:10px;"><a href="#" style="font-size:16px; color:#000033;"><?php echo  $r['1'];?></a>  </div>
        </div>
        <br>
        </div>	
        </div>	
  		<?php } ?>
			 				</figure>
						</div>
					</div>
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