<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Einsendeaufgabe 2b</title>
  </head>
<body>
<h3>Lottozahlen</h3>
<?php
echo "<p>Die gezogenen Zahlen sind: ";
$lottoZahlen = range(1,49);
shuffle($lottoZahlen);
echo "$lottoZahlen[1], $lottoZahlen[2], $lottoZahlen[3], $lottoZahlen[4], $lottoZahlen[5], $lottoZahlen[6]\n</p>" ;

?>
</body>
</html>