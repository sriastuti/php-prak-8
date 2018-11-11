<!DOCTYPE html>
<html>
<head>
	<title>Struktur kendali perulangan IF...ELSEIF</title>
</head>
<body>
	<?php 
		$PW = 90;
		if ($PW >= 80 ) {
			echo "Nilai = A";
		}
		elseif ($PW >= 40 ) {
			echo "Nilai = B";
		}
		elseif ($PW >= 20 ) {
			echo "Nilai = C";
		}
		else {
			echo "Nilai = D";
		}
	?>
</body>
</html>