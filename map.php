<!DOCTYPE html>
<html>

<head>
	<style>
		#map {
			height: 4600px;
			width: 100%;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<div class="input-group">
	<div class="header">
		<h2>Google Maps Demo</h2>
	</div>	
	<center>
	<form>
	<button formaction="index.php" class="btn">Back Home</button>
	</form>
	</center>
	
	</div>
	
	<br>

	<div id="map"></div>
	<script>
		function initMap() {
			var uluru = {
				lati: 45.65332734304212,
				longi:25.582619656808827
			};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 15,
				center: uluru,
				gestureHandling: "greedy"
			});

			<?php

			$conn = mysqli_connect("localhost", "root", "") or die(mysqli_error());
			mysqli_select_db($conn, "proiectpai");
			$sql_read = "SELECT * FROM points";
			$result = mysqli_query($conn, $sql_read);

			if (!$result) {
				die('Could not read data: ' . mysqli_error());
			}

			while ($row = mysqli_fetch_array($result)) {
				$id = $row['ID'];
				$lati = $row['lati'];
				$longi = $row['longi'];
				$desc = $row['description'];

				echo "var marker = new google.maps.Marker({position:{lat:$lati,lng:$longi},map: map});";
			}
			?>
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUWQp2igSt430i6yxWcz-rpQk0cE1Oiwg&callback=initMap&v=weekly">
	</script>
	
</body>

</html>