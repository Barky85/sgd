<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body>
<?php 
function summiere() {
	$summe = 0; 
	for ($i = 0; $i < func_num_args(); $i++) { 
		$summe += func_get_arg($i); 
	} 
	echo "<p>$summe</p>\n"; 
} 
summiere(1,5,7,2,4,2,5,6,4,9,7,5); 
?> 
 
</body>
</html>