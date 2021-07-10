<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap"rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php

	include 'dbconforloginreg.php';
	if(isset($_POST['loginsubmit'])){
		$email = $_POST['emaillogin'];
		$password = $_POST['loginpassword'];
		$email_search = "select * from registration where email='$email'";
		$query = mysqli_query($con,$email_search);
		$email_count = mysqli_num_rows($query);
		if($email_count){
			$email_pass = mysqli_fetch_assoc($query);
			$db_pass = $email_pass['password'];
			$_SESSION['username'] = $email_pass['username'];
			$_SESSION['email'] = $email_pass['email'];
			$_SESSION['mobile'] = $email_pass['mobile'];
			$_FILES['image'] = $email_pass['image'];
			if($db_pass){
				echo "Login Successful";
				?>
				<script>
					location.replace("homepage.php");
				</script>
				<?php
			}else{
				echo "Password Incorrect";
			}  
		}else{
			echo "Invalid Email";
		}
	}

	?>


	<?php

	include 'dbconforloginreg.php';

	if(isset($_POST['submit'])){

		$username =mysqli_real_escape_string($con, $_POST['username']) ;
		$email =mysqli_real_escape_string($con, $_POST['email']) ;
		$mobile =mysqli_real_escape_string($con, $_POST['mobile']) ;
		$password =mysqli_real_escape_string($con, $_POST['password']) ;
		$cpassword =mysqli_real_escape_string($con, $_POST['cpassword']) ;

		$emailquery = "select * from  registration where email='$email'";
		$query = mysqli_query($con,$emailquery);
		$emailcount = mysqli_num_rows($query);

		if($emailcount>0){
			?>
			<script>
				alert("Email alredy used");
			</script>
			<?php
		}else{
			if($password==$cpassword){
				$insertquery = "insert into registration (username, email, mobile, password, cpassword) values('$username','$email','$mobile','$password','$cpassword')";
				$iquery = mysqli_query($con, $insertquery);
				if($iquery){
					?>
					<script>
						alert("Registration Succesfull");
					</script>
					<?php
					?>
					<script>
						location.replace("login-registration.php");
					</script>
					<?php
				}else{
					?>
					<script>
						alert("No Connection");
					</script>
					<?php
				}
			}else{
				?>
				<script>
					alert("Passwords aren't matching");
				</script>
				<?php
			}
		}
	}

	?>	

	<div class="uclass">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button id="rgt" type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<button id="fb-img" onclick="window.open('https://facebook.com')">
					<img src="images/fb.png">
				</button>
				<button id="twitter-img" onclick="window.open('https://twitter.com')">
					<img src="images/twitter.png">
					<button id="gmail-img" onclick="window.open('https://mail.google.com')">
						<img src="images/gmail.png">
					</div>
					<form id="login" class="input-group" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
						<input name="emaillogin" type="text" class="input-field" placeholder="Email ID" required>
						<input name="loginpassword" type="password" class="input-field" placeholder="Enter Password" required>	
						<p>
						<br>
						<br>	
						<button type="submit" name="loginsubmit" class="submit-btn">Log in</button>
						<br>
						<br>
						<button type="submit" class="submit-btn" formnovalidate onclick="window.open('homepage.php')">Home</button>
					</p>
					</form>

					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="register" class="input-group" method="POST">
						<input type="text" name="username" class="input-field" placeholder="User Name" required>
						<input type="email" name="email" class="input-field" placeholder="Email ID" required>
						<input type="tel" name="mobile" class="input-field" placeholder="Phone Number" required>
						<input type="password"
						name="password" class="input-field" placeholder="Enter Password" required>
						<input type="password" name="cpassword" class="input-field" placeholder="Enter Password Again" required>
						<input type="checkbox" id="myCheck" class="check-box"><span>I agree to the terms and conditions</span>
						<button type="submit" name="submit" class="submit-btn" onclick="myFunction()">Register</button>
					</form>

				</div>		
			</div>

			<script>
				var x = document.getElementById("login");
				var y = document.getElementById("register");
				var z = document.getElementById("btn");
				function register(){
					x.style.left = "-400px";
					y.style.left = "50px";
					z.style.left = "110px";
				}
				function login(){
					x.style.left = "50px";
					y.style.left = "450px";
					z.style.left = "0px";
				}
				function myFunction() {
					document.getElementById("myCheck").required = true;
				}
			</script>

		</body>
		</html>