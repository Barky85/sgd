<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Autoloading</title> 
<?php
include_once ("code_5_4_meinautoload.inc.php");
?> 
</head>
<body> 
<?php
$sw1 = new Sportwagen ( 250, 301, false, true );
$methoden = get_class_methods ( "Sportwagen" );
// Alternativ auch, hier aber ohne Anführungszeichen!
// $methoden = get_class_methods($sw1);
echo "<br />";
foreach ( $methoden as $name ) {
	echo "$name<br />\n";
}
?> 
</body>
</html>
