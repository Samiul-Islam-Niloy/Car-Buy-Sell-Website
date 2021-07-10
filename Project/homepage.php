<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap"rel="stylesheet">
</head>
<body>

	<?php include 'navbar.php'; ?>

	<div id="demo" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/FordMustung.jpg" alt="Ford" width="1100" height="500">
			</div>
			<div class="carousel-item">
				<img src="images/Lamborghini.jpg" alt="Lamborghini" width="1100" height="500">
			</div>
			<div class="carousel-item">
				<img src="images/Skoda.jpg" alt="Skoda" width="1100" height="500">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">We are here for you</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<img src="images/MercedesBenz.jpg" class="img-fluid aboutimg">
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<h2 class="display-4">We are AutoMobile Center</h2>
					<p class="py-3">AutoMobile Center is building a better automotive buying experience for everyone, by offering the best apps and the largest selection of new and used cars in the United States. Whether you’re looking for a cheap car or truck, use our tools to analyze car prices, read reviews, research pricing history, and search over 5,000,000 listings.Each car we create is different, with its own personality, its own DNA and is a one-off in every way. The Lykan HyperSport represents the birth of W Motors and the translation of a long-held dream into a drivable reality. The Fenyr SuperSport represents the future of W Motors and our commitment to taking bold steps with each evolution.It’s never been about creating the most expensive car in the world; it’s about bringing a new industry to Dubai and the Middle East. Use our website, search a vehicle for yourself and of course, enjoy!</p>
					<a href="aboutus.php" class="btn btn-success"> Know More </a>
				</div>
			</div>
		</div>
	</section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Featured</h2>
	</div>

	<div class="row mt-5 mb-5 mr-1 ml-1">				

<?php 

	                $con = mysqli_connect("localhost","root","","170204016");
                   $query = "SELECT * FROM feature ";
                   $select_all_product_query = mysqli_query($con,$query);
                 while($row = mysqli_fetch_assoc($select_all_product_query)) {
                     
					 $product_des = $row['description'];
					 $product_direction = $row['imglocation'];
					  
					   $product_id = $row['ID'];
					    $product_price = $row['price'];
						$product_title = $row['title'];

					  $_SESSION['ID'] = $row['ID'];
					  $t =$row['ID'];       
               
 					   ?>

<div class="col-md-4">
<div class="card">
	
					<img class="card-img-top" src="<?php echo $product_direction ?>" alt="Card image">
					<div class="card-body">
						<h4 class="card-title"><?php echo $product_title ?></h4>
						<p class="card-text"><?php echo $product_des  ?></p>
						<?php
                  ?>
						<a href= 'featuredetails.php?p_id=<?php echo $t?>' class="btn btn-primary">See Profile</a>
						<?php
                ?>

					</div>

				</div>



				</div>

<?php } ?>
				</div>


	</div>

				
			

		





	<section>

	</section>

	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Gallery</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/GTCitreon.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/AstonMartin.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Jeep.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/BMW.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Audi.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/WMotorsFenyrSuperSport.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Ferrari1.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/PaganiZonda.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/MercedesBenz2.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Koenigsegg.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Chevrolet.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Bugatti1.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Ferrari2.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/ArrineraHussarya.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/BMW1.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/LamborghiniHuracan.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/FordGT.jpg" class="img-fluid pb-4">
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/RimacCTwo.jpg" class="img-fluid pb-4">
				</div>

			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>