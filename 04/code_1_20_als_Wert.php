<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body>
<?php
function verdoppler($zahl) {
	$zahl = $zahl * 2;
}
$zahl = 10;
verdoppler ( $zahl );
echo $zahl;
?>
</body>
</html>