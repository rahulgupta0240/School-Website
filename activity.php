<?php $page = '3' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shri Nath International School, Richa Bacha, Mandsaur (M.P.)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />
<?php include('ind/link.php') ?>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
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
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>Activity Chart</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="welcome">
		<div class="container">
			<h2 class="agileits-title">Activities And Event -2018-19</h2>
			    <div class="col-md-12">
                <pre>
                 <table id="customers" align="center">
  <tr>
    <th>S No.</th>
    <th> DATE</th>
    <th>ACTIVITY</th>
  
  </tr>
        
 <?php include('admin/db.php') ?>
   <?php
       $i=0;
$query=mysql_query("SELECT * FROM `activity`");
while($row=mysql_fetch_array($query))
{
$i=$i+1;
$id=$row['id'];
$date=$row['date'];
$activity=$row['activity'];
?>
  <tr>
    <td><?php echo $i ;?></td>
    <td><?php echo $date ;?></td>
    <td><?php echo $activity ;?></td>
  </tr>
  <?php } ?>
 
   </table>
   </pre>
   <br>           
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