<?php include('users.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<center><button type="submit" class="btn" name="reg_user">Register</button></center>
		</div>
		<div class="input-group">
			<p>
				<center>Already have an account?
					<form>
						<button formaction="login.php" class="btn">Login</button>
					</form>
				</center>
			</p>
		</div>

	</form>
</body>

</html>