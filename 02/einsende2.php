<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Einsendeaufgabe 2</title>
  </head>
<body>
<?php
$eingSek = 1000000;
$restSek = $eingSek % 60;
$min = ($eingSek/60)%60;
$std = intval($eingSek/3600); 
echo "<h1>Zeitumrechnung mit Modulo</h1>";
echo "<p>Umgerechnet: $std Stunde(n), $min Minute(n), $restSek Sekunde(n)";
?>
</body>
</html>