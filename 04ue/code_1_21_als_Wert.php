<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body>
<?php
function verdoppler($param) {
	$param = $param * 2;
}

$zahl = 10;
verdoppler($zahl);
echo $zahl;
?>

</body>
</html>