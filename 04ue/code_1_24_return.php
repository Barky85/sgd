<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body>
<?php 
function summiere($zahlen): int {
	$summe = 0; 
	foreach($zahlen as $wert) { 
		$summe += $wert; 
		if ($summe > 50) { 
			echo "Grenze erreicht!"; 
			return $summe; 
		} 
	} 
	echo "Das wird nur ausgegeben, wenn Summe <= 50 ist"; 
	return $summe; 
} 
$summe = summiere(array(1,5,7,2,4,2,5,6,4,9,7,5)); 
echo "<p>$summe</p>\n"; 
echo "<hr />"; 
$summe = summiere(array(1,2,5,6,4,9,7,5)); 
echo "<p>$summe</p>\n"; 
?> 
</body>
</html>