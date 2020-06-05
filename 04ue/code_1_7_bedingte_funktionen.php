<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body> 
<?php
$zahl = 15;

if ($zahl >= 10) {
	function quadrat($qZahl) {
		echo "Das Quadrat von $qZahl ist " 
				. ($qZahl * $qZahl) . ".\n";
	}
}
quadrat($zahl);
?> 
</body>
</html>