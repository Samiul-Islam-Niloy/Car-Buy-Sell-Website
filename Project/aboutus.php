<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap"rel="stylesheet">
</head>
<body>
	
	<?php include 'navbar.php'; ?>

	<div class="jumbotron">
  <h1>AutoMobile Center</h1>
  <p>AutoMobile Center is building a better automotive buying experience for everyone, by offering the best apps and the largest selection of new and used cars in the United States. Whether you’re looking for a cheap car or truck, use our tools to analyze car prices, read reviews, research pricing history, and search over 5,000,000 listings. Use our website, search a vehicle for yourself and of course, enjoy!</p>
</div>

<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">About Us</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
<?php 

	                $con = mysqli_connect("localhost","root","","170204016");
                   $query = "SELECT * FROM aboutus ";
                   $select_all_product_query = mysqli_query($con,$query);
                 while($row = mysqli_fetch_assoc($select_all_product_query)) {
                     
					 $product_des = $row['description'];
					 $product_direction = $row['imglocation'];
					  
					   				    
						$product_title = $row['title'];

					  $_SESSION['ID'] = $row['ID'];
					 
        

               
 					   ?>




					<img src="<?php echo $product_direction ?>" class="img-fluid aboutimg">
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<h2 class="display-4"><?php echo $product_title ?></h2>
					<p class="py-3"><?php echo $product_des ?></p>
				</div>
			</div>
			<?php } ?>
		</div>
	</section class="my-5">

	<section class="my-5">
		<div class="py-5">

			<h1 class="text-center">Address</h1>

			<p class="text-center">141 & 142, Love Road, Dhaka 1208</p>

			<h1 class="text-center">Phone</h1>
			<p class="text-center">Tel. (8802) 8870422, Ext. 107, 114, Fax : (8802) 8870417-18</p>

			<h1 class="text-center">Email</h1>

			<p class="text-center">info@automobilecenter.com</p>

			<h1 class="text-center">Our Location</h1>

			<br>

			<p class="text-center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14606.157146179487!2d90.39799932746118!3d23.76380315332244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77decb5f845%3A0xc2eadd2f3b867792!2sAhsanullah%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sbd!4v1600181706902!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
			
		</div>
		
	</section>

	<?php include 'footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>