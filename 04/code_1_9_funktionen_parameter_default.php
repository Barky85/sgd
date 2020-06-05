<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body> 
<?php
function flaeche_rechteck($laenge, $breite, $einheit = "meter") {
	echo "<p>Die Fläche des Rechtecks beträgt: " . ($laenge * $breite) . " Quadrat{$einheit}.</p>\n";
}
flaeche_rechteck(5, 2);
flaeche_rechteck(351, 212, "millimeter");

?>
</body>
</html>