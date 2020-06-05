<!DOCTYPE html> 
<html lang="de"> 
<head> 
	<meta charset="utf-8" /> 
	<title>Dateien einbinden</title> 
	<?php 
		include("code_1_25_meineFunktionen.inc.php"); 
	?> 
</head> 
<body> 
<?php 
$ergebnis = addiere(5, 21); 
echo $ergebnis; 
echo "<hr />"; 
  
$ergebnis = subtrahiere($ergebnis, 14); 
echo $ergebnis; 
echo "<hr />"; 
  
$ergebnis = multipliziere($ergebnis, 6); 
echo $ergebnis; 
echo "<hr />"; 
  
$ergebnis = dividiere($ergebnis, 3); 
echo $ergebnis; 
?> 
</body> 
</html> 
