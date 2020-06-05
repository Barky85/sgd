<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body>
<?php
function summiere(... $summanden) {
//	$summe = 0; 
	foreach($summanden As $wert) { 
		$summe += $wert; 
	} 
 }
$summe = 0;
summiere(1,5,7,2,4,2,5,6,4,9,7,5);
echo "<p>$summe</p>\n";
?> 

</body>
</html>