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
// Ein Objekt der Klasse Sportwagen,
// die von Autoklasse erbt
$sw1 = new Sportwagen ( 250, 301, false, true );
$sw1->ausgeben ();
// Ein Objekt der Klasse Gelaendewagen,
// die von Autoklasse erbt
$gw1 = new Gelaendewagen ( 75 );
$gw1->setBodenfreiheit ( 44 );
$gw1->ausgeben ();
// Ein Objekt der Klasse Anhaenger
$ah1 = new Anhaenger ();
// Ein Objekt der Klasse Testklasse,
// die in einer Datei in einem Unterverzeichnis abgelegt ist
$tk = new Testklasse ();
?> 

</body>
</html>
