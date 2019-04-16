<?php
	
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
		
		
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" type="text/css" href="css/style21.css">
		<link rel="stylesheet" type="text/css" href="css/style2_for_recipe.css">
		
	</head>
	
    <body>
		
		<div class="header_Section">
			<!-- navbar-light bg-light  -->
			<nav class="navbar navbar-expand-lg fixed-top" id="nav">
				<a class="navbar-brand" href="#"><img src="img/logo3.png" class="img-fluid" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
						<li class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								About Us
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdownId">
								<a class="dropdown-item" href="test1.php#our_chef">Our Chefs</a>
								<a class="dropdown-item" href="#">Free Recipe</a>
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
		
		
		
		
		
		<div class="recipe_heading">
			<h1 class="text-center">Mutton kacchi biryani</h1>
			<br>
			
			<div class="container">
				<div class="row">
					<div class="col-md-7 ">
						<p class="text-justify">
							In Bangladesh and many parts of India and Pakistan, different types of rice and meat based ‘Biryani’ recipe are prepared. Among all those, Mutton Kacchi Biryani recipe is the highly attractive to the food lovers. It contains a good amount of mutton, which is usually double than the quantity of rice. Thus the recipe provides a meal with full of protein and food caloric value. It is the most traditional item, which is prepared for high-level entertainment during marriage reception and parties or such grand occasions. Its specialty is the cooking phase, while the lid is never turned on, rather sealed to contain all scent of the ingredients within the food until the meal is served.
						</p>
						
						<p>
							Usually, large copper dishes are used for cooking kacchi biryani, as it is prepared for a large number of guests. However, here, the quantity of each ingredient is considered for serving to a small group (family and friend level). The mutton kacchi biryani recipe is not easy to cook but we always try to cook our favorite food at home whatever it is hard or easy. Friends lets try to make a delicious food ”Kacchi biryani” at home.
						</p>
						
						<br>
						
						<h4>Ingredients for kacchi biryani recipe:</h4>
						2 kg mutton (the meat should not be from very young or too aged goat)
						<br>
						2 cups ghee
						<br>
						1 kg basmati rice (you can use miniature rice as well, but basmati rice will give a special flavor and look longer than usual size of rice)
						<br>
						2 cups yogurt
						<br>
						2 cups milk
						<br>
						1 cup cooking oil
						<br>
						2 tsp hot spices powder
						<br>
						2 tsp cumin powder
						<br>
						8-10 potatoes medium size (about 500 gm)
						<br>
						2 tsp red chili powder
						<br>
						2 cups chopped onion
						<br>
						6 sticks cinnamon
						<br>
						8 pieces cardamoms
						<br>
						6 pieces cloves
						<br>
						1 tsp mace powder
						<br>
						2 tbsp garlic paste
						<br>
						2 tbsp ginger paste
						<br>
						8 pieces bay leaves
						<br>
						1 tsp black pepper
						<br>
						1 tsp nutmeg powder
						<br>
						10 pieces dried Alu Bokhara (prune)
						<br>
						15 pieces raisins
						<br>
						1 tbsp kewra water
						<br>
						2 tbsp sugar
						<br>
						2 tbsp salt
						<br>
						<br>
						
						<h4>Process for kacchi biryani recipe:</h4>
						<br>
						<h6>Step 1:</h6>
						
						Chop mutton about 150 gm size each with a good quality of the sharp knife. Clean the mutton pieces and drain out water.<br><br>
						<h6>Step 2:</h6>
						
						Marinate mutton for 2-3 hours mixing with all spices less 50% ghee and except onion and milk.<br><br>
						
						<h6>Step 3:</h6>
						
						Fry potatoes lightly in oil and keep separately. Then fry onion slices till they turn to brown color.<br><br>
						<h6>Step 4:</h6>
						
						Half cook rice and then keep on a strainer to drain out water.<br><br>
						<h6>Step 5:</h6>
						
						Take a big deep and heavy pan. It would be non-stick or aluminum or stainless steel. You can check store and online for the best saucepan.						
						After marinating the mutton, add milk on and then spread rice and half fried potato over mutton. Spread fried onion, rest of the ghee, dried prune, raisin and kewra water one over the other. Cover the pan with a lid and seal it (You can use flour dough for sealing).<br><br>
						<h6>Step 6:</h6>
						
						Keep on the burner on low beam for about an hour. You will get a scent of kacchi biryani once cooking of kacchi biryani is over. Open the lid and mix gently and again cover the lid.					
						Take to the serving dish at the time of meal to serve the mutton kacchi biryani hot and with flavor.<br><br>
						
						
					</div>
					<div class="col-md-5">
						<img src="img/recipe1.jpg" class="img-fluid">	
					</div>
					
				</div>
			</div>
		</div>
		
		
		
		
		<?php
			include 'footer.php';	
		?>																			