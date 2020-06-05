<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title>Einsendeaufgabe 3</title>
  </head>
<body>
<h3>Größte Zahl im Array</h3>
<?php
echo "<p>Die größte Zahl im Array ist: ";
$lottoZahlen = [23, 43, 24, 7, 2, 27];

$biggest = $lottoZahlen[0];
for($i=1; $i<=5; $i++) {
    if($biggest < $lottoZahlen[$i]) {
        $biggest = $lottoZahlen[$i];
    }

}
echo $biggest;

?>
</body>
</html>