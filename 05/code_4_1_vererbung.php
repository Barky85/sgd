<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Vererbung</title> 
<?php
include_once ("code_4_0_autoklasse.class.php");
?> 
</head>
<body> 
<?php
class Sportwagen extends Autoklasse {
}
$sw1 = new Sportwagen ( 250 );
$sw1->ausgeben ();
?> 

</body>
</html>
