<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body>
<?php
function summiere($summanden) {
	$summe = 0;
	if (is_array ( $summanden )) {
		foreach ( $summanden as $wert )
			$summe += $wert;
	}
	echo "<p>$summe</p>\n";
}

summiere ( array (
		1,
		5,
		7,
		2,
		4,
		2,
		5,
		6,
		4,
		9,
		7,
		5 
) );
summiere ( [ 
		1,
		5,
		7,
		2,
		4,
		2,
		5,
		6,
		4,
		9,
		7,
		5 
] );
?> 
</body>
</html>