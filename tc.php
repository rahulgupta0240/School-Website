<?php $page = '3' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shri Nath International School, Richa Bacha, Mandsaur (M.P.)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<?php include('ind/link.php') ?>
<style>
.dt{background-color:#eb5425; padding:10px; color:#FFF; font-weight:bold;}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    font-size: 15px;
    text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #eb5425;
    color: white;
}
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
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>Transfer Certificate</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="welcome">
		<div class="container">
			<h2 class="agileits-title">Transfer Certificate</h2>
			<div class="w3ls_news_grids"> 
             
				<div class="col-md-12 w3_agile_about_grid_left">
					 <pre style="font-size:20px;">
             <table id="customers" >
			<form action="" method="post">
			<tr style="text-align:center; font-weight:bold;">
			  <td width="3%">S.No.</td>
			  <td width="15%">Roll. No.</td>
			  <td width="15%">Name</td>
			  <td width="15%">Father&apos;s Name</td>
			  <td width="12%">Class</td>
			  <td width="20%">T.C. (PDF Format)</td>
			</tr>
            <?php include('admin/db.php') ?>
            <?php
			 $i=0;
$query=mysql_query("SELECT * FROM `tc`");
while($row=mysql_fetch_array($query))
{
$i=$i+1;
$id=$row['id'];
$img=$row['img'];
$name=$row['name'];
$father=$row['father'];
$rollno=$row['rollno'];
$class=$row['class'];
?>
            <tr align="center">
            <td><?php echo $i ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $father ?></td>
            <td><?php echo $rollno ?></td>
            <td><?php echo $class ?></td>
            <td align="center"><a href="admin/tcpdf/<?php echo $row['img'];?>" target="_blank" ><img src="admin/images/pdf.jpg" style="border:1px dotted #000000; width:50" height="50" /> </a></a></td>    
              <?php } ?>
             </tr>
 			 </table>
             </pre>
				</div>
  				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
 	
 
	<!-- footer -->
	<?php include('ind/footer.php') ?>
</body>
</html>