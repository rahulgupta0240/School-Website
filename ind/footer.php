<!-- footer -->
	<div class="footer">
		<div class="container">
 			<div class="w3agile_footer_copy">
				<p style="color:#FFF;">© 2018 Shri Nath International School ,Mandsaur| Developed by <a href="http://kaivalyatechno.com/" target="_blank"> Kaivalya Techno Soft Pvt. Ltd.</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- End-slider-script -->
