<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
<style type="text/css"> 
	.sign 
	{ 
		width: 250px; 
		border-top-style: dashed; 
		border-width: 3px; 
		font-family: arial, lucida console, sans-serif; 
		font-size: 12pt; 
	} 
</style> 

<?php
function signatur() {
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