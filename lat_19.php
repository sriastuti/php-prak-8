<!DOCTYPE html>
<html>
<head>
	<title>Struktur kendali perulangan Switch</title>
</head>
<body>
	<?php 
	$PW = 50;
	switch ($PW) {
		case ($PW >= 80) :
		$nilai = "A";
		break;
		case ($PW >= 40) :
		$nilai = "B";
		break;
		case ($PW >= 20) :
		$nilai = "C";
		break;
		default:
		$nilai = "D";
	}
	echo "<h2>Nilai = $nilai </h2>";
	?>
</body>
</html>