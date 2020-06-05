<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>Eigene Funktionen</title>
</head>
<body>
<?php 
$a = "initial a";
$b = "initial b";
echo "\$a hat den Wert: $a und \$b den Wert: $b<br />";
$b = &$a;
echo "\$a hat den Wert: $a und \$b den Wert: $b<br />";
$a = "geändert";
echo "\$a hat den Wert: $a und \$b den Wert: $b<br />";
?> 
</body>
</html>