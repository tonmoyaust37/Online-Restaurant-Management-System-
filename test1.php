
<?php
	session_start();	
	$db = mysqli_connect("localhost", "root", "", "onlinerestaurent");
	$result = mysqli_query($db, "SELECT * FROM images");
	
	
?>


<!DOCTYPE html>
<html lang="en">	
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
		
        <!-- Bootstrap -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		
		<!-- All Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
		<!-- font-family: 'Coiny', cursive; -->
		
		<link rel="stylesheet" href="css/style1.css">	
		<link rel="stylesheet" href="css/our_chef.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body>
		
		<div class="header_Section">
			<!-- navbar-light bg-light  -->
			<nav class="navbar navbar-expand-lg fixed-top" id="nav">
				<a class="navbar-brand" href="#"><img src="img/logo3.png" class="img-fluid" alt="">
				</a>
				<button class="navbar-toggler navbar-dark custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					
					
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="test1.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="food_menu.php">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login_system.php">
								<?php
									if(!empty($_SESSION['email'])){
										$_SESSION['fromMainPage']='1';
										echo "Logout";
									}
									else{
										echo "Login";
									}
								?>
								
								
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Gallery</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								About Us
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdownId">
								<a class="dropdown-item" href="#our_chef">Our Chefs</a>
								<a class="dropdown-item" href="recipe.php">Free Recipe</a>
								<a class="dropdown-item" href="see_review.php">See Review</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact_us.php">Contact Us</a>
						</li>
					</ul>
					<!-- <form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form> -->
				</div>
			</nav>
			
		</div>
		<div class="slider_section">
			<div id="demo" class="carousel slide" data-interval="5000" data-ride="carousel">
				
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				
				<!-- The slideshow -->
				
				<div class="carousel-inner">
					<div class="carousel-item active">
						
						<?php 
							//$row = mysqli_fetch_array($result);
							//echo $row[1];
							$post = array();
							while($row = mysqli_fetch_array($result))
							{
								$post[] = $row[1];
								$highCap[]=$row[2];
								$descr[]=$row[3];
								//echo $post[0];
							}
							
							
						?>
						
						
						
						<?php echo "<img src='img/".$post[0]."' >";					
						?>
						
						<div class="carousel-caption  d-md-block animated bounceInUp">
							<h2 class="animated bounceInRight"><?php echo $highCap[0]?></h2>
							<p class="animated bounceInLeft"><?php echo $descr[0]?></p>
						</div>
					</div>
					<div class="carousel-item">
						<!--	<img src="img/slide2.jpg" alt="Chicago" width="1100" height="500">   -->
						<?php echo "<img src='img/".$post[1]."' >";					
						?>
						<div class="carousel-caption d-none d-md-block animated bounceInDown">
							<h2 class="animated bounceInRight"><?php echo $highCap[1]?></h2>
							<p class="animated bounceInLeft"><?php echo $descr[1]?></p>
						</div>
					</div>
					<div class="carousel-item">
						<!--<img src="img/slide3.jpg" alt="New York" width="1100" height="500">  -->
						<?php echo "<img src='img/".$post[2]."' >";					
						?>
						<div class="carousel-caption d-none d-md-block animated bounceInUp">
							<h2 class="animated bounceInRight"><?php echo $highCap[2]?></h2>
							<p class="animated bounceInLeft"><?php echo $descr[2]?></p>
						</div>
					</div>
				</div>
				
				
				<!-- See this -->
				<?php
					while ($row = mysqli_fetch_array($result)) {
						echo "<div id='img_div'>";
						echo "<img src='images/".$row['images']."' >";
						echo "<p>".$row['text']."</p>";
						echo "</div>";
					}
					
				?>
				
				
				
				
				
				
				
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
		
		<div class="container-fluid Exclusive_offer pt-3 pb-3 bg-orange d-none d-md-block">
			<div class="container">
				<div class="row">
					<div class="col-md-4 m-right">
						<h4>FREE SHIPPING</h4>
						<p>On all orders over 50$</p>
					</div>
					
					<div class="col-md-4 m-right">
						<h4>CALL US ANYTIME</h4>
						<p>+880 1820904850</p>
					</div>
					
					<div class="col-md-4">
						<h4>OUR LOCATION</h4>
						<p>Modhubug, Rampura</p>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<div class="Special_discount_offer container-fluid pt-5 pb-5 bg-light-gray">
			<div class="container">
				<div class="row">
					<h4>SPECIAL OFFERS</h4>
				</div>
				<div class="row">
					<div class="underline-blue"></div>
				</div>
			</div>
			
			<div class="container pt-5">
				<div class="row">
					<div class="col-md-3">
						<div class="card zoom ">
							<img src="img/food1.jpeg" alt="egg-fried-rice" class="card-img-top ">
							<div class="card-body">
								<h4>Egg Fried Rice</h4>
								<h6>$67.87</h6>
								<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="card zoom ">
							<img src="img/food2.jpeg" alt="Salad-dish" class="card-img-top">
							<div class="card-body">
								<h4>Pepper Jelly</h4>
								<h6>$67.87</h6>
								<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="card zoom">
							<img src="img/food3.jpeg" alt="stawberry-juice" class="card-img-top">
							<div class="card-body">
								<h4>Strawberry Juice</h4>
								<h6>$67.87</h6>
								<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="card zoom">
							<img src="img/food4.jpeg" alt="barbecue" class="card-img-top">
							<div class="card-body">
								<h4>Berbecue Meat Grill</h4>
								<h6>$67.87</h6>
								<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="about_us">
		<div class="container">		
			
			<div class="row">
				<div class="col-md-6">					
					<h2>About Us</h2>
					<p>We are a team of dedicated, food enthusiasts who welcomes you to order food online and have it delivered to your doorsteps. We truly aim to serve other food enthusiasts long term and in international standards. You no longer have to wait in queues for takeaways or sit in traffic jam while the food gets cold or even carry hot packed food.</p>				
				</div>
				<div class="col-md-6">
					<img class="about_us_img img-fluid" src="img/about.png" alt="About Us">
				</div>	
			</div>
		</div>
	</div>
	
	
	
	<!-- Map -->
	<div class="our_map embed-responsive embed-responsive-21by9">	
		<iframe class="embed-responsive-item"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.914439578543!2d90.41074799716193!3d23.759580834240836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b88061069cb5%3A0x33f9c0b957aa7dc5!2sTamim+Fastfood!5e0!3m2!1sen!2sbd!4v1533760977262"  frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
	
	<div class="teachers" id="our_chef">
		<div class="container">
			<div class="row">
				<div class="teach-head">
					<h3>OUR CHEF</h3>
					<p>We have the best chef of the city to serve you a good and healthy food. Everyone is working hard to cooking delicious memories and serving them to you. There are many category of chefs for different dishes. The Executive chefs is the main of all chefs. He has a great reputation and won many prizes on cooking.  </p>
				</div>
				
				
				<div class="col-md-3 team-grid text-center">
					<div class="team-img">
						<img src="chef_img/1.png" alt=""/>
						<h3>FEDERICA</h3>
						<h4>Executive Chef</h4>
						<ul>
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 team-grid text-center">
					<div class="team-img">
						<img src="chef_img/2.png" alt=""/>
						<h3>PATRICK</h3>
						<h4>Sous Chef</h4>
						
						<ul>
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 team-grid text-center">
					<div class="team-img">
						<img src="chef_img/3.png" alt=""/>
						<h3>JANE ASHER</h3>
						<h4>Expediter</h4>
						
						<ul>
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 team-grid text-center">
					<div class="team-img">
						<img src="chef_img/4.png" alt=""/>
						<h3>VICTORIA</h3>
						<h4>Vegetable Cook</h4>
						
						<ul>
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
				
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
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
	
	<script>	
		$(function () {
			$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
		});	
	</script>
	
	
	
	
	
</body>

</html>
