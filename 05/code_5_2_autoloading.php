<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Autoloading</title> 
<?php
include_once ("code_5_1_autoload.inc.php");
?> 
</head>
<body> 

<?php
$sw1 = new Sportwagen ( 250, 301, false, true );
$sw1->ausgeben ();

$gw1 = new Gelaendewagen ( 75 );
$gw1->setBodenfreiheit ( 44 );
$gw1->ausgeben ();

$ah1 = new Anhaenger ();
?> 
</body>
</html>
