<!DOCTYPE html> 
<html lang="de"> 
<head> 
	<meta charset="utf-8" /> 
	<title>Formular auswerten</title> 
<?php 
	require("code_1_25_meineFunktionen.inc.php"); 
?> 
</head> 
<body> 
<?php 
$zahl1 = $_POST["zahl1"]; 
$zahl2 = $_POST["zahl2"]; 
$ergebnis = addiere($zahl1, $zahl2); 

echo "<h3>Die Summe der Addition 
		$zahl1 + $zahl2 beträgt 
		$ergebnis!</h3>\n"; 
?> 
</body> 
</html> 
