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
echo "<br />";
echo get_parent_class ( $sw1 );
echo "<hr />";
$gw1 = new Gelaendewagen ( 75 );
echo "<br />";
echo get_parent_class ( $gw1 );
echo "<hr />";
$ah1 = new Anhaenger ();
echo "<br />";
echo get_parent_class ( $ah1 );
echo "<hr />";
$tk = new Testklasse ();
echo "<br />";
echo get_parent_class ( $tk );
?> 
</body>
</html>
