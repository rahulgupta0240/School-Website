<?php $page = '7' ;?>
<?php
$error='';
	if(isset($_POST['name']))
	{
    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$mobile=$_POST['mobile'];
   	 	$smobile=$_POST['msg'];
        $email_to = 'shrinathinternationalschool@gmail.com';
        $email_from = $email;
        $email_subject = "Shri Nath Public School- Visitors Message";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        $email_message = "A Visitor from your website, messaged you:.\n\n";
	    $email_message .= "Visitor Name : ".$name."\n";
	    $email_message .= "Visitor Email: ".$email."\n";
	    $email_message .= "Visitor Mobile: ".$mobile."\n";
	    $email_message .= "Message: ".$smobile."\n";     
			// create email headers
            $headers = 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers); 
?>
<script>
  
  alert('Thank you for messaging! We will contact you as soon as possible.');
  window.location='contact.php';
 </script>
<?php }
?>
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
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- contact -->
	<div class="welcome">
		<div class="container">
			<h2 class="agileits-title">Contact</h2>
			 
				<div class="w3ls-cont">
				<div class="col-md-8 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form action="contact.php" method="post">
							<span>
								<i>Name</i>
								<input type="text" name="name" placeholder=" " required="">
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="email" placeholder=" " required="">
							</span>
							<span>
								<i>Mobile</i>
								<input type="text" name="mobile" placeholder=" " required="">
							</span>
							<span>
								<i>Message</i>
								<textarea name="msg" placeholder=" " required=""></textarea>
							</span>
							<div class="w3_submit">
								<input type="submit" value="Submit Now">
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4 w3_agile_mail_right">
					<div class="w3_agileits_mail_right_grid">
						<h4>Tejswini Patidar  </h4>
						<h5>Shri Nath International School</h5>
                        <p> Rajakhedi in front of Petrol Pump Riccha Bccha , Mandsaur(M.P.) 458001</p>  
                        <p>Mob.No.- 8821922420</p>
						 <p><b>Registration No.</b>:-23190623765</p>
						<div class="w3_agileits_mail_right_grid_pos">
							<img src="images/tejswini-patidar.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		<div class="map-grid">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14580.352531423347!2d75.06305914610336!3d23.992664718126626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39642fd9eb09f461%3A0x72fcdc9d9909e68!2sShri+Nath+International+School!5e0!3m2!1sen!2sin!4v1536925314293" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

	<!-- footer -->
	<?php include('ind/footer.php') ?>

</body>
</html>