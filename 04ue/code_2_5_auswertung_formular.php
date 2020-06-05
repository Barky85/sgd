<!DOCTYPE html> 
<html lang="de"> 
<head> 
	<meta charset="utf-8" /> 
	<title>Formulare</title> 
<?php 
	require("code_1_25_meineFunktionen.inc.php"); 
?> 
</head> 
<body> 
<?php 
if (isset($_POST["zahl1"])) { 
	$zahl1 = $_POST["zahl1"]; 
	$zahl2 = $_POST["zahl2"]; 
	$ergebnis = addiere($zahl1, $zahl2); 
  
	echo "<h3>Die Summe der Addition 
		$zahl1 + $zahl2 beträgt 
		$ergebnis!</h3>\n"; 
} 
else { 
?> 
<form method = "post">
	<p>Bitte geben Sie die beiden Zahlen in die Felder ein, 
		 die Sie addieren möchten.</p> 
	<p><label for="zahl1">Zahl 1 </label> 
		 <input type="text" 
			name = "zahl1" 
			required 
			placeholder="Zahl 1" 
			autofocus/> 
	</p> 
	<p><label for="zahl2">Zahl 2 </label> 
		 <input type="text" 
			name = "zahl2" 
			required 
			placeholder="Zahl 2"/> 
	</p> 
	<p><input type = "submit" value="Addieren"/> 
		 <input type = "reset" /> 
	</p> 
</form> 
<?php 
} 
?> 
</body> 
</html> 
