<?php

session_start();

if(!isset($_SESSION['username'])){
	header ('location:login-registration.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['username']; ?>'s Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap"rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php'; ?>

	<h1 class="text-center"> Hello <?php echo $_SESSION['username']; ?>!</h1>

	<div class="container">
		<h1 class="text-white bg-dark text-center">Your Profile</h1>
			<div>
				<label for="user" class=" form-control collectes-ville text-center">Username</label>
				<h4 class="text-center"><?php echo $_SESSION['username']; ?></h4>
			</div>

			<form action="profilepictures.php" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="file" class="form-control collectes-ville text-center">Profile Picture</label>
				
				
				<input type="file" name="image" id="file">		
				<input type="submit" name="submit" value="Update" >
			
			</div>

			</form>

			<div>
				<label for="user" class=" form-control collectes-ville text-center">Email Address</label>
				<h4 class="text-center"><?php echo $_SESSION['email']; ?></h4>
			</div>

			<div>
				<label for="user" class=" form-control collectes-ville text-center">Mobile Number</label>
				<h4 class="text-center"><?php echo $_SESSION['mobile']; ?></h4>
			</div>
			
	</div>

	<div class="contact_btn">
		<a href="logout.php">Logout</a>
	</div>

	<?php include 'footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>