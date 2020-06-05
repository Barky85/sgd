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
$gw1 = new Gelaendewagen ( 75 );
$ah1 = new Anhaenger ();
$tk = new Testklasse ();
print_r ( get_declared_classes () );
?> 

</body>
</html>
