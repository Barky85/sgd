<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Einsendeaufgabe Nr. 5</title>
</head>
<body>
<h1>for-Schleife</h1>
<?php
echo "<table cellspacing = '10'>\n";
for($i = 0; $i <= 99; $i++) {

	if($i % 10 == 0) {

		echo "\t<tr>\n";
		$spaltenzaehler = 1;

	}
	echo "\t\t<td>$i</td>\n";
	$spaltenzaehler++;
	
	if($spaltenzaehler == 11) {

		echo "\t</tr>\n";
	}
}
echo "</table>";
?>
</body>
</html>
