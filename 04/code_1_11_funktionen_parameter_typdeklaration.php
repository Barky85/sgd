<?php
declare(strict_types=1);
?> 
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body>
<?php
function flaeche_rechteck(int $laenge,
						  int $breite,
						  string $einheit) {
	echo "<p>Die Fläche des Rechtecks beträgt: " 
		. ($laenge * $breite) 
		. " Quadrat{$einheit}.</p>\n";
}

//flaeche_rechteck(5, "2", "meter");
//flaeche_rechteck(351, 212, 5);
flaeche_rechteck(5, 2, "meter");

?>
</body>
</html>