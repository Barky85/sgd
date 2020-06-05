<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
<?php
function aussen() {
	echo "Ich bin die Funktion aussen()";
	function innen() {
		echo "Ich bin die Funktion innen()";
	}
}
?> 
</head> 
<body> 
<?php
//das klappt!
aussen();
innen();

//innen (); // Das funktioniert nicht!
?> 
</body>
</html>