<?php
	$a = "$USS Enterprise";
	$b = "Menurut catatan Kapten";
	$c = "Menguji Planet Valcon";

	$alt1 = $a . " " . $c . "," .$b . "."
	$alt2 = $b . " " . $a . "," .$c . "."
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menggabungkan String</title>
</head>
<body>
	String yang pertama adalah :"<br>"
	<?php echo "$alt1 ?>
	<?php echo "$alt2 ?> 
</body>
</html>