<?php $page = '5' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shri Nath International School, Richa Bacha, Mandsaur (M.P.)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<?php include('ind/link.php') ?>
<style>
.dt{background-color:#000; padding:10px; color:#FFF; font-weight:bold;}
 
</style>
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
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>Latest News</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="welcome">
		<div class="container">
			<h2 class="agileits-title">News Event </h2>
			 <div class="w3ls_news_grids"> 
            <?php include('admin/db.php') ?>
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
				<div class="col-md-12 w3_agile_about_grid_left">
			 <div class="col-md-12 dt"> Start Date:-<?php echo ($date); ?></div><br> 
              <p><h4><b><?php echo ($title); ?></b></h4></p> 
             <p align="justify"><?php echo ($discription); ?></p><br>
             <p align="justify" ><input type="button" value="Read More" style="background-color:#d70b13; padding:10px; color:#FFF;"></p>
					 
				</div>
                <?php } ?>
 				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
 	
 
	<!-- footer -->
	<?php include('ind/footer.php') ?>
</body>
</html>