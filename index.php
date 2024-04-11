<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

	<div class="header">
		<h2>Home Page</h2>
	</div>
	
	<div class="content">	
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php if (isset($_SESSION['username'])) : ?>
			<p> <center> Welcome <strong><?php echo $_SESSION['username']; ?></strong> </center> </p>
			<p style="color:black"> <center> <a href="index.php?logout='1'" style="color: red;">logout</a> </center> </p>
			
		<?php endif ?>
		
	</div>

	
	<div class="input-group">
	<div class="header">
		<h2>Links</h2>
	</div>	
	<center>
	<form>
	<a href = "Dinu Sebastian.pdf" class="btn">View my CV</a>
	<button formaction="map.html" class="btn">View my Google Maps page</button>
	</form>
	</center>
	
	</div>

</body>

</html>