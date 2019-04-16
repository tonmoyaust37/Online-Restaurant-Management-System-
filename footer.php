<script src="js/jquery-3.3.1.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	
	<script type="text/javascript">
		$(document).ready(function() {
			
			$(window).scroll(function() {
				if ($(document).scrollTop() > 550) {
					
					$('#nav').addClass('change');
					// test
					$(".dropdown").mouseenter(function() {
						// alert("Hello! I am an alert box!");
						// $(".dropdown").addClass('displayOn');
						// alert("Hello! brother!!!");
						$(".dropdown-menu").css("background", "#1C3334");
						$(".dropdown-item").css("background", "#1C3334");
						
						$(".dropdown-menu").css("opacity", "9");
						
						$(".dropdown-menu").hover(function() {
							// alert("inside the item");
							$(".dropdown-menu").css("background", "#1C3334");
							$(".dropdown-item").css("background", "#1C3334");
							$(".dropdown-menu").css("opacity", "9");
						});
						
					});
					$(".dropdown").mouseleave(function() {
						$(".dropdown-menu").css("background", "black");
						$(".dropdown-menu").css("opacity", "0.6")
						$(".dropdown-item").css("background", "black")
					});
					} else {
					$('#nav').removeClass('change');
					$(".dropdown").mouseenter(function() {
						// alert("Hello! I am an alert box!");
						// $(".dropdown").addClass('displayOn');
						// alert("Hello! brother!!!");
						$(".dropdown-menu").css("background", "black");
						$(".dropdown-item").css("background", "black");
						$(".dropdown-menu").css("opacity", "0.6");
						$(".dropdown-menu").hover(function() {
							// alert("inside the item");
							$(".dropdown-menu").css("background", "#000");
							$(".dropdown-item").css("background", "#000");
							$(".dropdown-menu").css("opacity", "0.6");
						});
					});
					$(".dropdown").mouseleave(function() {
						$(".dropdown-menu").css("background", "black");
						$(".dropdown-item").css("background", "black");
						$(".dropdown-menu").css("opacity", "0.6")
					});
				}
			});
		});
	</script>
	
	
	
	<!-- $(".dropdown-menu").hover(function() {
		$(this).css("background-color", "black");
		$(this).css("opacity", "9");
		
		}, function() {
		// $(this).css("background-color", "t");
		$(this).css("background-color", "black");
		$(this).css("opacity", "0.6");
		
		});
	-->
	
	
</body>

</html>