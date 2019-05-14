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
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
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
					<li><i class="fa fa-info-circle" aria-hidden="true"></i>Staff Details</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- about -->
	<div class="welcome">
		<div class="container">
			<h2 class="agileits-title">Staff Details</h2>
			    <div class="col-md-12">
                <pre>
                 <table id="customers">
  <tr>
    <th> S No.</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Address</th>
 <th>Contact</th>
<th>Email Id</th>
 <th>Salary</th>
  </tr>
  <?php include('admin/db.php') ?>
   <?php
       $i=0;
$query=mysql_query("SELECT * FROM `staff`");
while($row=mysql_fetch_array($query))
{
$i=$i+1;
$id=$row['id'];
$name=$row['name'];
$des=$row['designation'];
$contact=$row['contact'];
$address=$row['address'];
$email=$row['email'];
$salary=$row['salary'];
?>
  <tr>
    <td><?php echo $i ;?></td>
    <td><?php echo $name ;?></td>
    <td><?php echo $des ;?></td>
    <td><?php echo $address ;?></td>
    <td><?php echo $contact ;?></td>
  <td><?php echo $email ;?></td>
    <td><?php echo $salary ;?>/-</td>
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