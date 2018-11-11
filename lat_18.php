<!DOCTYPE html>
<html>
<head>
	<title>Struktur kendali perulangan Switch</title>
</head>
<body>
	<?php 
		$english = date("l");
		switch ($english) {
				case 'Monday':
					$indonesia = "Senin";
					break;
				case "Tuesday":
					$indonesia = "Selasa";
					break;
				case "Wednesday":
					$indonesia = "Rabu";
					break;
				case "Thursday":
					$indonesia = "Kamis";
					break;
				case "Friday":
					$indonesia = "Jumat";
					break;
				case "Saturday":
					$indonesia = "Sabtu";
					break;
				default:
					$indonesia = "Minggu";
			}
			echo "<h2>Hari ini adalah hari $indonesia </h2>";
	?>
</body>
</html>