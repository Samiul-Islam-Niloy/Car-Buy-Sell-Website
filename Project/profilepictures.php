<?php

session_start();

if(!isset($_FILES['image'])){
	header ('location:userprofile.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['username']; ?>'s Profile</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
		<label for="file" class="form-control collectes-ville text-center">Profile Picture</label>

		<div class="container">
			<div>
				<?php
					//include 'userprofile.php';
				$server = "localhost";
				$user = "root";
				$password = "";
				$db = "170204016";

				$con = mysqli_connect($server,$user,$password,$db);


				if(isset($_POST['submit'])){
					$files = $_FILES['image'];

					$username = $_SESSION['username'];

					$filename = $files['name'];

					$fileerror = $files['error'];
					$filetmp = $files['tmp_name'];
					$fileext = explode('.',$filename);
					$filecheck = strtolower(end($fileext));
					$fileextstored = array('png','jpg','jpeg');
					if(in_array($filecheck,$fileextstored))
					{
						$destinationfile = 'images/profile/'.$filename;
						move_uploaded_file($filetmp,$destinationfile);
						$q = "UPDATE registration SET image = '$destinationfile' WHERE username = '$username'";
						$query = mysqli_query($con,$q);
						$displayquery = "select * from registration WHERE username = '$username'";
						$querydisplay = mysqli_query($con,$displayquery);
					//$row = mysqli_num_rows($querydisplay);
						if ($result = mysqli_fetch_array($querydisplay)) {
							?>

							<p>
								<center>
									<img src= "<?php echo $result['image'] ?>" height = "150px" width="150px">
								</center>
							</p>
							



							<?php		
						}	


					}else{
						echo "Extension is not matching";
					}

				}

				?>
			</div>	
		</div>	

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
		<center>
			<a href="logout.php">Logout</a>
		</center>
	</div>

	<?php include 'footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>