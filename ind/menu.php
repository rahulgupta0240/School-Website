 	<!-- header -->
	<div class="header-w3layoutstop">
		<div class="container">  
			<div class="hdr-w3left navbar-left">
				<p><span class="fa fa-building-o"></span> <b>Registration No:23190623765</b>&nbsp;</p> 
			</div>
			<div class="w3ls-bnr-icons social-w3licon navbar-right">
				<!---<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>--->
				<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
				<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
				 
			</div>			
		</div>
	</div>
	<!-- navigation -->
	<nav class="navbar">
	<div class="top-nav w3-agiletop">
		<div class="container">
			<div class="navbar-header w3llogo">
				<a href="index.php"><img src="images/logo.png" alt="logo" class="img-responsive1"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>  
				
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="w3menu navbar-right">
					<ul class="nav navbar">
						<li><a  <?php if($page == '1'): ?> class="active"<?php endif ?> href="index.php"  >Home</a></li>
						<li class="dropdown">
								<a  <?php if($page == '2'): ?> class="active"<?php endif ?> href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
                                 
 									<li><a href="principal.php">Principal's Message</a></li>  								</ul>
							</li>
                            
                            <li class="dropdown">
								<a  <?php if($page == '3'): ?> class="active"<?php endif ?> href="#" class="dropdown-toggle" data-toggle="dropdown">Academic  <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
						 <li><a href="admission.php">Admission Form</a></li> 
							 <li><a href="facilities.php">Facilities</a></li>
                            <li><a href="dresscode.php">Dress Code</a></li>
                             <li><a href="feedetail.php">Fee Detail</a></li>
                              <li><a href="activity.php">Activity Chart</a></li>
                                 <li><a href="staff_details.php">Staff Details</a></li>
                                <li><a href="examination.php">Examination</a></li>
                              <li><a href="tc.php">Transfer Certificate</a></li>
								</ul>
							</li>
                            
                            <li class="dropdown">
								<a  <?php if($page == '4'): ?> class="active"<?php endif ?> href="#" class="dropdown-toggle" data-toggle="dropdown">Media <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="photogallery.php">Photo Gallery</a></li>
									<li><a href="videogallery.php">Video Gallery</a></li>
								</ul>
							</li>
                        <li><a  <?php if($page == '5'): ?> class="active"<?php endif ?> href="new.php">News</a></li>
 						<li><a  <?php if($page == '6'): ?> class="active"<?php endif ?> href="vacancy.php">Vacancy</a></li>
						<li><a  <?php if($page == '7'): ?> class="active"<?php endif ?> href="contact.php">Contact</a></li>
					</ul>
				</div> 
				<div class="clearfix"> </div>  
			</div>
		</div>	
	</div>	
	</nav>
	
	<!-- //navigation -->
    
	 