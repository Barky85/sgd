<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>

<?php
function signatur()
{
	$name = "Norbert Schlupinski";
	$strasse = "An der Hecke 1b";
	$plz = "55667";
	$ort = "Stadthausen";
	
	echo "<div class='sign'>\n";
	echo "<p>$name<br />\n";
	echo "$strasse<br />\n";
	echo "$plz $ort</p>\n";
	echo "</div>\n";
}
?>
</head>
<body>
</body>
</html>